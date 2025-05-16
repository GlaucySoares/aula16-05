<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header('Location: home.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login - App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body> 
    <?php
        include "menu.html";
    ?>

    <div class="container">
        <h2 class="mt-5">Login</h2>
        <?php if (isset($_GET['erro'])): ?>

            <div class="alert alert-danger" role="alert">
                Usuário ou senha inválidos.
            </div>

        <?php endif; ?>

        <form action="valida_login.php" method="post">

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Entrar</button>

        </form>
    </div>
</body>
</html>
