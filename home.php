<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style3.css">
    <!--  Botstrap 5 -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js"></script>
<!-- link para icones -->
<script src="https://kit.fontawesome.com/0518f3ccf0.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>


        <!-- <img src="assets/images/carro.png" id="imgCarro" width="200px" height="80px"> -->
            <div class="form--login">
                    <form id="login">
                        <label for="">usuario</label>
                        <input type="text" name="user" id="user" placeholder="Insira seu usuario">
                        <div class="alerta" id="alert-preencher-user"></div>

                        <label for="">Senha</label>
                        <input type="password" name="password" id="password" placeholder="Insira sua senha">
                        <div class="alerta" id="alert-preencher-password"></div>

                        <span><img src="assets/images/olho.png" alt="" id="olho"></span>

                        <button class="btn btn-success" id="bot">Entrar</button>
                    </form>
            </div>
    


            <div class="status">

                    <div class="spinner-border" id="load" role="status">
                    <div class="visually-hidden">Loading...</div>
                    </div>
                    <div class="erro"></div>
                    <div class="sucesso"></div>
            </div>

    
<script src="assets/js/home.js"></script>
</body>
</html>