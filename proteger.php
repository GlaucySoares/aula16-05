<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home - App Help Desk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
        <p><a href="logout.php" class="btn btn-danger">Sair</a></p>
        <!-- Conteúdo protegido aqui -->
    </div>
</body>
</html>
