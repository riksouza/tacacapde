<?php 
include('server.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM estabelecimento WHERE ID_ESTAB=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$nome = $n['NOME'];
			$proprietario = $n['PROPRIETARIO'];
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM estabelecimento"); ?>

<table>
	<thead>
		<tr>
			<th>Nome</th>
			<th>Proprietario</th>
			<th colspan="2">Acao</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['NOME']; ?></td>
			<td><?php echo $row['PROPRIETARIO']; ?></td>
			<td>
				<a href="cadastro.php?edit=<?php echo $row['ID_ESTAB']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['ID_ESTAB']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
	


<form method="post" action="server.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<div class="input-group">
		<label>Nome</label>
		<input type="text" name="nome" value="<?php echo $nome; ?>">
	</div>
	<div class="input-group">
		<label>Proprietario</label>
		<input type="text" name="proprietario" value="<?php echo $proprietario; ?>">
	</div>
	<div class="input-group">

		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" >Salvar</button>
		<?php endif ?>
	</div>
</form>
</body>
</html>