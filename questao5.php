<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5</title>
</head>
<body>
    <?php
        $frutas = array('Maça', 'Banana', 'Laranja', 'Uva', 'Manga');
        echo 'Frutas iniciais: </br>';
        foreach($frutas as $fruta){
            echo $fruta . "</br>";
        }
        array_push($frutas, 'Abacaxi');
        echo 'Frutas atualizadas: </br>';
        foreach($frutas as $fruta){
            echo $fruta . "</br>";
        }
    ?>
</body>
</html>