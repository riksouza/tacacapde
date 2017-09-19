<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Usuario</title>
    </head>

    <body>
    <form name="signup" method="post" action="cadastrandoUsuario.php"> 
    Nome:<input type="text" name="nome"/><br><br>
    Email:<input type="text" name="email"/><br><br> 
    Telefone:<input type="text" name="telefone"/><br><br> 
    Login:<input type="text" name="login"/><br><br> 
    Senha:<input type="password" name="senha"/><br><br> 
    <input type="submit" value="cadastrar"/>
   </form>
        <?php
        // put your code here
        ?>
        
        <a href="index.php" >home</a>
    </body>
</html>
