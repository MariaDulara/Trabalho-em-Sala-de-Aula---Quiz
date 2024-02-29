<!DOCTYPE html>

</head>
<body>

<?php

$contador = 0;
if ( $_GET["resposta1"] == "Homem de Ferro nos quadrinhos da Marvel é Anthony Stark.") {
    $contador++;# code...
}

$contador = 0;
if ( $_GET["resposta2"] == "O primeiro quadrinho da Marvel Comics foi lançado em 1939.") {
    $contador++;# code...
}

$contador = 0;
if ( $_GET["resposta3"] == "A euipe de super-heróis liderada pelo Professor Xavier nos quadrinhos da Marvel é os X-Men.") {
    $contador++;# code...
}

$contador = 0;
if ( $_GET["resposta4"] == "resposta4_opcao2") {
    $contador++;# code...
}

$contador = 0;
if ( $_GET["resposta5"] == "resposta5_opcao2") {
    $contador++;# code...
}

$contador = 0;
if ( $_GET["resposta"] == "resposta6_opcao1") {
    $contador++;# code...
}



?>

    <h1>Resultado das respostas</h1>


    <label>Qual é o nome completo do personagem conhecido como Homem de Ferro nos quadrinhos da Marvel?</label>
    <br>
    <label> R: Homem de Ferro nos quadrinhos da Marvel é Anthony Stark</label>

    <br><br> 

    <label>Em que ano foi lançado o primeiro quadrinho da Marvel Comics?</label>
    <br>
    <label> R: O primeiro quadrinho da Marvel Comics foi lançado em 1939</label>

    <br><br> 


    <label>Qual é o nome da equipe de super-heróis liderada pelo Professor Xavier nos quadrinhos da Marvel?</label>
    <br>
    <label> R:A euipe de super-heróis liderada pelo Professor Xavier nos quadrinhos da Marvel é os X-Men.</label>

    <br><br> 



    <label>Quem é o Deus do Trovão no Universo Marvel?</label>
    <br>
    <label> R: Thor</label>

    <br><br> 


    <label>Quem é o principal vilão em "Vingadores: Guerra Infinita?</label>
    <br>
    <label> R: Thanos</label>

    <br><br> 



    <label> Qual é o planeta natal do Senhor das Estrelas (Star-Lord) no Universo Marvel?</label>
    <br>
    <label> R:Xandar</label>


    <p>Você acertou <?php echo $contador; ?> questões.</p>

    
</body>
</html>