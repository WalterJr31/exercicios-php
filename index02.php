<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex02</title>
</head>

<body>
    <form action="" method="get">
        Digite um caractere: <input type="text" name="carac"><br>
        <button type="submit">Testar</button>
    </form>
    <?php
    if (isset($_GET['carac'])) {
        $meuCaractere = $_GET['carac'];
        if (ctype_digit($meuCaractere))
            echo "É dígito";
        else
            echo "Não é dígito";
    }
    ?>
</body>

</html>