<?php
ob_start();

include_once("conexao.php");

function adicionarCategoria($categoria) {
    global $oConexao;
    $sInsertCategoria = "INSERT INTO mercado.tbcategoria (catdescricao) VALUES ('".$categoria."')";
    pg_query($oConexao, $sInsertCategoria);
}

function adicionarDepartamento($departamento) {
    global $oConexao;
    $sInsertDepartamento = "INSERT INTO mercado.tbdepartamento (dptdescricao) VALUES ('".$departamento."')";
    pg_query($oConexao, $sInsertDepartamento);
}

function adicionarCidade($cidade) {
    global $oConexao;
    $sInsertCidade = "INSERT INTO mercado.tbcidade (cidnome) VALUES ('".$cidade."')";
    pg_query($oConexao, $sInsertCidade);
}

function deletarItem($iCodigoExcluir, $sTabela, $sColuna) {
    global $oConexao;

    $sDelete = "DELETE FROM mercado.$sTabela WHERE $sColuna = $1";

    $result = pg_query_params($oConexao, $sDelete, [$iCodigoExcluir]);

    if ($result === false) {
        echo "Erro ao excluir item: " . pg_last_error($oConexao);
    } else {
        echo "Item excluído com sucesso!";
    }
}

function getTabela($sNomeTabela, $aTitulos, $sNomeChave) {
    global $oConexao;
    $sSelect = "SELECT * FROM mercado." . $sNomeTabela;
    $sColunas = "SELECT column_name FROM information_schema.columns WHERE table_name = '".$sNomeTabela."'";

    $oResult = pg_query($oConexao, $sSelect);
    $aResultColunas = pg_query($oConexao, $sColunas);

    $aColunas = [];
    $aResultado = [];

    while($oColuna = pg_fetch_assoc($aResultColunas)){
        $aColunas[] = $oColuna['column_name'];
    }

    while($aTabela = pg_fetch_assoc($oResult)){
        $aResultado[] = $aTabela;
    }

    echo "<table>
           <thead>
            <tr>";
    foreach ($aColunas as $coluna) {
        echo "<th>". $aTitulos[$coluna] . "</th>";
    }
    echo "<th>Ações</th>";
    echo "</tr>
          </thead>
          <tbody>";
    foreach ($aResultado as $valor) {
        echo "<tr>";
        foreach ($aColunas as $coluna) {
            echo "<td>" .$valor[$coluna] . "</td>";
        }
        echo "<td><a href='consulta.php?codigoExcluir=".$valor[$sNomeChave]."&tabela=".$sNomeTabela."&coluna=".$sNomeChave."'>Excluir</a></td>";
        echo "</tr>";
    }
    echo "</tbody>
          </table>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- IF DE EXCLUIR -->
<?php
    if(isset($_GET['codigoExcluir']) && isset($_GET['tabela']) && isset($_GET['coluna'])) {
        deletarItem($_GET['codigoExcluir'], $_GET['tabela'], $_GET['coluna']);
        header("location: consulta.php");
        exit();
    }
?>

<fieldset>
    <legend>Listagem de Cidades</legend>
    <?php
        getTabela("tbcidade", ["cidcodigo" => "Código", "cidnome" => "Nome da Cidade"], "cidcodigo");
    ?>
</fieldset>

<fieldset>
    <legend>Cadastro de Cidades</legend>
    <form action="consulta.php" method="POST">
        <label for="adicionaCidade">Nome: </label>
        <input type="text" name="adicionaCidade" id="adicionaCidade">
        <button type="submit" name="adicionarCidade">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['adicionaCidade'])) { 
            $cidade = $_POST['adicionaCidade']; 
            adicionarCidade($cidade);
            header("location: consulta.php");
            exit();
        }
    ?>
</fieldset>

<fieldset>
    <legend>Listagem de Departamentos</legend>
    <?php
        getTabela("tbdepartamento", ['dptcodigo' => 'Código', 'dptdescricao' => 'Descrição'], "dptcodigo");
    ?>
</fieldset>

<fieldset>
    <legend>Cadastro de Departamento</legend>
    <form action="consulta.php" method="post">
        <label for="adicionaDepartamento">Preencha a descrição do departamento: </label>
        <input type="text" name="adicionaDepartamento" id="adicionaDepartamento">
        <button type="submit" name="botaoEnviarDepartamento">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['adicionaDepartamento'])) { 
            $departamento = $_POST['adicionaDepartamento'];
            adicionarDepartamento($departamento);
            header("location: consulta.php");
            exit();
        }
    ?>
</fieldset>

<fieldset>
    <legend>Listagem de Categorias</legend>
    <?php
        getTabela("tbcategoria", ['catcodigo' => 'Código', 'catdescricao' => 'Descrição'], "catcodigo");
    ?>
</fieldset>

<fieldset>
    <legend>Cadastro de Categoria</legend>
    <form action="consulta.php" method="post">
        <label for="adicionaCategoria">Preencha a descrição da categoria:</label>
        <input type="text" name="adicionaCategoria" id="adicionaCategoria">
        <button type="submit" name="adicionarCategoria">Enviar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["adicionaCategoria"])) {
            $categoria = $_POST['adicionaCategoria'];
            adicionarCategoria($categoria);
            header("location: consulta.php");
            exit();
        }
    ?>
</fieldset>

<?php

ob_end_flush();
?>

</body>
</html>
