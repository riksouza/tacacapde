<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrando Usu�rio</title>
        
    </head>

    <body>

<?php
$host = 'localhost';
$user = 'id2702837_root';
$pass = 'r1kSouza';
$banco = 'id2702837_tacacadb';
$conexao = mysqli_connect($host, $user, $pass, $banco);

// Check connection
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}




$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$login=$_POST['login'];
$senha=$_POST['senha'];
$sql = "INSERT INTO usuario(nome, email, telefone, login, senha)
VALUES('$nome', '$email', '$telefone', '$login', '$senha')";


if (mysqli_query($conexao, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}


mysqli_close($conexao);
?>

        
        
    </body>
</html>