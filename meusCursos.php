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

  <title>Tomato Cursos</title>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
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
<div class="container">

<!-- Jumbotron Header -->
<header class="principal my-4 font-weight-bold" >
  <h1 class="display-5">Seus cursos!</h1>
  <p class="lead"></p>
</header>


<!-- Page Features -->
<div class="row text-center">

<div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/videoseries?list=PLHz_AreHm4dlKP6QQCekuIPky1CiwmdI6" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <div class="card-body">
        <h4 class="card-title"> Curso em vídeo</h4>
        <p class="card-text">Cursos completo de Python do canal Curso em vídeo.  
      </div>
      <div class="card-footer">
        <a href="#" id="curso" class="btn btn-primary">Ir para o curso</a>
      </div>
    </div>
  </div>
    
<div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/videoseries?list=PLHz_AreHm4dlKP6QQCekuIPky1CiwmdI6" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe  >
    <div class="card-body">
        <h4 class="card-title"> Curso em vídeo</h4>
        <p class="card-text">Cursos completo de Python do canal Curso em vídeo.  
      </div>
      <div class="card-footer">
        <a href="#" id="curso" class="btn btn-primary">Ir para o curso</a>
      </div>
    </div>
  </div>
  
  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/videoseries?list=PLHz_AreHm4dlKP6QQCekuIPky1CiwmdI6" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>          
    <div class="card-body">
        <h4 class="card-title"> Curso em vídeo</h4>
        <p class="card-text">Cursos completo de Python do canal Curso em vídeo.  
      </div>
      <div class="card-footer">
        <a href="#" id="curso" class="btn btn-primary">Ir para o curso</a>
      </div>
    </div>
  </div>

  
  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/videoseries?list=PLHz_AreHm4dlKP6QQCekuIPky1CiwmdI6" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <div class="card-body">
        <h4 class="card-title"> Curso em vídeo</h4>
        <p class="card-text">Cursos completo de Python do canal Curso em vídeo.  
      </div>
      <div class="card-footer">
        <a href="#" id="curso" class="btn btn-primary">Ir para o curso</a>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>

<script>
        $(document).ready(function(){

                $("#curso").click(function(){
                    
                    $(function(){
                        $("#conteudo").load("./curso.php"); 
                    });
                })
});</script>
</body>

</html>
