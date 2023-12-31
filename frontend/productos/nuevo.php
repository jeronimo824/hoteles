<?php
   session_start();
  
  if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 1){
    header('location: ../login.php');
  }
?>
<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Hotel DECAMERON">
		<meta name="author" content="Hotel">
		<link rel="shortcut icon" href="../../backend/img/ico.png" />

		<!-- Title -->
		<title>Nuevos productos | Hotel "DECAMERON"</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="../../backend/css/bootstrap.min.css">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="../../backend/fonts/style.css">
		<!-- Main css -->
		<link rel="stylesheet" href="../../backend/css/main.css">



	</head>

	<body>

		<!-- Loading starts -->
		<div id="loading-wrapper">
			<div class="spinner-border" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Loading ends -->


		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
			<!-- Sidebar wrapper start -->
			<nav id="sidebar" class="sidebar-wrapper">
				
				<!-- Sidebar brand start  -->
				<div class="sidebar-brand">
					<a href="../administrador/escritorio.php" class="logo">
						<img src="../../backend/img/decameron.png" alt="Hotel DECAMERON" />
					</a>
				</div>
				<!-- Sidebar brand end  -->

				<!-- Sidebar content start -->
				<div class="sidebar-content">

					<!-- sidebar menu start -->
					<div class="sidebar-menu">
						<ul>
							<li class="header-menu">General</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-devices_other"></i>
									<span class="menu-text">Dashboards</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="../administrador/escritorio.php">Admin Dashboard</a>
										</li>
										
									</ul>
								</div>
							</li>
							
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-briefcase"></i>
									<span class="menu-text">Gestión</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="../recepcion/mostrar.php">Recepción</a>
										</li>
										<li>
											<a href="../salida/mostrar.php">Salida</a>
										</li>
										
									</ul>
								</div>
							</li>

							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-settings1"></i>
									<span class="menu-text">Mantenimieto</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="../habitacion/mostrar.php">Habitación</a>
										</li>
										<li>
											<a href="../h_categoria/mostrar.php">Categoria</a>
										</li>
										<li>
											<a href="../pisos/mostrar.php">Pisos</a>
										</li>
										
									</ul>
								</div>
							</li>

							

							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-user1"></i>
									<span class="menu-text">Usuarios</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="../usuarios/mostrar.php">Usuarios</a>
										</li>
										<li>
											<a href="../clientes/mostrar.php" >Clientes</a>
										</li>
										
										
									</ul>
								</div>
							</li>


							<li class="sidebar-dropdown" style="display:none;">
								<a href="#">
									<i class="icon-calendar"></i>
									<span class="menu-text">Reservas</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="../rs_habitacion/mostrar.php">Habitaciones</a>
										</li>
										
									</ul>
								</div>
							</li>

							
						</ul>
					</div>
					<!-- sidebar menu end -->

				</div>
				<!-- Sidebar content end -->
				
			</nav>
			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">

				<!-- Header start -->
				<header class="header">
					<div class="toggle-btns">
						<a id="toggle-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
						<a id="pin-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
					</div>
					<div class="header-items">
						<!-- Custom search start -->
						<div class="custom-search">
							<input type="text" class="search-query" placeholder="Search here ...">
							<i class="icon-search1"></i>
						</div>
						<!-- Custom search end -->

						<!-- Header actions start -->
						<ul class="header-actions">
							
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name"><?php echo $_SESSION['nombre']; ?></span>
									<span class="avatar">
										<img src="../../backend/img/user.jpg" alt="avatar">
										<span class="status busy"></span>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
											<div class="header-user">
												<img src="../../backend/img/user.jpg" alt="Admin Template">
											</div>
											<h5>Julie Sweet</h5>
											<p>Admin</p>
										</div>
										<a href="../perfil/mostrar.php"><i class="icon-user1"></i> Mi Perfil</a>
										<a href="../cuenta/mostrar.php"><i class="icon-settings1"></i> Configuración de la cuenta</a>
										<a href="../pages-logout.php"><i class="icon-log-out1"></i> Salir</a>
									</div>
								</div>
							</li>
						</ul>						
						<!-- Header actions end -->
					</div>
				</header>
				<!-- Header end -->

				
				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item">Productos</li>
						<li class="breadcrumb-item active">Nuevos productos</li>
					</ol>
				</div>
				<!-- Page header end -->
				<!-- Main container start -->

				<div class="main-container">

					<!-- Row start -->
					<div class="row justify-content-center gutters">
						<div class="col-xl-7 col-lg-7 col-md-8 col-sm-10">
							<form enctype="multipart/form-data" method="POST" action="" autocomplete="off">
								<div class="card m-0">
									<div class="card-header">
										<div class="card-title">Nuevos productos</div>
										<div class="alert alert-warning" role="alert">
										<i class="icon-warning"></i>Es importante rellenar los campos con &nbsp;<span class="badge badge-primary">*</span>
									</div>
									</div>
									<div class="card-body">
										<div class="row gutters">

											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												<div class="form-group">
													<input type="text" class="form-control"   name="prdnam" placeholder="Nombre del producto" required="">
												</div>
											</div>

											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												<div class="form-group">
												<select class="form-control" id="cat" name="prdcat" required>
													<option>Seleccione categoria</option>
													
												</select>
											</div>
											</div>
											
											
										</div>
										
										<div class="row gutters">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												<div class="form-group">
													<input type="text" class="form-control" maxlength="14"   name="prdcod" placeholder="Código del producto" required="">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												<div class="form-group">
													<input type="text" class="form-control"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="prdpre" placeholder="Precio del producto" required="">
												</div>
											</div>
										</div>


										<div class="row gutters">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												<div class="form-group">
													<input type="text" class="form-control" maxlength="3" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="prdsto" placeholder="Stock del producto">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
												<div class="form-group">
													<select class="form-control" name="prdsta">
													<option value="1">Activo</option>
													
												</select>
												</div>
											</div>
										</div>

										<div class="row gutters">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="form-group">
													<textarea class="form-control" name="prddet" id="message" placeholder="Detalle del producto" maxlength="299" rows="3"></textarea>
													                  
												</div>
											</div>
										</div>

										<div class="row gutters">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="form-group">
													<input type="file" id="imagen" name="foto" onchange="readURL(this);" data-toggle="tooltip">
                 <img id="blah"  alt="your image" style="max-width:90px;" />
													                  
												</div>
											</div>
										</div>
										
										<button  name="insertar" type="submit" class="btn btn-primary float-right">Guardar</button>
										<button type="button"  class="btn btn-danger float-right" onclick="location.href='mostrar.php'">Cancelar</button>

									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- Row end -->

				</div>
				
				<!-- Main container end -->

			</div>
			<!-- Page content end -->

		</div>
		<!-- Page wrapper end -->

		
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="../../backend/js/jquery.min.js"></script>
		<script src="../../backend/js/bootstrap.bundle.min.js"></script>
		<script src="../../backend/js/moment.js"></script>




		<!-- Main JS -->
		<script src="../../backend/js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
		<?php
    include_once '../../backend/php/add_prd.php'
?>
<script>
   function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
  </script>
	<script src="../../backend/js/cat.js"></script>
	</body>
</html>
				