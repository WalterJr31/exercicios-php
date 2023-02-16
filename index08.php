<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex08</title>
</head>

<body>
    <form action="" method="get">
        Primeiro Numero: <input name="num1" type="text"><br>
        Segundo numero: <input name="num2" type="text"><br>
        <input type="submit" name="operacao" value="+">
        <input type="submit" name="operacao" value="-">
        <input type="submit" name="operacao" value="*">
        <input type="submit" name="operacao" value="/">
    </form>
    <?php
    if (isset($_GET['num1']) && (isset($_GET['num2']))) {
        $a = $_GET['num1'];
        $b = $_GET['num2'];
        $op = $_GET['operacao'];

        if (!empty($op)) {
            if ($op == '+')
                $c = $a + $b;
            else if ($op == '-')
                $c = $a - $b;
            else if ($op == '*')
                $c = $a * $b;
            else
                $c = $a / $b;

            echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
        }
    }
    ?>
</body>

</html>