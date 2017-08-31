<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Estabelecimentos</title>
        
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

?>

        
        
 <?php			
//	connec+on….
$sql	= "SELECT * FROM estabelecimento";
$result	= mysqli_query($conexao, $sql );
if(mysqli_num_rows($result)>0){	
    
//	output	data	of	each	row	
while($row=mysqli_fetch_assoc($result))	{
   echo	"id:".$row["ID_ESTAB"]."Nome:".$row["NOME"].
"<br>";}			
}else{			
    echo"0 results";			
    
}			mysqli_close($conexao);		
?>		       
        
        
    </body>
</html>