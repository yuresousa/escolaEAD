<?php
session_start();
if(!isset($_SESSION['altenticado']) || $_SESSION['altenticado'] != true){
  header("Location:index.php?login=Faça o login!");
}
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

  <link href="css/telaInicial.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <h2>JAVA</h2>
  <div class="row ">
    <div class="col border">
    <iframe width="100%"  height="480px" src="./java/slides/1.pdf" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col-3">
        <iframe width="100%" src="https://www.youtube.com/embed/videoseries?list=PLHz_AreHm4dlKP6QQCekuIPky1CiwmdI6" frameborder="1" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
  
</div>
<hr>
  <h2>Simulador</h2>
  <iframe height="400px" width="100%" src="https://repl.it/@yuresn/OldSlimPolygon?lite=true" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>

  
</body>
</html>
