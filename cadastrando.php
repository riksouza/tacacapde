<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrando</title>
        
    </head>

    <body>

<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$banco = 'mydb';
$conexao = mysql_connect($host, $user, $pass, $banco) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<?php
$cidade=$_POST['cidade'];
$latitude=$_POST['latitude'];
$logradouro=$_POST['logradouro'];
$longitude=$_POST['longitude'];
$nome=$_POST['nome'];
$proprietario=$_POST['proprietario'];
$telefone=$_POST['telefone'];
$bairro=$_POST['bairro'];
$sql = mysql_query("INSERT INTO estabelecimento(cidade, latitude, logradouro, longitude, nome, proprietario, telefone, bairro)
VALUES('$cidade', '$latitude', '$logradouro', '$longitude', '$nome', '$proprietario', '$telefone', '$bairro')");
?>

        
        
    </body>
</html>