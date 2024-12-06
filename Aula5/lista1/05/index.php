<?php
include_once '../04/function.php';
include_once '../03/function.php';
include_once '../02/function.php';
include_once '../05/function.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Cliente</legend>
            <?php
                 montaInput2("nome", "text","nome","Preencha seu nome: ");
                 echo "<br>";
                 montaInput2("sobrenome", "text","sobrenome","Preencha seu sobrenome: ");
                 echo "<br>";
                 montaInput2("endereco", "text","endereco","Informe o seu endereço: ");
                 echo "<br>";
                 montaInput2("numero-endereco", "number","numero-endereco","Informe o número do endereço: ", 0, 9999);
                 echo "<br>";
                 montaInput2("bairro", "text","bairro","Informe seu bairro: ");
                 echo "<br>";
                 montaInput2("cidade", "text","cidade","Informe sua cidade: ");
                 echo "<br>";
                 montaInput2("telefone", "tel","telefone","Informe seu telefone: ");
                 echo "<br>";
                 montaInput2("email", "email","email","Informe o seu email: ");

            ?>
    </fieldset>

    <fieldset>
        <legend>Pizza</legend>
        
        <p>Sabor</p>
        <?php
            montaCheckbox2("sabor","4queijos","4queijos","4 queijos");
            montaCheckbox2("sabor","pepperoni","pepperoni","Pepporoni");
            montaCheckbox2("sabor","strogonoffcarne","strogonoffcarne","Strogonoff de Carne");
            montaCheckbox2("sabor","mexicana","mexicana","Mexicana");
            montaCheckbox2("sabor","calabresa","calabresa","Calabresa");
            montaCheckbox2("sabor","chocolatepreto","chocolatepreto","Chocolate Preto");
            montaCheckbox2("sabor","chocolatebranco","chocolatebranco","Chocolate Branco");
        ?>

        <p>Borda</p>
        <?php

            montaRadio2("borda","chocolate","chocolate","Chocolate");
            montaRadio2("borda","requeijao","requeijao","Requeijão");
            montaRadio2("semborda","semborda","semborda","Sem borda");

        ?>
    </fieldset>

    <fieldset>
        <legend>Pagamento</legend>
        <?php
        
            montasSelect("pagamento","Cartão","Cheque","Dinheiro");

        ?>
    </fieldset>
</body>
</html>