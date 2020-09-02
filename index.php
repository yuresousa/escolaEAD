<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Cursos Online</title>
    <link rel="icon" href="img/atomo.ico" type="image/x-icon"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/index.css" rel="stylesheet">
    </style>
</head>
<body>

<div class="container">
    <div class="card card-login mx-auto text-center ">
        <div class="card-header mx-auto">
            <span> <img src="./img/tomato.png" class="w-75" alt="Logo"> </span><br/>

        </div>
        <div class="card-body">
            <form action="./validaLogin.php" method="post">
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><img src="./img/cadeado.png"width="100%"></span>
                    </div>
                    <input type="text" pattern="^\d{1,10}"  name="login" class="form-control" placeholder="Matrícula" required="Campo vazio">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <img src="./img/chave.png" width="100%"></span>
                    </div>
                    <input type="password" pattern="[a-zA-Z0-9]+" name="password" class="form-control" placeholder="Senha" required="Campo vazio">
                </div>

                <div class="form-group">
                    <input type="submit" name="entrar" value="Entrar" class="btn btn-outline-danger float-right login_btn">
                </div>
                <?php
                    if(isset($_GET['login'])){
                ?>
                    <span class="text-danger"><?php  echo $_GET['login']; }  ?></span>     
              
            </form>
        </div>
    </div>
</div>
</body>
</html>


