<?php
session_start();

if(!isset($_SESSION['altenticado']) || $_SESSION['altenticado'] != true){
  header("Location:index.php?login=Faça o login!");
}

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);


/* Habilita a exibição de erros */
ini_set("display_errors", 1);
?>
<?php

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

  <title>Átomo</title>
  <link rel="icon" href="img/atomo.ico" type="image/x-icon"/>
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

<body id="page-top" >
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>ÁTOMO</h3>
                <strong>AT</strong>
              </div>

            <ul class="list-unstyled components">
                <li id="aluno">
                    <a href="#" data-toggle="collapse" aria-expanded="false" >
                        <i class="fas fa-user"></i>
                        Aluno
                    </a>
                </li>
                <li id="meusCursos">
                    <a href="#">
                        <i class="fas fa-book"></i>
                        Meus Cursos
                    </a>
                </li>
                <li id="financeiro">
                    <a href="#">
                        <i class="fa fa-credit-card"></i>
                        Financeiro
                    </a>
                </li>

                <li>
                  <a href="#">
                    <i class="fa fa-comment"></i>
                    Notificações
                  </a>
                </li>

                <li id="sair">
                    <a href="#">
                        <i class="fa fa-power-off"></i>
                        Sair
                    </a>
                </li>
                
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>MENU</span>
                    </button>
          
                     <h6><?php echo $linha['Nome'];?></h6>
                </div>
            </nav>
   

   <div id="conteudo">

   <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://hotmart.s3.amazonaws.com/product_contents/20f25bf2-ca73-4382-9f32-4621e18d4532/PerfilFarmacia.jpeg" width="450px" height="450px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.ecursosonlinegratis.com.br/imagemCursosN/58.jpg" width="450px" height="450px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://i1.wp.com/tismartcoder.com.br/wp-content/uploads/2015/12/WhatsApp-Image-2019-08-26-at-19.22.14.jpeg?fit=900%2C900&ssl=1&w=640" width="450px" height="450px" alt="Third slide">
    </div>
  </div>
</div>
            
  
    </div>
    

  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js">

 </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

  <script>
        $(document).ready(function(){

                $("#aluno").click(function(){
                    
                    $(function(){
                        $("#conteudo").load("./aluno.php"); 
                    });
                })
});
  
        $(document).ready(function(){
                $("#meusCursos").click(function(){
                    
                    $(function(){
                        $("#conteudo").load("./meusCursos.php"); 
                    });
                })
        });
   
        $(document).ready(function(){
                $("#financeiro").click(function(){
                    
                    $(function(){
                        $("#conteudo").load("./financeiro.php"); 
                    });
                })
        });
  
        $(document).ready(function(){
                $("#sair").click(function(){
                  window.location.href='logoff.php';
                  
                })
        });
   </script>

</body>

</html>
