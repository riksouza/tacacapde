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
$conexao = mysqli_connect($host, $user, $pass, $banco);

// Check connection
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}



$cidade=$_POST['cidade'];
$latitude=$_POST['latitude'];
$logradouro=$_POST['logradouro'];
$longitude=$_POST['longitude'];
$nome=$_POST['nome'];
$proprietario=$_POST['proprietario'];
$telefone=$_POST['telefone'];
$bairro=$_POST['bairro'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = "INSERT INTO estabelecimento(cidade, latitude, logradouro, longitude, nome, proprietario, telefone, bairro, email, senha)
VALUES('$cidade', '$latitude', '$logradouro', '$longitude', '$nome', '$proprietario', '$telefone', '$bairro', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}


mysqli_close($conexao);
?>

    </body>
</html>