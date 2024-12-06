<?php
ob_start();
include_once("conexao.php");

function listarCidades()
{
    global $oConexao;

    $aResultadoCidades = [];

    $sQuery = "SELECT cidnome,
                      cidcodigo
                 FROM mercado.tbcidade";

    $result = pg_query($oConexao, $sQuery);

    while ($aTabela = pg_fetch_assoc($result)) {
        $aResultadoCidades[] = $aTabela;
    }
    return $aResultadoCidades;

    header("location: consulta.php");
    exit();

}
function listarClientes()
{
    $aResultado = [];

    global $oConexao;

    $sQuery = "SELECT c.clicodigo, 
                      c.clinome, 
                      c.clicpf, 
                      c.cidcodigo, 
                      ci.cidnome
               FROM mercado.tbcliente AS c
               INNER JOIN mercado.tbcidade AS ci
                 ON c.cidcodigo = ci.cidcodigo;";

    $result = pg_query($oConexao, $sQuery);

    while ($aTabela = pg_fetch_assoc($result)) {
        $aResultado[] = $aTabela;
    }
    return $aResultado;

    header("location: consulta.php");
    exit();

}
function adicionarCliente($sNome, $iCpf, $sCidades){
    global $oConexao;
    
    $sInsert = "INSERT INTO mercado.tbcliente (clinome,
                                                clicpf,
                                                cidcodigo)
                        VALUES ('".$sNome."', '".$iCpf."',".$sCidades.")";
    $sQuery = pg_query($oConexao, $sInsert);
    header("location: consulta.php");
    exit();
}
function deletarCliente($iCodigoCliente)
{
    global $oConexao;

    $sQuery = "DELETE FROM mercado.tbcliente WHERE clicodigo = " . $iCodigoCliente . "";
    $result = pg_query($oConexao, $sQuery);
}

if (isset($_GET['codigoExcluir'])) {
    deletarCliente($_GET['codigoExcluir']);
    header("location: consulta.php");
    exit();
}
if (isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['cidades'])){
    adicionarCliente($_POST['nome'], $_POST['cpf'], $_POST['cidades']);
    header("location: consulta.php");
    exit();
}
$aResultadoCidades = listarCidades();

$aResultado = listarClientes();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
    padding: 0;
    background-color: #f9f9f9;
}

fieldset {
    border: 1px solid #ccc;
    padding: 15px;
    margin-bottom: 20px;
    background-color: #fff;
}

legend {
    font-size: 1.2em;
    font-weight: bold;
}

table {
    width: 100%;
    border-collapse: collapse;
}

thead th {
    text-align: left;
    font-size: 0.9em;
    border-bottom: 2px solid #ccc;
    padding: 5px;
}

tbody td {
    padding: 5px;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
    text-align: left;
    font-size: 0.9em;
}

tbody tr:nth-child(even) {
    background-color: #f3f3f3;
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

label {
    font-size: 0.9em;
}

input[type="text"],
input[type="number"],
select {
    padding: 5px;
    font-size: 0.9em;
    border: 1px solid #ccc;
    border-radius: 3px;
    width: 100%;
    box-sizing: border-box;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 7px 10px;
    font-size: 0.9em;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>
<body>
    <fieldset>
        <legend>Lista de Clientes</legend>
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Código da Cidade</th>
                    <th>Nome da Cidade</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <?php if (!empty($aResultado)): ?>
                <?php foreach ($aResultado as $linha): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($linha['clicodigo']); ?></td>
                        <td><?php echo htmlspecialchars($linha['clinome']); ?></td>
                        <td><?php echo htmlspecialchars($linha['clicpf']); ?></td>
                        <td><?php echo htmlspecialchars($linha['cidcodigo']); ?></td>
                        <td><?php echo htmlspecialchars($linha['cidnome']); ?></td>
                        <td><?php echo "<a href='consulta.php?codigoExcluir=" . $linha['clicodigo'] . "'>Excluir</a>" ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Nenhum cliente encontrado.</td>
                </tr>
            <?php endif; ?>
        </table>
    </fieldset>

    <fieldset>
        <legend>Cadastro de Cliente</legend>

        <form action="consulta.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">

            <label for="cpf">CPF:</label>
            <input type="number" name="cpf">

            <label for="cidades">Cidade:</label>
            <select name="cidades" id="cidades">
                <?php
                foreach ($aResultadoCidades as $linha) {
                    echo "<option value='" . $linha['cidcodigo'] . "'>" . $linha['cidnome'] . "</option>";
                }
                ?>
                </sel>
            </select>

            <button type="submit">Cadastrar</button>
        </form>
    </fieldset>
</body>

</html>