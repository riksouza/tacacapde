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


			
//	connec+on
//	sql	to	delete	a	record			
$sql	=	"DELETE	FROM	estabelecimento	WHERE	id=1";
if	($conn->query($sql)	===	TRUE)	{
echo	"Record	deleted	successfully";			

}	else	{
 echo	"Error	dele>ng	record:	"	.	$conn->error;			}
 mysqli_close($conn);		
 ?>		