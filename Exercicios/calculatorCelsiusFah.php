<!-- 
Tarefa
Vocês devem implementar uma calculadora que faz a conversão
de temperaturas de CELSIUS para FAHRENHEIT. Pra quem não sabe, nossa temperatura
aqui no Brasil é medida em Celsius geralmente, mas em outros lugares do mundo usa-se a
unidade Fahrenheit.
Você precisará de uma única variável para armazenar a temperatura em Celsius e depois
exibir o texto (com essa mesma formatação de exemplo):
A temperatura em Fahrenheit é: 32 °F
OBS:
Para converter graus Celsius em graus Fahrenheit, multiplique o valor em Celsius por 1,8
e some 32 ao resultado.
-->


<?php
$conversaoForFarhenheit = null;
// verifica o metodo post está correto, depois fazemos o isset para evitar enviar a requisição todo carregamento da pagina, verificamos se esta vazio
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['temperatura']) && !empty($_POST['temperatura'])) {
        //Se não estiver vazio então pegamosa temperatura pelo método post e fazermos o calculo
        $numCelsius = $_POST['temperatura'];
        $conversaoForFarhenheit = $numCelsius * 1.8 + 32;
    } else {
   
        $erro = "Por favor, digite uma temperatura antes de enviar!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../css/listaEx.css">
    <title>Calculadora</title>
</head>

<body>

 <header>
<a href="../index.php">Tela Inicial</a>

 </header>
<!--Forma que enviar um POST para a própria pagina enviando a temperatura digitada pelo atributo name -->
    <form action="" method="POST">
        <label for="nome">Digite sua temperatura em Celsius:</label><br>
        <input type="number" id="temperatura" name="temperatura" required><br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    // se for diferente de nulo, então coloque a temperatura convertida
   if ($conversaoForFarhenheit !== null) {
    echo "A temperatura em Fahrenheit é: {$conversaoForFarhenheit}°";
}
    ?>
</body>

</html>