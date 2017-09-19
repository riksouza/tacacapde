

<!DOCTYPE html>
<html>
<head>

        <meta charset="UTF-8">
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        
        <meta name = "google-signin-client_id" content = 
              "617756660115-n8206jnbhi3pmq4a7kjrk3qi9ijvjgav.apps.googleusercontent.com">
    </head>
<body>
<form name="loginform" method="post" action="userautentication.php">
E-mail: <input type="text" name="email" /> <br><br>
senha: <input type="text" name="senha" /> <br><br>
<input type="submit" value="entrar"/>
<a href="index.php" >cancelar</a><br><br>
</form>

<div class="g-signin2" data-onsuccess="onSignIn"></div>
		
		<p id='msg'></p>
		<script>
		function onSignIn(googleUser) {
			var profile = googleUser.getBasicProfile();
			var userID = profile.getId(); 
			var userName = profile.getName(); 
			var userPicture = profile.getImageUrl(); 
			var userEmail = profile.getEmail(); 			 
			var userToken = googleUser.getAuthResponse().id_token; 
			
			document.getElementById('msg').innerHTML = userEmail;
			if(userEmail !== ''){
				var dados = {
					userID:userID,
					userName:userName,
					userPicture:userPicture,
					userEmail:userEmail
				};
				$.post('valida.php', dados, function(retorna){
					if(retorna === '"erro"'){
						var msg = "Usuário não encontrado com esse e-mail";
						document.getElementById('msg').innerHTML = msg;
					}else{
						window.location.href = retorna;
					}
					
				});
			}else{
				var msg = "Usuário não encontrado!";
				document.getElementById('msg').innerHTML = msg;
			}
		}
		</script>		
<!--                <script>
                function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
</script>-->

 <script>
gapi.load('auth2', function() {
  auth2 = gapi.auth2.init({
    client_id: '105804655126142991513.apps.googleusercontent.com',
    fetch_basic_profile: false,
    scope: 'profile'
  });

  // Sign the user in, and then retrieve their ID.
  auth2.signIn().then(function() {
    console.log(auth2.currentUser.get().getId());
  });
});
</script>               
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		


<!--<a href="index.php" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>-->




</body>

</html>