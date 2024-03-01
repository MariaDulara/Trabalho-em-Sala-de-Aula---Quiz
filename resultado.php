<!DOCTYPE html>

</head>

<link rel="stylesheet" type="text/css" href="style.css">

<body>

    <?php

    $contador = 0;

    if ($_GET["resposta1"] == "Homem de Ferro nos quadrinhos da Marvel é Anthony Stark.") {
        $contador++; # code...
    }


    if ($_GET["resposta2"] == "O primeiro quadrinho da Marvel Comics foi lançado em 1939.") {
        $contador++; # code...
    }


    if ($_GET["resposta3"] == "A euipe de super-heróis liderada pelo Professor Xavier nos quadrinhos da Marvel é os X-Men.") {
        $contador++; # code...
    }


    if ($_GET["resposta4"] == "opcao2") {
        $contador++; # code...
    }


    if ($_GET["resposta5"] == "opcao2") {
        $contador++; # code...
    }


    if ($_GET["resposta6"] == "opcao1") {
        $contador++; # code...
    }



    ?>

    <h1>Resultado das respostas:</h1>

    <form action="resultado.php" method="get">

        <label>Qual é o nome completo do personagem conhecido como Homem de Ferro nos quadrinhos da Marvel?</label>

        <label> R: Homem de Ferro nos quadrinhos da Marvel é Anthony Stark</label>

        <br><br>

        <label>Em que ano foi lançado o primeiro quadrinho da Marvel Comics?</label>

        <label> R: O primeiro quadrinho da Marvel Comics foi lançado em 1939</label>

        <br><br>


        <label>Qual é o nome da equipe de super-heróis liderada pelo Professor Xavier nos quadrinhos da Marvel?</label>

        <label> R:A equipe de super-heróis liderada pelo Professor Xavier nos quadrinhos da Marvel é os X-Men.</label>

        <br><br>



        <label>Quem é o Deus do Trovão no Universo Marvel?</label>

        <label> R: Thor</label>

        <br><br>


        <label>Quem é o principal vilão em "Vingadores: Guerra Infinita?</label>

        <label> R: Thanos</label>

        <br><br>



        <label> Qual é o planeta natal do Senhor das Estrelas (Star-Lord) no Universo Marvel?</label>

        <label> R:Xandar</label>

    </form>


    <h3>Você acertou <?php echo $contador; ?> questões.</h3>



</body>

</html>