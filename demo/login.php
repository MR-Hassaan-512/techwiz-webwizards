<?php

include ('conn.php');
if ($_SERVER["REQUEST_METHOD"]=="POST"){
   $showalert= false;
    include 'conn.php';
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "Select * from users where email = '$email' AND password='$password'";
    $result = mysqli_query($GLOBALS["conn"],$sql);
    $num = mysqli_num_rows($result);
    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);
  
        if($row['useradmin'] == 'admin'){
  
           $_SESSION['admin_name'] = $row['name'];
           header('location:../admin/streamvibe.php');
  
        }elseif($row['useradmin'] == 'user'){
  
           $_SESSION['user_name'] = $row['name'];
           header('location:../demo/home.php');
  
        }
       
     }else{
        $error[] = 'incorrect email or password!';
     }

  
}
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Seo Meta -->
    <meta name="description" content="Listen App - Online Music Streaming App Template">
    <meta name="keywords"
        content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">

    <title>Stream vibes - Online Music Streaming App</title>

    <!-- Favicon -->
    <link href="../assets/images/logos/favicon.png" rel="icon" />

    <!-- IOS Touch Icons -->
    <link rel="apple-touch-icon" href="assets/images/logos/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/logos/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/logos/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="assets/images/logos/touch-icon-ipad-retina.png">

    <!-- Styles
    <link href="assets/css/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/styles.bundle.css" rel="stylesheet" type="text/css" /> -->

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">



    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <style>
    body {
        background: url("../assets/images/banner/index.png") center no-repeat;
    }

    #hb-content {
        position: absolute;
        top: 50%;
        right: 0;
        left: 0;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        font-size: 1rem
    }

    .demo .card-img--radius-sm {
        -webkit-box-shadow: 0 1px 12px 2px rgba(0, 0, 0, .15);
        -moz-box-shadow: 0 1px 12px 2px rgba(0, 0, 0, .15);
        box-shadow: 0 1px 12px 2px rgba(0, 0, 0, .15);
    }

    .feature i {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        font-size: 2rem
    }
    </style>


    <div class="container mt-5 text-center">

              <div class="row mt-5">
              <?php  error_reporting(0);
if($showalert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You are logged in...!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
 

?>
                    <div class="col-md-8 mx-auto text-white mt-3">
                        <h3 class="mb-4">StreamVibe - Online Music Streaming App</h3>
                        <p>"Immerse Yourself in the Stream Vibe: Music and Movies at Your Fingertips!"</p>
                        
                    </div>
               </div>

        <div class="row mt-5 mb-4">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 p-3" style="    border: 4px solid #999;
                          border-radius: 20px 10px;
                       box-shadow: 14px 14px 28px #555;">
                <!-- <form action="" method="post">
                    
                    <div class="mb-3">
                        <label for="email" class="form-label"
                            style="color:#ED441D; text-shadow:2px 2px 4px #555; font-size:20px;">Email</label>
                        <input type="email" class="form-control" placeholder="email" name="email" id="email">

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"
                            style="color:#ED441D; text-shadow:2px 2px 4px #555; font-size:20px;">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password"
                            id="password">

                    </div>
                    

                    <button type="submit" name="submitbtn" class="btn btn-outline-danger col-md-12"
                        style="transition:.5s;">Log-In</button>
                </form> -->

                <form action="" method="post">
      <h3 class="text-center">login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" class="form-control" name="email" required placeholder="enter your email">
      <br>
      <input type="password" class="form-control" name="password" required placeholder="enter your password">
      <br>
      <input type="submit"  name="login" value="login now" class="btn" style="color: #ED441D;border:1px solid #ED441D">
      <p>don't have an account? <a href="../index.php" class="text-secondary">register now</a></p>
   </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
        <div class="pt-4 mb-5 text-center">
                 <a href="./demo/home.php" class="load-page btn btn-air btn-bold btn-pill btn-outline-danger"  style="transition:.5s; border" target="_blank">Go
                    as a Guest Mode</a>
        </div>
    </div>
   

    <!-- End | Wrapper -->

    <!-- Scripts -->

 
</body>

</html>