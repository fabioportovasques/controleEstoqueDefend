<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php

require 'con.php';

//$campo =$_POST['campo'];

$stmt = $pdo->query("
SELECT codProd,nomePessoa,nomeProd,dataInicialCadastro,dataFinalCadastro,situacaoCadastro
FROM produto prod
INNER JOIN lancamento l on prod.codProd = l.produto_codProd
INNER JOIN pessoa p on p.codPessoa = l.pessoa_codPessoa
  where codProd like '%".$_POST['consultar']."%'");

?>

<table>
    <thead>
        <tr>
        <td>Codigo</td>
        <td>Nome</td>
        <td>Nome do produto</td>
        <td>Data Inicial</td>
        <td>Data Final</td>
        <td>situacao</td>

        </tr>
    </thead>    
<?php 

while ($row = $stmt->fetch())
{

    ?>

    <tbody>
        <tr>
        <td><?php echo $row['codProd']; ?></td>
        <td><?php echo $row['nomePessoa']; ?></td>
        <td><?php echo $row['nomeProd']; ?></td>
        <td><?php echo $row['dataInicialCadastro']; ?></td>
        <td><?php echo $row['dataFinalCadastro']; ?></td>
        <td><?php echo $row['situacaoCadastro']; ?></td>
        </tr>
    </tbody>    

    <?php
}



?>
