<?php
    include("conexion.php");

    if(isset($_POST['email'])){
        session_start();
        $email = $_POST['email'];
        $pass = $_POST['password'];
        include("conexion.php");

        $sesion = $conn->query("SELECT * FROM usuarios WHERE correo = '$email' AND pass = '$pass' AND eliminado=0");
            if($resultado = mysqli_fetch_array($sesion)){
                //$_SESSION['us']=$email;
                if(($resultado["tipo_usuario"] == "Administrador") || ($resultado["tipo_usuario"]=="Empleado")){
                    $nombre = $resultado["nom"];
                    $tipo = $resultado["tipo_usuario"];
                    $img = $resultado["foto"];
                    $_SESSION["nom"]=$nombre;
                    $_SESSION["usu"]=$tipo;
                    $_SESSION["avatar"]=$img;
                    header("Location: dashboardadmin.php"); 
                }else{
                    echo "falló";
                }
                
            }else{
                header("Location: index.php");
                echo "no exito";
            }
    }


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Abarrotes Miramar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon2.ico">

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>

    

    <body>

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="index.html" class="text-success">
                                            <span><img src="assets/images/logo2.png" alt="" height="100"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                <div class="conexion">
                                    <form class="form-horizontal" method="post">
                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="emailaddress">Correo electrónico</label>
                                                <input class="form-control" type="email" id="correo" name="email" required="" placeholder="Ingresa tu correo electrónico">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <a href="pages-forget-password.html" class="text-muted pull-right font-14">¿Olvidaste tu contraseña?</a>
                                                <label for="password">Contraseña</label>
                                                <input class="form-control" type="password" required="" id="password" name="password" placeholder="Ingresa tu contraseña">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-30">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" type="checkbox">
                                                    <label for="checkbox5">
                                                        Recuérdame
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <input class="btn btn-lg btn-primary btn-block" name="entrar" type="submit" href="index.php" value="Entrar"/>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <!--div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-dark m-l-5">Sign Up</a></p>
                                </div>
                            </div>-->

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>