<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>interações com formulários</title>
</head>
<body>
    <header>
        <h1>
            apresente-se para nós
        </h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="nome">nome :</label>
            <input type="text" name="name" id="idnome"> <br><br>
            <label for="snome">sobrenome :</label>
            <input type="text" name="snome" id="idsnome">
        </form>
    </section>
</body>
</html>