<?php

session_start();

/*
Se o método for POST a variável SESSION recebe o valor digitado
no input, dentro do campo user
*/
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['user'] = [
        'email' => filter_input(INPUT_POST, 'email')//filter... captura o valor digitado no input
    ];

    header('location: index.php');
}
?>
<h1>Login</h1>

<form action="" method="POST">
<input type="email" name="email" required>
<input type="submit" valeu="enviar">
</form>