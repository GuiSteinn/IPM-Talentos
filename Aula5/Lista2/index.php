<?php
    include 'teste.php'; // Inclui a conexão ao banco

    function getTabela($oConexao, $tabela) {
        try {
            $query = "SELECT * FROM $tabela"; // Ajuste o nome do schema, se necessário
            $result = pg_query($oConexao, $query);

            if (!$result) {
                throw new Exception("Erro ao consultar tabela $tabela: " . pg_last_error($oConexao));
            }

            $registros = pg_fetch_all($result);

            echo "<h2>Listagem da tabela $tabela</h2>";
            if ($registros) {
                echo "<table border='1'>";
                echo "<thead><tr>";
                foreach (array_keys($registros[0]) as $campo) {
                    echo "<th>" . ucfirst($campo) . "</th>";
                }
                echo "</tr></thead><tbody>";

                foreach ($registros as $registro) {
                    echo "<tr>";
                    foreach ($registro as $campo => $valor) {
                        echo "<td>$valor</td>";
                    }
                    echo "</tr>";
                }

                echo "</tbody></table>";
            } else {
                echo "Nenhum registro encontrado na tabela $tabela.";
            }
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    // Listar registros das tabelas
    getTabela($oConexao, 'tbcategoria');
    getTabela($oConexao, 'tbdepartamento');
    getTabela($oConexao, 'tbcidade');
?>
