<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex06</title>
</head>

<body>
    <form action="" method="get">
        Numero 1: <input type="text" name="numero1"><br>
        Numero 2: <input type="text" name="numero2"><br>
        Numero 3: <input type="text" name="numero3"><br>
        <button type="submit">Testar</button>
    </form>
    <?php
    if (isset($_GET['numero1']) && (isset($_GET['numero2'])) && (isset($_GET['numero3']))) {
        $menor = $_GET['numero1'];
        $meio = $_GET['numero2'];
        $maior = $_GET['numero3'];

        if ($meio < $menor) {
            $temp = $menor;
            $menor = $meio;
            $meio = $temp;
        }
        if ($maior < $menor) {
            $temp = $menor;
            $menor = $maior;
            $maior = $temp;
        }
        if ($maior < $meio) {
            $temp = $meio;
            $meio = $maior;
            $maior = $temp;
        }

        echo "$maior < $meio < $menor";
    }
    ?>
</body>

</html>