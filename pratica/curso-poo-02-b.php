<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Curso POO PHP – 02b – Criando Classes e Objetos em PHP</title>
</head>
<body>
    <h1>Curso POO PHP – 02b – Criando Classes e Objetos em PHP</h1>
    <?php
        require_once('classes/Caneta.php');
        $c1 = new Caneta;
        $c1->cor = "Azul" ;
        $c1->ponta = 0.5;
        $c1->tampada = true;

        $c1->destampar();
        $c1->rabiscar();

        $c2 = new Caneta;
        $c2->cor = "Verde" ;
        $c2->carga = 50;
        $c2->tampada = true;

        $c2->tampar();
        $c2->rabiscar();
    ?>
    
    <pre>
        <?php print_r($c1); ?>
    </pre>

    <pre>
        <?php print_r($c2); ?>
    </pre>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>