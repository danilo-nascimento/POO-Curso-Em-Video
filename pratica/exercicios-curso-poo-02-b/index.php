<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Exercícios | Curso POO PHP – 02b – Criando Classes e Objetos em PHP</title>
</head>
<body>
    <h1>Exercícios | Curso POO PHP – 02b – Criando Classes e Objetos em PHP</h1>
    
    <h2>Classe Dormir</h2>

    <?php 
        require('../classes/Dormir.php');
        $d1 = new Dormir;
    ?>
    <pre>
        <code>
            <?php print_r( $d1 ); ?>
        </code>
    </pre>
    <?php
        $d1->mudarPosicao('bruço');
        $d1->ondeVouDormir('Sofá');
    ?>

    <pre>
        <code>
            <?php print_r( $d1 ); ?>
        </code>
    </pre>

    <hr>

    <h2>Classe Chave</h2>

    <?php 
        require('../classes/Chave.php');
        $c1 = new Chave;
    ?>
    <pre>
        <code>
            <?php print_r( $c1 ); ?>
        </code>
    </pre>
    <?php
        $c1->guardar();
        $c1->ligarAlarme();
    ?>

    <pre>
        <code>
            <?php print_r( $c1 ); ?>
        </code>
    </pre>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>