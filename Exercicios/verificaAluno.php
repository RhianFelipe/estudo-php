<?php 
/*
Exercício:
Com base no seguinte array composto pelas notas de uma classe de 30 alunos:
$notas_dos_alunos = ['7.4', '1.7', '8.5', '3.5', '4.4', '8.7', '6.4', '8.4', '1.2', '4.3', '9.8', '0.5', '8.2',
'4.7', '1.1', '3.3', '3.4', '4.8', '8.7', '5.4', '2.2', '3.7', '5.9', '7.4', '4.8', '4.7', '1.5', '8.4', '2.1', '2.7'];
Crie um loop e verifique pra cada item do array se a nota é >= 6 ou não.
Se for >= 6, mostre:
"Aprovado <BR>"
Se for < 6, mostre:
"Reprovado <br>"
No final do loop, mostre também quantos alunos foram reprovados e quantos alunos foram
reprovados

*/


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Calculadora</title>
</head>

<body>

 <header>
<a href="../index.php">Tela Inicial</a>

 </header>


    <?php

$notas_dos_alunos = ['7.4', '1.7', '8.5', '3.5', '4.4', '8.7', '6.4', '8.4', '1.2', '4.3', '9.8', '0.5', '8.2',
'4.7', '1.1', '3.3', '3.4', '4.8', '8.7', '5.4', '2.2', '3.7', '5.9', '7.4', '4.8', '4.7', '1.5', '8.4', '2.1', '2.7'];
$aprovado = 0;
$reprovados = 0;
$i = 0;
for($i; $i < count($notas_dos_alunos); $i++){
 if($notas_dos_alunos[$i] >= 6){
    echo "Aluno ",$i+1 ,": Aprovado <br>";
   $aprovado++;
 }else if($notas_dos_alunos[$i] < 6){

   echo "Aluno ",$i+1 ,": Reprovado <br>";
    $reprovados++;
 }

}
echo "<br>";
echo "Alunos Aprovados: ", $aprovado ,"<br>";
echo "Alunos Reprovados: ", $reprovados;


    ?>
</body>

</html>