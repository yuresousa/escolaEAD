<?php

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);

/* Habilita a exibição de erros */
ini_set("display_errors", 1);
?>

<?php
session_start();

if(!isset($_SESSION['altenticado']) || $_SESSION['altenticado'] != true){
  header("Location:index.php?login=Faça o login!");
}


$connect = mysqli_connect('localhost','root','root');
$db = mysqli_select_db($connect,'tomato');
 
$matricula = $_SESSION['login'];

$dados = mysqli_query($connect,"SELECT * FROM usuario where matricula_usuario=$matricula");
$linha = mysqli_fetch_assoc($dados);  
$total = mysqli_num_rows($dados);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Átomo Cursos-Aluno</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/telaInicial.css" rel="stylesheet">
</head>

<body>
<form>
  <div class="row">
    <div class="col">
    <div class="form-group">
      <label for="formGroupExampleInput">Nome</label>
      <input class="form-control" type="text" placeholder="<?php echo $linha['Nome'];?>" readonly>
    </div>
  </div>
  <div class="col">
  <div class="form-group">
    <label for="formGroupExampleInput">Data Nascimento</label>
    <input class="form-control" type="text" placeholder="00/00/2020" readonly>
  </div>
  </div>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Matrícula</label>
    <input class="form-control" type="text" placeholder="<?php echo $linha['matricula_usuario'];?>" readonly>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Senha</label>
    <input class="form-control" type="text" placeholder="<?php echo $linha['senha'];?>" readonly>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input class="form-control" type="text" placeholder="<?php echo $linha['Email'];?>" readonly>
  </div>
</form>
 
</body>
</html>
