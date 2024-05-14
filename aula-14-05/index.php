<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<h1>array e laços</h1>
<h2>exemplo 1</h2>
<pre><?php
    $A1 = array ("antonio", "luiz", "jose","joao");
    echo "$A1[0]<br>";
    echo "$A1[1]<br>";
    echo "$A1[2]<br>";
    echo "$A1[3]<br>";
    ?>
</pre>

<h2>array com for</h2>

<pre>
<?php
$A2 = array ("10","9","8","7");
    echo "$A2[0]<br>";
    echo "$A2[1]<br>";
    echo "$A2[2]<br>";
    echo "$A2[3]<br>";
?>
</pre>

<h2>impressao com [for]:</h2>;
 <pre>
    <?php
    for ($a=0; $a<4; $a++){
        echo "$A1[$a]";
        echo"<br>";
    }
    ?>
 </pre>

 <h2>impressao com [for2]:</h2>;

 <pre>
 <?php
    for ($x=0; $x<4; $x++){
        echo "posiçao $x o valor é $A1[$x]";
        echo"<br>";
    }
    ?>
</pre>

<h2>impressao com [for3]</h2>

<pre>
    <?php
    foreach ($A1 as $dados){
        echo "$dados<br>";
    }
        ?>
</pre>

<h2> array: definiçao explicita(com chave)<br></h2>
<pre>
    <?php
    $var = array ("maria" => 25,
                  "joao"  => 44,
                  "jose"  => 12,
                  "neusa" => 73);
                  foreach ($var as $dados){
                    echo "$dados <br>";
                  }
                  ?>
                  </pre>
                 
   <h2>foreach com chave valor</h2>
<pre>
   <?php
              foreach($var as $chave => $valor){
                echo"$chave: $valor<br>";
              }
              ?>
              </pre>
               <h2>exemplo print</h2>
             <pre>
                <?php
               print_r($var);
              echo"<br>";
              ?>
              </pre>  
 
           


              <h2>array multimensionais</h2>
              <pre>
                <?php   
                 $alunos = array("maria"=> array("endereço" => "rua chile 1046","bairro" => "rebousas","cidade" => "guanambi"),
                                 "joao" => array("endereço" => "rua iapó 234","bairro" => "prado velho","cidade" => "guanambi"),
                                 "zeca" => array("endereço" => "rua iapó 432","bairro" => "barboza","cidade" => "guanambi"),
            );
            $maria= array("maria"=> array("endereço" => "rua chile 1046","bairro" => "rebousas","cidade" => "guanambi"),
        );
            $joao = array("joao" => array("endereço" => "rua iapó 234","bairro" => "prado velho","cidade" => "guanambi"),
        );
            $zeca = array("zeca" => array("endereço" => "rua iapó 432","bairro" => "barboza","cidade" => "guanambi"),
        );
            print_r($alunos);
            print_r($alunos["maria"]["endereço"]);
            print_r($alunos["joao"]["bairro"]);     
            print_r($alunos["zeca"]["bairro"]);
            print_r($maria);

            echo"<br>";
            foreach($alunos as $chave => $aux){
                echo "$chave: <br>";
            }
            foreach($aux as $chave =>$valor){
                echo " - $valor<br>";
            }
                ?>
             </pre> 

     


       


</body>         
</html>