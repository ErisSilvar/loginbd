<?php

    include_once("validaracesso.php"); 

    if(isset($_GET['erro'])){
        $erro = '<p id="erro">Você não tem acessso á página, pois não é administrador.</p>';
    } else {
        $erro = '';
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 01</title>
    <style>
        #erro {
            border: 2px solid red;
            padding: 3%;
            color: red;
        }
    </style>
</head>
<body>
    <header>
        <h2>Desenvolvimento Web</h2>
    </header>
    <main>
        <h1>Página 01</h1>
        <p>Bom dia, <?= $_SESSION['usuario'] ?>!</p>
        <p><a href="pag2.php">Relatório de vendas</a></p>
        <p><a href="logout.php">Logout</a></p>
        <?=$erro ?>
    </main>
    <footer>
        
    </footer>

    
</body>
</html>