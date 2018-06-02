<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Prática | Curso POO PHP – 03b – Configurando Visibilidade de Atributos e Métodos</title>
</head>
<body>
    <h1>Prática | Curso POO PHP – 03b – Configurando Visibilidade de Atributos e Métodos</h1>
    
    <h2>Classe Caneta</h2>

    <?php 
        require('../classes/Caneta-02.php');
        $c1 = new Caneta;

        $c1->modelo = "Bic Cristal";
        $c1->cor = "Azul";
        //$c1->ponta = 0.5; - Gera erro por ser privado
        //$c1->carga = 90; - Gera erro por ser protegido
        //$c1->tampar(); - Gera erro por ser protegido
        $c1->rabiscar();
    ?>

    <pre>
        <?php print_r($c1); ?>
    </pre>

    <?php $c1->tampar(); ?>

    <pre>
        <?php print_r($c1); ?>
    </pre>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>