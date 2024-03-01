<!DOCTYPE html>
<html lang="en">

<head>

    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <h1>Descobrindo o Universo Marvel</h1>
    <form action="resultado.php" method="get">
        <label for="pergunta1">Qual é o nome completo do personagem conhecido como Homem de Ferro nos quadrinhos da Marvel?</label>
        <input type="text" name="resposta1" id="pergunta1">

        <br><br>

        <label for="pergunta2">Em que ano foi lançado o primeiro quadrinho da Marvel Comics?</label>
        <input type="text" name="resposta2" id="pergunta2">

        <br><br>

        <label for="pergunta3">Qual é o nome da equipe de super-heróis liderada pelo Professor Xavier nos quadrinhos da Marvel?</label>
        <input type="text" name="resposta3" id="pergunta3">

        <br><br>

        <label for="resposta4">Quem é o Deus do Trovão no Universo Marvel?</label>
        <input type="radio" name="resposta4" value="opcao1" id="resposta4_opcao1">
        <label for="resposta4_opcao1">Hulk</label>

        <input type="radio" name="resposta4" value="opcao2" id="resposta4_opcao2">
        <label for="resposta4_opcao2">Thor</label>

        <input type="radio" name="resposta4" value="opcao3" id="resposta4_opcao3">
        <label for="resposta4_opcao3">Capitão América</label>

        <br><br>

        <label for="resposta5"> Quem é o principal vilão em "Vingadores: Guerra Infinita"?</label>
        <input type="radio" name="resposta5" value="opcao1" id="resposta5_opcao1">
        <label for="resposta5_opcao1">Loki</label>

        <input type="radio" name="resposta5" value="opcao2" id="resposta5_opcao2">
        <label for="resposta5_opcao2">Thanos</label>

        <input type="radio" name="resposta5" value="opcao3" id="resposta5_opcao3">
        <label for="resposta5_opcao3">Ultron</label>

        <br><br>

        <label for="resposta6"> Qual é o planeta natal do Senhor das Estrelas (Star-Lord) no Universo Marvel?</label>
        <input type="radio" name="resposta6" value="opcao1" id="resposta6_opcao1">
        <label for="resposta6_opcao1"> Xandar</label>

        <input type="radio" name="resposta6" value="opcao2" id="resposta6_opcao2">
        <label for="resposta6_opcao2">Terra</label>

        <input type="radio" name="resposta6" value="opcao3" id="resposta6_opcao3">
        <label for="resposta6_opcao3">Knowhere</label>

        <br><br>

        <button type="submit" href="resultado.php">Resultado</button>


    </form>




</body>

</html>