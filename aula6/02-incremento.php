<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8">
    <title>Curso de PHP - cursoemvideo.com</title>
</head>
<body>
<div>
    <?php
        /* Esse exercicio
        pretende demonstrar o uso
        de operadores de incremento
        e decremento */
        $atual = $_GET["aa"]; # Essa linha vai pegar o ano na URL
        echo "o ano atual e $atual e o ano anterior e " . --$atual;
    ?>
</div>
</body>
</html>