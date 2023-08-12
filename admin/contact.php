<?php
        include('connect.php');


        $query = "select * from contact";
        if (isset($_GET['SearchBtn'])) {
            $query = "select * from contact where id = " . $_GET['search'];
        }
        $rows = mysqli_query($GLOBALS["conn"], $query);
        $totalRows = mysqli_num_rows($rows);
        // echo $totalRows;

        // print_r($data);
        if ($totalRows != 0) {
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Stream Vibes contact</title>
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
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Contact Messages</h1>
							</div>
						
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container mt-2">
                <form action="" method="GET">
                    
                <div class="container">
                   <div class="row">
                     <div class="col-6">
                        <!-- <label for="">Search By Id: </label> -->
                        <input type="number" class="form-control" name="search">
                        
                    </div>
                    <div class="col-6">
                        <input type="submit"class="btn btn-outline-primary " value="Search" name="SearchBtn"
                        >
                        <a href="adminview.php" class="btn btn-outline-danger">Reset</a>

                    </div>
                   </div>
                </div>
                </form>
                <table class="table table-striped table-hover mt-5">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>contact</th>
                            <th>address</th>
                            <th>message</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                <?php
                // $query = "select * from employee";
                // $rows = mysqli_query($con,$query);
                // $totalRows = mysqli_num_rows($rows);
                while ($data = mysqli_fetch_assoc($rows)) {
                    echo "<tr>
                <td>" . $data['id'] . "</td>
                <td>" . $data['name'] . "</td>
                <td>" . $data['email'] . "</td>
                <td>" . $data['contact'] . "</td>
                <td>" . $data['address'] . "</td>
                <td>" . $data['message'] . "</td>
                <td> <a class='btn btn-outline-primary' href ='adminupdate1.php?id=$data[id]&name=$data[name]&email=$data[email]&contact=$data[contact]&address=$data[address]&message=$data[message]'>Edit</a></td>               
                <td> <a class='btn btn-outline-danger' href ='delete.php?id=$data[id]' >Delete</a></td>               
            </tr>";
                    // echo $data['id']." ".$data['name']." ".$data['age']." ".$data['designation']." ".$data['salary']."<br>";
                }
            } else {
                echo "No Rows Found !!";
            }
                ?>
                </table>
            </div>
					<!-- /.card -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<footer class="main-footer">
				
				<strong>Copyright &copy; 2023 <b style="color: 0B299B;">Stream Vibes</b> All rights reserved.
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