<?php require('config.php');

?>

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
                    <div class="col-xl-2 col-md-4 mb-4 mb-md-0"></div>
        <div class="col-xl-6 col-md-4 mb-4 mb-md-0">
<div class="plan-card text-left px-sm-5 py-sm-4 p-3">
    <h2 class="text-primary mb-4"> Premium</h2>
       <p class="text-secondary mt-2">⭐ Access all free songs and app features <br> <br> ⭐ No Ads between songs <br><br>⭐ Create playlist & access analytics <br><br> ⭐Listen paid song once & purchase
</p>
       <h4 class="text-primary">Yearly Subscription</h4>
       <form action="submit2.php" method="POST">
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $publishableKey; ?>"
        data-amount="6000"
        data-name="StreamVibe Basic Subscription"
        data-descrption="Premium Package Streaming subsciption Payment"
        data-image="../assets/images/logos/favicon.png"
        data-currency="USD"
        >

        </script>
       </form>
</div>
<div class="col-xl-2 col-md-4 mb-4 mb-md-0"></div>
</div>
 

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