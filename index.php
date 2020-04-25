<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulario de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width-device-width, initial-scale=1">

</head>
<body>

    <p>Formulario para inscrição de competidores</p>

    <form action="script.php" method="post">
        <p>Seu nome: <input type="text" name="nome" required autocomplete="off"></p>
        <p>Sua idade: <input type="number" name="idade" required autocomplete="off"></p>
        <p><input type="submit" value="Enviar dados do competidor" ></p>
    </form>

</body>
</html>