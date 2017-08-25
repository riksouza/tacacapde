
<?php
$host = 'localhost';
$user = 'id2702837_root';
$pass = 'r1kSouza';
$banco = 'id2702837_mydb';
$conexao = mysqli_connect($host, $user, $pass, $banco);



// Check connection
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autenticando usu�rio</title>
        <script type="text/javascript">
            function loginsuccessfully() {
                setTimeout("windows.location='painel.php'", 3000);
            }

            function loginfailed() {
                setTimeout("windows.location='painel.php'", 3000);
            }
        </script>   
    </head>

    <body>   


        <?php
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $result = mysqli_query($conexao, "SELECT * FROM estabelecimento WHERE email = '$email' and senha = '$senha");
        if ($result) {
            $row = mysqli_num_rows($result);
            if ($row > 0) {
                echo $row;
                echo "usuario logado";
            } else {
                echo"<center>Nome de usuario ou senha invalidos</center>";
                echo"<script>loginfailed()</script>";
            }
        }
        ?>

    </body>
</html>