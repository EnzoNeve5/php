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
        $a = 3;
        $b = "3";
        $r = ($a === $b)?"SIM":"NAO";
        echo "As variaveis A e B sao identicas? $r";
    ?>
</div>
</body>
</html>