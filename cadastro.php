<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Cadastro</title>
    </head>

    <body>
    <form name="signup" method="post" action="cadastrando.php"> 
    Cidade:<input type="text" name="cidade"/><br><br>
    Latitude:<input type="text" name="latitude"/><br><br>
    Logradouro:<input type="text" name="logradouro"/><br><br>
    Longitude:<input type="text" name="longitude"/><br><br> 
    Nome:<input type="text" name="nome"/><br><br> 
    Proprietário:<input type="text" name="proprietario"/><br><br> 
    Telefone:<input type="text" name="telefone"/><br><br> 
    Bairro:<input type="text" name="bairro"/><br><br> 
     Email:<input type="text" name="email"/><br><br> 
    Senha:<input type="password" name="senha"/><br><br> 
    <input type="submit" value="cadastrar"/>
   </form>
        <?php
        // put your code here
        ?>
        
        <a href="index.php" >home</a>
    </body>
</html>
