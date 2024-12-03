<?php
session_start();

if (
    !isset($_SESSION['usuario'])
    && $_SESSION['usuario']
) {

    header('Location:index.php');
    exit();
} else if (
    !isset($_SESSION['admin'])
    && $_SESSION['admin'] == false
) {

    header('Location:pag1.php?erro=1');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <main>
        <h1>FUNCIONOU</h1>

        <p><a href="logout.php ">Logout</a></p>
    </main>
    

</body>

</html>