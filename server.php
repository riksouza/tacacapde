<?php 
	session_start();
	$db = mysqli_connect('localhost', 'id2702837_root', 'r1kSouza', 'id2702837_mydb');

	// initialize variables
	$nome = "";
	$proprietario = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$nome = $_POST['nome'];
		$proprietario = $_POST['proprietario'];

		mysqli_query($db, "INSERT INTO estabelecimento (nome, proprietario) VALUES ('$nome', '$proprietario')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
	}


	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$proprietario = $_POST['proprietario'];

		mysqli_query($db, "UPDATE estabelecimento SET NOME='$nome', proprietario='$proprietario' WHERE ID_ESTAB=$id");
		$_SESSION['message'] = "proprietario updated!"; 
		header('location: index.php');
	}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM estabelecimento WHERE ID_ESTAB=$id");
	$_SESSION['message'] = "proprietario deleted!"; 
	header('location: index.php');
}


	$results = mysqli_query($db, "SELECT * FROM estabelecimento");


?>