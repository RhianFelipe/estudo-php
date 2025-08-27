<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/listaEx.css">
    <link rel="stylesheet" href="../main.css">
    <title>Document</title>
</head>
 <header>
<a href="../index.php">Tela Inicial</a>

 </header>
<body>
    <!--Estou dizendo para o form mandar os valores para noticia.php pelo método GET-->
    <form method="GET" action="noticia.php">

        Nome: <input type="text" name="nome"> <br>
        Idade: <input type="text" name="idade"> <br>
        <button type="submit">Enviar</button>

    </form>
</body>

</html>