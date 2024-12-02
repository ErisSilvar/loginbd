<?php
    session_start();

    if(isset($_SESSION['usuario']) == FALSE){
        header('Location:index.php');
    } 

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 01</title>
</head>
<body>
    <header>
        <h2>Desenvolvimento Web</h2>
    </header>
    <main>
        <h1>Página 01</h1>
        <p>Bom dia, <?= $_SESSION['usuario'] ?>!</p>
        <p><a href="logout.php">Logout</a></p>
    </main>
    <footer>
        
    </footer>

    
</body>
</html>