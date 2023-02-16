<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex10</title>
</head>

<body>
    <form action="" method="get">
       Nome: <input type="text" name="nome"><br>
       Telefone: <input type="number" name="tel"><br>
       E-mail: <input type="email" name="email"><br>
        <button type="submit">Salvar</button>
    </form>
    <?php
    if (isset($_GET['nome']) && (isset($_GET['tel'])) && (isset($_GET['email']))) {
    $nome = $_GET['nome'];
    $tel = $_GET['tel'];
    $email = $_GET['email'];

    echo "$nome " . "$tel " . "$email ";

}
?>
</body>
</html>