<?php
include('connect.php');
if (isset($_POST['add_image'])) {
    $p_name = $_POST['p_name'];
    $p_img = $_FILES['p_image']['name'];
    $p_image_temp_name = $_FILES['p_image']['tmp_name'];
    $p_img_folder = 'upload_img/' . $p_img;

    $insert_query = mysqli_query($conn, "insert into 
    imageadd(Name,Image) values('$p_name','$p_img')");
    if ($insert_query) {
        move_uploaded_file($p_image_temp_name, $p_img_folder);
        echo "
        <script>
        alert('PRODUCT ADDED SUCCESSFULLY');
        window.location.href = 'artists.php'
        </script>
        ";
    } else {
        echo "PRODUCTS ADDED FAILED...!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Stream Vibes artist</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="css/adminlte.min.css">
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="css/style.css">
</head>
	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Right navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
					  	<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>					
				</ul>
				<div class="navbar-nav pl-2">
					<!-- <ol class="breadcrumb p-0 m-0 bg-white">
						<li class="breadcrumb-item active">Dashboard</li>
					</ol> -->
				</div>
				
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" data-widget="fullscreen" href="#" role="button">
							<i class="fas fa-expand-arrows-alt"></i>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
							<img src="img/avatar5.png" class='img-circle elevation-2' width="40" height="40" alt="">
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
							<h4 class="h4 mb-0"><strong><span><?php echo $_SESSION['admin_name'] ?></span></strong></h4>
							<!-- <div class="mb-3"><span></span></div> -->
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<i class="fas fa-user-cog mr-2"></i> Settings								
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<i class="fas fa-lock mr-2"></i> Change Password
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item text-danger">
								<i class="fas fa-sign-out-alt mr-2"></i> Logout							
							</a>							
						</div>
					</li>
				</ul>
			</nav>
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar- elevation-4">
				<!-- Brand Logo -->
				<a href="#" class="brand-link">
					<img src="img/streaming-logo-removebg-preview.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light" style="color: #ED441D;"><b>STREAM VIBES</b></span>
				</a>
				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user (optional) -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class
								with font-awesome or any other icon font library -->
							<li class="nav-item">
								<a href="streamvibe.php" class="nav-link">
									<i class="nav-icon fa fa-google-wallet"></i>
									<p>Stream Vibe</p>
								</a>																
							</li>
							<li class="nav-item">
								<a href="audio.php" class="nav-link">
									<i class="nav-icon fas fa-music"></i>
									<p>Audio/Music</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="audioview.php" class="nav-link">
									<i class="nav-icon fas fa-table"></i>
									<p>Audio View</p>
								</a>
							</li>
							<!-- <li class="nav-item">
								<a href="video.php" class="nav-link">
								<i class="nav-icon fas fa-video"></i>
									<p>Video/Movie</p>
								</a>
							</li> -->
							<li class="nav-item">
								<a href="https://dashboard.stripe.com/test/payments" class="nav-link">
									<i class="nav-icon fas fa-table"></i>
									<p>Plan</p>
								</a>
							</li>
							
							<li class="nav-item">
								<a href="artist.php" class="nav-link">
									<i class="nav-icon fas fa-user"></i>
									<!-- <i class="fas fa-user "></i> -->
									<p>Artist</p>
								</a>
							</li>							
							<li class="nav-item">
								<a href="subscription.php" class="nav-link">
									<i class="nav-icon fas fa-play"></i>
									<p>Artist List</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="user.php" class="nav-link">
									<i class="nav-icon  fas fa-users"></i>
									<p>User</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="contact.php" class="nav-link">
									<i class="nav-icon  far fa-file-alt"></i>
									<p>Contact</p>
								</a>
							</li>							
						</ul>
					</nav>
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
         	</aside>
				<!-- /.sidebar -->
         	</aside>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>ARTIST</h1>
							</div>
							
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container-fluid">
					<form action="subscription.php" method="post" enctype="multipart/form-data">
                    <label for="p_name"> Artist NAME</label>
                    <input type="text" class="form-control" name="p_name"><br><br>



                    <label for="p_name"> Artist IMAGE</label>
                    <input type="file" class="form-control" name="p_image"><br><br>
                    <input type="submit" value="Add image" name="add_image" class="btn ">



                </form>

					
						</div>
					</div>
					<!-- /.card -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<footer class="main-footer">
				
				<strong>Copyright &copy; 2023 <b style="color: #0B299B;">Stream Vibes</b> All rights reserved.
			</footer>
			
		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="js/adminlte.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="js/demo.js"></script>
	</body>
</html>