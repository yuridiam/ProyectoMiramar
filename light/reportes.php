<?php
  session_start();

  if(empty($_SESSION["usu"])){
    header("Location: index.php");
  }

  //isset($_SESSION['insertado']);

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

        <!-- Plugins css-->
        <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/plugins/switchery/switchery.min.css">
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Summernote css -->
        <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />

        <!-- Sweet Alert -->
        <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">


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

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="dashboardadmin.php" class="logo">
                            <img src="assets/images/logo2.png" style="width:190px; height:70px" alt="logo" class="logo-lg" />
                            <img src="assets/images/logo_sm.png" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav left menu -->
                            <!--<ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <li><a href="#">Quiénes Somos</a></li>
                                <li><a href="#">Ayuda</a></li>
                                <li><a href="#">Contáctanos</a></li>
                            </ul>-->

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                    <form role="search" class="navbar-left app-search pull-left">
                                         <input type="text" placeholder="Buscar..." class="form-control">
                                         <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                        <li class="list-group notification-list" style="height: 267px;">
                                           <div class="slimscroll">
                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-bell-o bg-custom"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">Updates</h5>
                                                        <p class="m-0">
                                                            <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-user-plus bg-danger"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New user registered</h5>
                                                        <p class="m-0">
                                                            <small>You have 10 unread messages</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                                <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-diamond bg-primary"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>

                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="media-left p-r-10">
                                                        <em class="fa fa-cog bg-warning"></em>
                                                     </div>
                                                     <div class="media-body">
                                                        <h5 class="media-heading">New settings</h5>
                                                        <p class="m-0">
                                                            <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>
                                           </div>
                                        </li>
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                                <!--<small class="font-600">See all notifications</small>-->
                                            <!--</a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>

                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><?php 
                                        echo "<img src='". $_SESSION["avatar"] . "'". "alt='' class='thumb-md img-circle'>";
                                    ?></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10"></i> Perfil </a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Ajustes </a></li>
                                        <!--<li><a href="javascript:void(0)"><i class="ti-lock m-r-10"></i> Lock screen</a></li>-->
                                        <li class="divider"></li>
                                        <li><a href="cerrar_sesion.php"><i class="ti-power-off m-r-10"></i> Salir </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                   <?php 
                                        echo "<img src='". $_SESSION["avatar"] . "'". "alt='' class='thumb-md img-circle'>";
                                    ?>
                                </div>
                                <div class="user-info" action="sesion.php">
                                    <?php
                                         echo "<a href='#'>". $_SESSION["nom"] . "</a>";
                                         echo "<p class='text-muted m-0'>". $_SESSION["usu"] . "</p>";
                                    ?>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">

                               <li><a href="dashboardadmin.php"><i class="ti-home"></i> Dashboard </a></li>

                                <?php

                                if($_SESSION['usu']=="Administrador"){

                                    echo('<li><a href="ventas.php"><span class="label label-custom pull-right">11</span> <i class="mdi mdi-square-inc-cash"></i> Ventas </a></li>
                                    <li>
                                        <a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-cube-send"></i> Productos <span class="fa arrow"></span></a>
                                            <ul class="nav-second-level nav" aria-expanded="true">
                                                <li><a href="nuevoproducto.php"><i class="mdi mdi-account-plus"></i> Nuevo Producto</a></li>
                                                <li><a href="modificarproducto.php"><i class="mdi mdi-account-settings-variant"></i> Modificar Producto</a></li>
                                                <li><a href="eliminarproducto.php"><i class="mdi mdi-account-minus"></i> Eliminar Producto</a></li>
                                                <li><a href="verproductos.php"><i class=" mdi mdi-account-search"></i> Visualizar Productos</a></li>
                                            </ul>
                                    </li>

                                        <li><a href="surtir.php"><!--<span class="mdi mdi-content-paste"></span>--><i class="mdi mdi-briefcase-download"></i> Surtir </a></li>

                                        <li>
                                          <a href="cortedecaja.php" aria-expanded="true"><i class="mdi mdi-image-filter-none"></i> Corte de Caja <!--<span class="fa arrow">--></span></a>
                                          <!--<ul class="nav-second-level nav" aria-expanded="true">
                                            <li><a href="forms-general.html">General Elements</a></li>
                                            <li><a href="forms-advanced.html">Advanced Form</a></li>
                                          </ul>-->
                                         </li>
      

                                      <li><a href="reportes.php"><!--<span class="mdi mdi-content-paste"></span>--><i class="mdi mdi-content-paste"></i> Reportes </a></li>

                                      <li>
                                        <a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-account-card-details"></i> Proveedores <span class="fa arrow"></span></a>
                                            <ul class="nav-second-level nav" aria-expanded="true">
                                                <li><a href="nuevoproveedor.php"><i class="mdi mdi-account-plus"></i> Nuevo Proveedor</a></li>
                                                <li><a href="modificarproveedor.php"><i class="mdi mdi-account-settings-variant"></i> Modificar Proveedor</a></li>
                                                <li><a href="eliminarproveedor.php"><i class="mdi mdi-account-minus"></i> Eliminar Proveedor</a></li>
                                                <li><a href="verproveedores.php"><i class=" mdi mdi-account-search"></i> Visualizar Proveedores</a></li>
                                            </ul>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-account-multiple"></i> Gestión de Usuarios <span class="fa arrow"></span></a>
                                            <ul class="nav-second-level nav" aria-expanded="true">
                                                <li><a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-account-star"></i> Empleados<span class="fa arrow"></span></a>
                                                    <ul class="nav-third-level nav" aria-expanded="true">
                                                        <li><a href="nuevoempleado.php"><i class="mdi mdi-account-plus"></i> Nuevo Empleado</a></li>
                                                        <li><a href="modificarempleado.php"><i class="mdi mdi-account-settings-variant"></i> Modificar Empleado</a></li>
                                                        <li><a href="eliminarempleado.php"><i class="mdi mdi-account-minus"></i> Eliminar Empleado</a></li>
                                                        <li><a href="verempleados.php"><i class=" mdi mdi-account-search"></i> Visualizar Empleados</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="nav-second-level nav" aria-expanded="true">
                                                <li><a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-account-settings"></i> Administradores<span class="fa arrow"></span></a>
                                                    <ul class="nav-third-level nav" aria-expanded="true">
                                                        <li><a href="nuevoadmin.php"><i class="mdi mdi-account-plus"></i> Nuevo Administrador</a></li>
                                                        <li><a href="modificaradmin.php"><i class="mdi mdi-account-settings-variant"></i> Modificar Administrador</a></li>
                                                        <li><a href="eliminaradmin.php"><i class="mdi mdi-account-minus"></i> Eliminar Administrador</a></li>
                                                        <li><a href="veradmin.php"><i class=" mdi mdi-account-search"></i> Visualizar Administradores</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                    </li>');                                    
                                  }
                                ?>

                                <?php
                                if($_SESSION['usu']=="Empleado"){

                                      echo('<li><a href="nuevaventa.php"><span class="label label-custom pull-right">1</span> <i class="mdi mdi-square-inc-cash"></i> Nueva Venta </a></li>

                                    <li>
                                        <a href="javascript: void(0);" aria-expanded="true"><i class="mdi mdi-cube-send"></i> Productos <!--<span class="fa arrow">--></span></a>
                                        <!--<ul class="nav-second-level nav" aria-expanded="true">
                                            <li><a href="components-range-slider.html">Range Slider</a></li>
                                            <li><a href="components-alerts.html">Alerts</a></li>
                                            <li><a href="components-icons.html">Icons</a></li>
                                            <li><a href="components-widgets.html">Widgets</a></li>
                                        </ul>-->
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-wpforms"></i>Facturas<!--<span class="fa arrow">--></span></a>
                                        <!--<ul class="nav-second-level nav" aria-expanded="true">
                                            <li><a href="forms-general.html">General Elements</a></li>
                                            <li><a href="forms-advanced.html">Advanced Form</a></li>
                                        </ul>-->
                                    </li>'); 
                                }
                                ?>
                </aside>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                               <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="">
                                    <h4 class="header-title">Reportes</h4>

                                    <p class="text-muted font-13 m-b-10">
                                        
                                    </p>
                                    <!--<div class="p-20 m-b-20">
					                             <form class="form-validation" method="post" enctype="multipart/form-data">
					                                         <?php
					                                             /*if(isset($_SESSION['insertado'])){
					                                        		     if($_SESSION['insertado']==1){
					                                            		   echo "<div class='alert alert-info alert-white alert-dismissible fade in' role='alert'>
                                                						  	<button type='button' class='close' data-dismiss='alert'
                                                        aria-label='Close'>
                                                    						<span aria-hidden='true'>&times;</span>
                                                							 </button>
                                                							 <i class='mdi mdi-check-all'></i>
                                                							 <strong>¡Listo!</strong> Empleado registrado satisfactoriamente.
                                            								  </div>";
					                                            	    }else if($_SESSION['insertado']==2){
					                                            		     echo "<div class='alert alert-danger alert-white alert-dismissible fade in' role='alert'>
                                                							<button type='button' class='close' data-dismiss='alert'
                                                        aria-label='Close'>
                                                    						<span aria-hidden='true'>&times;</span>
                                                							</button>
                                                							<i class='mdi mdi-block-helper'></i>
                                                							<strong>¡Error!</strong> El empleado que está tratando de registrar ya existe.
                                            								  </div>";
					                                            	    }
					                                            	$_SESSION['insertado']=0;
					                                            }
					                            			      */?> 
					                                            <div class="form-group">
					                                                <label for="userName">Nombre<span class="text-danger">*</span></label>
					                                                <input type="text" name="nombre" parsley-trigger="change" required
					                                                       placeholder="Ingrese el nombre completo" class="form-control" id="nombre" maxlength="99">
					                                            </div>
					                                             <div class="form-group">
                                            						<label class="control-label">Seleccione una foto<span class="text-danger">*</span></label>
                                            						<input type="file" name="foto" required class="filestyle" data-buttonname="btn-default">
                                        						</div>
                                        	
					                                             <div class="form-group">
					                                                <label for="userName">Edad<span class="text-danger">*</span></label>
					                                                <input type="text" name="edad" parsley-trigger="change" required
					                                                       placeholder="Ingrese la edad" class="form-control" id="edad" maxlength="2">
					                                            </div>
					                                            <div class="form-group">
					                                                <label for="userName">Dirección<span class="text-danger">*</span></label>
					                                                <input type="text" name="dir" parsley-trigger="change" required
					                                                       placeholder="Ingrese la dirección" class="form-control" id="dir" maxlength="99">
					                                            </div>
					                                            <div class="form-group">
					                                                <label for="userName">Teléfono<span class="text-danger">*</span></label>
					                                                <input type="text" name="telefono" parsley-trigger="change" required
					                                                       placeholder="Ingrese el número teléfonico" class="form-control" id="telefono" maxlength="15">
					                                            </div>
					                                            <div class="form-group">
					                                                <label for="correo">Correo<span class="text-danger">*</span></label>
					                                                <input type="email" name="correo" parsley-trigger="change" required
					                                                       placeholder="Ingrese el correo electrónico" class="form-control" id="correo" maxlength="30">
					                                            </div>
					                                            <div class="form-group">
					                                                <label for="password">Contraseña<span class="text-danger">*</span></label>
					                                                <input id="password" name="password" type="text" required placeholder="Ingrese la contraseña" class="form-control" maxlength="10">
					                                            </div>
					                                            <div class="form-group">
					                                                <label for="password2">Confirme la contraseña <span class="text-danger">*</span></label>
					                                                <input data-parsley-equalto="#password" type="text" required
					                                                       placeholder="Ingrese nuevamente la contraseña" name="password2" class="form-control" id="password2" maxlength="10">
					                                            </div>
					                                            <div class="form-group text-right m-b-0">
					                                            	<input class="btn btn-info waves-effect waves-light" name="entrar" type="submit" value="Registrar"/>
					                                            </div>
					                                        </form>
					                                    </div>
                                          
                                                    <!--<div class="tab-pane" id="modificarempleado">-->

                                                        <div class="p-20 m-b-20">
                                                            <form class="form-validation" method="post" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                  <label for "fecha">Seleccione la fecha del reporte <span class="text-danger">*</span></label><br>
                                                                   <div class="input-group">
                                                                		<input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" name = "fecha">
                                                                		<span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                            	   </div><!-- input-group -->
                                                                </div>
                                                                <div class="form_group">
                                                                	  <input class="btn btn-info waves-effect waves-light" name="generar" type="submit" value="Generar"/>
                                                                </div><br>

                                                                <?php if(isset($_POST['generar'])){
                                                                	?>
                                                                <div class="form-group">
                                                                <table id="datatable-buttons" class="table table-striped table-bordered">
								                                        <thead>
								                                        <tr>
								                                            <th>Numero de venta</th>
								                                            <th>Fecha</th>
								                                            <th>Número de vendedor</th>
								                                            <th>Total</th>
								                                        </tr>
								                                        </thead>
								                                        <tbody>

                                                                <?php

                                                                	
                                                                		include("conexion.php");
                                                                      	$selected = $_POST['fecha'];
                                                                      	$sesion = $conn->query("SELECT * FROM nuevaventa WHERE fecha = '$selected'");
                                                                      	while($resultado = mysqli_fetch_array($sesion)){
                                                                      	?>
                                                                      		<tr>
								                                            <td><?php echo "$resultado[id_venta]";?></td>
								                                            <td><?php echo "$resultado[fecha]";?></td>
								                                            <td><?php echo "$resultado[id_usuario]";?></td>
								                                            <td><?php echo "$resultado[total]";?></td>
								                                        	</tr>
                                                                      	<?php
                                                                      	}
                                                                      	?>

								                                        </tbody>
								                                    </table>

								                                </div>
								                                <?php
                                                                	}

                                                                ?>
								                            </div>
								                        </div>
								                    </div>

                                                                
                                                                <!--<?php
                                                             //if(isset($_SESSION['insertado'])){
                                                                    /*if($_SESSION['modificado']==1){
                                                                        echo "<div class='alert alert-info alert-white alert-dismissible fade in' role='alert'>
                                                                            <button type='button' class='close' data-dismiss='alert'
                                                        aria-label='Close'>
                                                                            <span aria-hidden='true'>&times;</span>
                                                                            </button>
                                                                            <i class='mdi mdi-check-all'></i>
                                                                            <strong>¡Listo!</strong> Empleado modificado satisfactoriamente.
                                                                            </div>";
                                                                    }
                                                                    //$_SESSION['insertado']=0;
                                                                //}*/
                                                            ?> -->
                                                                   
                                                            </form>
                                                        </div>
                                                    </div>

                                    <!--<div class="p-20 m-b-20">
                                        <form action="#" class="form-validation">
                                        <div class="col-sm-12">
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label for="userName">Número de venta<span class="text-danger">*</span></label>
                                                    <input type="text" name="noventa" parsley-trigger="change" required
                                                       placeholder="" disabled="" class="form-control" id="noventa">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label for="fechayhora">Fecha y hora<span class="text-danger">*</span></label>
                                                        <input type="text" name="noventa" parsley-trigger="change" disabled = "" class="form-control" id="noventa">
                                                    </div><!-- input-group 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                        <br>
                                            <div class="col-sm-10">
                                                <div class="form-group">
<!--                                                    <label>Añadir producto<span class="text-danger"></span></label>
                                                    <select class="form-control select2" data-placeholder="Busque el producto que desea añadir">
                                                        <option></option>
                                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <button type="button" class="btn btn-info"><b> &ensp;+&ensp; </b></button>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                        <br>
                                            <div class="col-sm-11">
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class = "col-sm-12">
                                                <div class="form-group">
                                                <br>
                                                <br>
                                                    <div class = "col-sm-5">
                                                        <label class="form-control" style="margin-left:400px">Total</label>
                                                    </div>
                                                    <div class = "col-sm-2">
                                                        <input type="text" style="margin-left:290px"name="total" disabled = "" class="form-control" id="total">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <br>
                                                <br>
                                                <div class="col-sm-3" style="margin-left:696px">
                                                    <button type="button" class="btn btn-success btn-lg waves-effect waves-light btn-sm" id="sa-title">Aceptar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>-->
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- end container -->

                    <!--<div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">39%</strong>.
                        </div>
                        <div>
                            <strong>Simple Admin</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



         <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/summernote/summernote.min.js"></script>

        <!-- form advanced init js -->
        <script src="assets/pages/jquery.form-advanced.init.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.form-validation').parsley();
                $('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
        </script>

         <!-- Datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.colVis.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="assets/pages/jquery.sweet-alert.init.js"></script>

        <!-- init -->
        <script src="assets/pages/jquery.datatables.init.js"></script>


    </body>
</html>