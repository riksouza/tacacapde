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

<div class="g-signin2" data-onsuccess="onSignIn"></div>

<script>
   function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
</script>


<a href="index.php" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>

</form>
</body>

</html>