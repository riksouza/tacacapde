<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> - ADM</title>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="617756660115-n8206jnbhi3pmq4a7kjrk3qi9ijvjgav.apps.googleusercontent.com">
    </head>
    <body>
		Bem vindo <?php echo $_SESSION['userName']; ?>!
		
                <a href="index.php" onclick="signOut();">Sair</a>
		<script>
		  function signOut() {
			var auth2 = gapi.auth2.getAuthInstance();
			auth2.signOut().then(function () {
			  console.log('User signed out.');
			});
		  }
		</script>
		
    </body>
</html>