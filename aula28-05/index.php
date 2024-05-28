<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <pre>
    <?php
    define("PI", 3.1415);
    define("pi", 3.1415);
    echo PI;
    echo "<br>";
    echo pi;
    ?>
    
<h1>teste</h1>
    <?php
    function funcConsts() {
        echo "ARQUIVO: ".__FILE__."<br>";
        echo "DIRETÓRIO: ".__DIR__."<br>";
        echo "LINHA: ".__LINE__."<br>";
        echo "FUNÇÃO: ".__FUNCTION__."<br>";
       }
        funcConsts();
    ?>
    <h1>teste2</h1>
    <?php
 $vars_pre = get_defined_vars();
 print_r($vars_pre);
?> 
<h1>teste3</h1>
<?php
 function nome_funcao($par_1 = 0, $par_2 = "vazio") {
 echo "Código da Função <br>";
 return "Dado de Retorno: ".$par_1."/".$par_2;
 }
 $retorno = nome_funcao();
 echo $retorno."<br><br>";
 $retorno = nome_funcao(12, "Bill Gates");
 echo $retorno."<br><br>";
?> 
<h1>teste soma-multiplicação-divisão-subtração</h1>
<?php
function multiplicar($numero1, $numero2) { 
return $numero1 * $numero2;
}
$numero1 = 5;
$numero2 = 10;
$resultado = multiplicar($numero1, $numero2);
echo "O resultado da multiplicacão de $numero1 e $numero2 é: $resultado";
echo "<br>";
  ?>
  <?php
function somatoria($numero1, $numero2) { 
return $numero1 + $numero2;
}
$numero1 = 5;
$numero2 = 10;
$resultado = somatoria($numero1, $numero2);
echo "O resultado da somatoria de $numero1 e $numero2 é: $resultado";
echo "<br>";
  ?>
  <?php
function subtração($numero1, $numero2) { 
return $numero1 - $numero2;
}
$numero1 = 5;
$numero2 = 10;
$resultado = subtração($numero1, $numero2);
echo "O resultado da subtração de $numero1 e $numero2 é: $resultado";
echo "<br>";
  ?>
  <?php
function divisão($numero1, $numero2) { 
return $numero1 / $numero2;
}
$numero1 = 5;
$numero2 = 10;
$resultado = divisão($numero1, $numero2);
echo "O resultado da divisão de $numero1 e $numero2 é: $resultado";
echo "<br>";
  ?>
    <h1>teste operaçoes matematicas</h1>
        <?php
function operaçoes($numero1, $numero2,$numero3) { 
return $numero1 + $numero2 + $numero3;
}
$numero1 = 5;
$numero2 = 10;
$numero3 = 50;
echo $numero1 + $numero2 + $numero3;
echo "<br>";
echo $numero1 / $numero2 + $numero3;
echo "<br>";
echo $numero1 - $numero2 + $numero3;
echo "<br>";
echo $numero1 * $numero2 + $numero3;
  ?>
  <h1>soma e multiplicacão</h1>
   <?php
function somaemultiplicação($numero1, $numero2,$numero3) { 
return $numero1 + $numero2 * $numero3 / $numero2 - $numero1 + $numero3;
}
$numero1 = 5;
$numero2 = 10;
$numero3 = 40;
$resultado = somaemultiplicação($numero1, $numero2,$numero3);
echo "O resultado da somatoria de $numero1 e $numero2 multiplicado por $numero3 dividido por $numero2 e subtraido por $numero1 e soma com $numero3 é: $resultado";
echo "<br>";    
$retorno = somaemultiplicação($numero1, $numero2,$numero3);
echo "resultado é: $retorno";
  ?>
  <h1>elevação</h1>
  <?php
function elevar($base, $exponente) {
return pow($base, $exponente);
}
$base = 2;
$exponente = 3;
$resultado = elevar($base, $exponente);
echo "O resultado ddo numero base $base a potencia $exponente é: $resultado";
?>
</pre>
</body>
</html>

