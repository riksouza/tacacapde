

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE estabelecimento SET 
cidade ='".$cidade."', '".$latitude."', '".$logradouro."', '".$longitude."', '".$nome."', '".$proprietario."', '".$telefone."', '".$bairro."'
where idcliente = ".$ID_ESTAB;    
    
            

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

