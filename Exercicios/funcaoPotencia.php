<?php
/*
Combinando os conhecimentos de funções e loops, escreva uma function para elevar um
número à alguma potência. Ela vai receber 2 parâmetros,
● Número
● Potência
e retornar um número inteiro.
OBS: NÃO VALE USAR FUNÇÕES PRONTAS DE ELEVAÇÃO, COMO pow OU **. Tem
que usar loops pra valer o desafio ;)
Exemplos:
1) Se o número for 2 e a potência 2,
2² = 2 * 2 = 4
Logo, a função tem que retornar 4.
2) Se o número for 4 e a potência for 3:
4³ = 4 * 4 * 4 = 64
A função vai retornar 64.

*/


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


    <?php

    function retornaPotencia($num, $potencia)
    {
         $num_pot = 1;
        for ($i = 0; $i < $potencia; $i++) {
          
            $num_pot = $num_pot * $num ;
            
            
        }
       
        echo  "<br> A Potencia é: " ,$num_pot;
    }

    retornaPotencia(4, 3)

    ?>



</body>

</html>