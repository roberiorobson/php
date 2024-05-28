<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="index22.css">
</head>
<body>
    <h1>codigo de array</h1>
    <pre>
        <table>
    <?php
    $array = [
        'alunos' => [
            [
            'id' => 1,
            'nome' => 'guigui',
            'endereco' => 'alvorada',
            'rua' => 'aqui',
            'idade' => 257,
            'altura' => 4.36,
            'cep' => 4600000
        ],

            [
            'id' => 2,
            'nome' => 'nunu',
            'endereco' => 'alvirida',
            'rua' => 'lá',
            'idade' => 1,
            'altura' => 1.23,
            'cep' => 4500000
        ],

            ['id' => 3,
            'nome' => 'rato',
            'endereco' => 'buraco',
            'rua' => 'beco',
            'idade' => 600,
            'altura' => 0.23,
            'cep' => 4400000
        ],
        ],
    ];

    print_r($array['alunos'] [0]);
    print_r($array['alunos'] [1]);
    print_r($array['alunos'] [2]);
    ?>

    <table>
       
  <tr>
    <th>Nome</th>
    <th>id</th>
    <th>Endereco</th>
    <th>Rua</th>
    <th>Idade</th>
    <th>Cep</th>
  </tr>
  <tr>
    <td><?php  print_r($array['alunos'] [0] ['nome']); ?></td>
    <td><?php  print_r($array['alunos'] [0] ['id']); ?></td>
    <td><?php  print_r($array['alunos'] [0] ['endereco']); ?></td>
    <td><?php  print_r($array['alunos'] [0] ['rua']); ?></td>
    <td><?php  print_r($array['alunos'] [0] ['idade']); ?></td>
    <td><?php  print_r($array['alunos'] [0] ['cep']); ?></td>
  </tr>
  <tr>
    <td><?php  print_r($array['alunos'] [1] ['nome']); ?></td>
    <td><?php  print_r($array['alunos'] [1] ['id']); ?></td>
    <td><?php  print_r($array['alunos'] [1] ['endereco']); ?></td>
    <td><?php  print_r($array['alunos'] [1] ['rua']); ?></td>
    <td><?php  print_r($array['alunos'] [1] ['idade']); ?></td>
    <td><?php  print_r($array['alunos'] [1] ['cep']); ?></td>
  </tr>
  <tr>
    <td><?php  print_r($array['alunos'] [2] ['nome']); ?></td>
    <td><?php  print_r($array['alunos'] [2] ['id']); ?></td>
    <td><?php  print_r($array['alunos'] [2] ['endereco']); ?></td>
    <td><?php  print_r($array['alunos'] [2] ['rua']); ?></td>
    <td><?php  print_r($array['alunos'] [2] ['idade']); ?></td>
    <td><?php  print_r($array['alunos'] [2] ['cep']); ?></td>
  </tr>
</table>
<table>
<tr>
    <th>Nome</th>
    <th>id</th>
    <th>Endereco</th>
    <th>Rua</th>
    <th>Idade</th>
    <th>Cep</th>
  </tr>
  <tr>
    <?php
for($i=0; $i<count($array['alunos']); $i++){?>
    <td>
    <?php
    print_r($array['alunos'][$i]['nome']);?></td>
    <td>
    <?php
    print_r($array['alunos'][$i]['id']);?></td>
    <td>
    <?php
    print_r($array['alunos'][$i]['endereco']);?></td>
    <td>
    <?php
    print_r($array['alunos'][$i]['rua']);?></td>
    <td>
    <?php
    print_r($array['alunos'][$i]['idade']);?></td>  
    <td>
    <?php
    print_r($array['alunos'][$i]['cep']);?></td></tr>

<?php } ?>

</table>

<?php
    $array = [
        'alunos' => [
            [
            'nome' => 'guigui',
            'aprovado' => 'sim',
            'nota' => '8',
        ],

            [
                'nome' => 'rato',
                'aprovado' => 'não',
                'nota' => '1',
        ],

            ['nome' => 'ratata',
            'aprovado' => 'sim',
            'nota' => '7',
        ],
        ],   
    ];
        ?>
        <table>
    <tr>
    <th>Nome</th>
    <th>Aprovado</th>
    <th>Nota</th>
  </tr>
  <tr>
    <td><?php  print_r($array['alunos'] [0] ['nome']); ?></td>
    <td><?php  print_r($array['alunos'] [0] ['aprovado']); ?></td>
    <td><?php  print_r($array['alunos'] [0] ['nota']); ?></td>
  </tr>
  <tr>
    <td><?php  print_r($array['alunos'] [1] ['nome']); ?></td>
    <td><?php  print_r($array['alunos'] [1] ['aprovado']); ?></td>
    <td><?php  print_r($array['alunos'] [1] ['nota']); ?></td>
  </tr>
  <tr>
    <td><?php  print_r($array['alunos'] [2] ['nome']); ?></td>
    <td><?php  print_r($array['alunos'] [2] ['aprovado']); ?></td>
    <td><?php  print_r($array['alunos'] [2] ['nota']); ?></td>
  </tr>


        </table>
</pre>

</body>
</html>