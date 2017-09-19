<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', 'root', 'mydb');

	// initialize variables
	$nome = "";
	$proprietario = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$nome = $_POST['nome'];
		$proprietario = $_POST['proprietario'];

		mysqli_query($db, "INSERT INTO estabelecimento(nome, proprietario) VALUES('$nome', '$proprietario')"); 
		$_SESSION['message'] = "Proprietario saved"; 
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

<?php
//session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', 'root', 'mydb');

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }

	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database
		$query = "INSERT INTO users (username, email, password) 
				  VALUES('$username', '$email', '$password')";
		mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: index.php');
	}

}
?>


<?php
// LOGIN USER
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

?>