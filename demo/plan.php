<?php include ("general.php"); ?>

<!DOCTYPE html>
<html lang="en">

<body>



<!-- Begin | Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
<div id="wrapper" data-scrollable="true">

<?php include "./include/sideBar.php"; ?>

    <!-- Begin | Page Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
    <main id="pageWrapper">

        <!-- Page Banner [[ Find at scss/base/core.scss ]] -->
        <div class="banner bg-home"></div>

        <!-- Begin | Main Container [[ Find at scss/base/core.scss ]] -->
        <div class="main-container under-banner-content" id="appRoute">
            <div class="row section">
                <div class="col-xl-11 mx-auto">
                    <div class="row align-items-xl-center">
                    <?php 


        foreach ($plans as $data) {

echo '<div class="col-xl-4 col-md-6 mb-4 mb-md-0">
<div class="plan-card text-left px-sm-5 py-sm-4 p-3">
    <h2 class="text-primary mb-4"> '.$data['name'] .'</h2>
       <p class="text-secondary mt-2">'.$data['specification'] .'</p>
       
    <a href="'.$data['paymentPage'] .'" class="btn btn-pill btn-air btn-warning"> $'.$data['price'] .'</a>
</div>
</div>';
}
?>
 

                    </div>
                </div>
            </div>
        </div>
        <!-- End | Main Container -->

        <?php include "./include/footer.php"; ?>

    </main>
    <!-- End | Page Wrapper -->

    <!-- Begin | Right Sidebar [[ Find at scss/framework/base/sidebar/right/sidebar.scss ]] -->

    <!-- End | Right Sidebar -->

</div>
<!-- End | Wrapper -->

<!-- Begin | Language Modal -->
<?php include "./include/language.php"; ?>
<!-- End | Language Modal -->

<!-- Back Drop -->
<div class="backdrop header-backdrop"></div>
<div class="backdrop sidebar-backdrop"></div>

<!-- Scripts -->
<script src="../assets/js/vendors.bundle.js"></script>
<script src="../assets/js/scripts.bundle.js"></script>
</body>
</html>