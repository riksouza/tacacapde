<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrando Estabelecimento</title>
        
    </head>

    <body>

<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$banco = 'tacacapde';
$conexao = mysqli_connect($host, $user, $pass, $banco);

// Check connection
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}


$cidade=$_POST['cidade'];
$endereco=$_POST['endereco'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$nome=$_POST['nome'];
$proprietario=$_POST['proprietario'];
$telefone=$_POST['telefone'];
$bairro=$_POST['bairro'];
$sql = "INSERT INTO estabelecimento(cidade, endereco, latitude, longitude, nome, proprietario, telefone, bairro)
VALUES('$cidade','$endereco' , '$latitude' , '$longitude', '$nome', '$proprietario', '$telefone', '$bairro')";


if (mysqli_query($conexao, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}


mysqli_close($conexao);

?>

        
        
    </body>
</html>