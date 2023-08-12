<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Seo Meta -->
    <meta name="description" content="Stream vibes - Online Music Streaming App Template">
    <meta name="keywords" content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">

    <title>Stream vibes - Online Music Streaming App</title>

    <!-- Favicon -->


    <!-- IOS Touch Icons -->
    <link rel="apple-touch-icon" href="../assets/images/logos/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/logos/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/logos/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="../assets/images/logos/touch-icon-ipad-retina.png">

    <!-- Styles -->
    <link href="../assets/css/vendors.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/styles.bundle.css" rel="stylesheet" type="text/css"/>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php include "conn.php"; ?>


<!-- Begin | Loading [[ Find at scss/framework/base/loader/loader.scss ]] -->
<div id="loading">
    <div class="loader">
        <div class="eq">
            <span class="eq-bar eq-bar--1"></span>
            <span class="eq-bar eq-bar--2"></span>
            <span class="eq-bar eq-bar--3"></span>
            <span class="eq-bar eq-bar--4"></span>
            <span class="eq-bar eq-bar--5"></span>
            <span class="eq-bar eq-bar--6"></span>
        </div>
        <span class="text">Loading</span>
    </div>
</div>
<!-- End | Loading -->


<aside id="sidebar" class="sidebar-primary">

<!-- Begin | Sidebar Header -->
<div class="sidebar-header d-flex align-items-center">
    <a href="./home.php" class="brand">
        <img src="../assets/images/logos/favicon.png" alt="listen-app">
    </a>

    <button type="button" class="btn p-0 ml-auto" id="hideSidebar">
        <i class="ion-md-arrow-back h3"></i>
    </button>

    <button type="button" class="btn toggle-menu" id="toggleSidebar">
        <span></span>
        <span></span>
        <span></span>
    </button>
</div>
<!-- End | Sidebar Header -->

<!-- Begin | Navbar [[ Find at scss/framework/components/navbar/navbar.scss ]] -->
<nav class="navbar">
    <ul class="navbar-nav" data-scrollable="true">
        <li class="nav-item nav-header">Browse Music</li>
        <li class="nav-item">
            <a href="home.php" class="nav-link active"><i class="la la-home"></i><span>Home</span></a>
        </li>

        <li class="nav-item">
            <a href="music.php" class="nav-link"><i class="la la-music"></i><span>Free Music</span></a>
        </li>
        <li class="nav-item">
            <a href="video.php" class="nav-link"><i class="la la-camera"></i><span>Free Movies</span></a>
        </li>
        <li class="nav-item">
            <a href="artists.php" class="nav-link"><i class="la la-microphone"></i><span>Artists</span></a>
        </li>

        <li class="nav-item nav-header">Your Music</li>

        <li class="nav-item">
            <a href="favorites.php" class="nav-link"><i class="la la-heart-o"></i><span>Favorites</span></a>
        </li>
        <li class="nav-item">
            <a href="history.php" class="nav-link"><i class="la la-history"></i><span>History</span></a>
        </li>
        <li class="nav-item nav-header">Your Movies</li>

        <li class="nav-item">
            <a href="favorites.php" class="nav-link"><i class="la la-heart-o"></i><span>Favorites</span></a>
        </li>
        <li class="nav-item">
            <a href="history.php" class="nav-link"><i class="la la-history"></i><span>History</span></a>
        </li>
        
    </ul>
</nav>
<!-- End | Navbar -->

<!-- Begin | Sidebar Footer -->
<div class="sidebar-footer">
    <a href="add-music.php" class="btn btn-block btn-danger btn-air btn-bold">
        <i class="ion-md-musical-note"></i>
        <span>Add Music</span>
    </a>
</div>
<!-- End | Sidebar Footer -->

</aside>


        <!-- Begin | Header [[ Find at scss/framework/base/header/header.scss ]] -->

<header id="header" class="bg-primary">

<div class="d-flex align-items-center">

    <button type="button" class="btn toggle-menu mr-3" id="openSidebar">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <form action="#" id="searchForm">

        <button type="button" class="btn ion-ios-search"></button>
        <input type="text" placeholder="Search..." id="searchInput" class="form-control">

      
    </form>

    <!-- Begin | Header Options -->
    <ul class="header-options d-flex align-items-center">
        
        <li class="dropdown fade-in">
            <a href="javascript:void(0);" class="d-flex align-items-center py-2" role="button" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-circle"><img src="../assets/images/users/thumb.jpg" alt="user"></div>
                <span class="pl-2">Hello  </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu">
                <a class="dropdown-item" href="profile.php"><i class="ion-md-contact"></i> <span>Profile</span></a>
                <a class="dropdown-item" href="plan.php"><i class="ion-md-radio-button-off"></i> <span>Your Plan</span></a>
                <a class="dropdown-item" href="settings.php"><i class="ion-md-settings"></i> <span>Settings</span></a>
                <div class="dropdown-divider"></div>
                <div class="px-4 py-2">
                <a href="logout.php" class="load-page btn btn-air btn-bold btn-pill " style="transition:.5s; font-size:12px">Logout</a>
                </div>
            </div>
        </li>
    </ul>
    <!-- End | Header Options -->
</div>

</header>


 
        <!-- End | Header -->