<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login em bd</title>
</head>
<body>
    <main>
        <header>

        </header>
        <main>
            <h1>Session PHP</h1>
            <h2>Desenvolvimento Web</h2>

            <form method="get" action="login.php">
                <fieldset>
                    <legend>Login</legend>
                    <label for="usuario">Usuário: </label>
                    <input type="text" name="usuario" id="usuario"><br><br>
                    <input type="checkbox" name="admin" id="admin">
                    <label for="admin">Admin</label><br><br>
                    <button type="submit" name="logar">Logar</button>
                </fieldset>
            </form>
        </main>
        <footer>

        </footer>
    </main>
</body>
</html>