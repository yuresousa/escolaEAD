<?php
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);


/* Habilita a exibição de erros */
ini_set("display_errors", 1);
?>
<?php 

session_start();

$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = $_POST['password'];
$connect = mysqli_connect('localhost','root','root');
$db = mysqli_select_db($connect,'tomato');


if (isset($entrar)) {
            
      $verifica = mysqli_query($connect,"SELECT matricula_usuario FROM usuario where matricula_usuario=$login and senha='$senha'") or die(header("Location:index.php?login=Login ou senha incorreto"));
        if (mysqli_num_rows($verifica)<=0){
          $_SESSION['altenticado'] = false;
         header("Location:index.php?login=Login ou senha incorreto");
          die();
        }else{
          setcookie("login",$login);
          $_SESSION['login'] = $login;
          $_SESSION['altenticado'] = true;
          header("Location:telaPrincipal.php");
        }
    }

?>