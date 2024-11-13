<?php

$msg = '';

$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';

// setcookie('cookie', 'olá mundo');

// print_r($_COOKIE);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    !empty($login) && !empty($password) ?  $msg = 'Usuário logado' : $msg = 'Usuário ou senha incorretos';
}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <input type="login" name="login" placeholder="Digite o login" value="<?= $login ?>">
        <br>
        <input type="password" name="password" placeholder="Digite a senha" value="<?= $password ?>">

        <input type="submit" value="Enviar">
    </form>

    <?php

        echo $msg;
    ?>

</body>
</html>