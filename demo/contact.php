
<?php

include 'conn.php';




if(isset($_POST['send'])){
    $name = $_POST['fullName'];
    $email = $_POST['emailAdress'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $query = "insert into contact(name,email,contact,address,message)
     values('$name','$email','$contact','$address','$message')";

    $run = mysqli_query($GLOBALS["conn"],$query);
if($run) 
{
    echo "<script> alert('DATA inserted CONGRACTULATION.....!')
window.location.href = 'contact.php';
</script>";
} else {
echo "Data Not Updated !!";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<link href="../assets/images/logos/favicon.png" rel="icon"/>
<body>



<!-- Begin | Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
<div id="wrapper" data-scrollable="true">

    <!-- Begin | Sidebar [[ Find at scss/framework/base/sidebar/left/sidebar.scss ]] -->
   <?php include "./include/sideBar.php"; ?>
    <!-- End | Sidebar -->

    <!-- Begin | Page Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
    <main id="pageWrapper">

        <!-- Page Banner [[ Find at scss/base/core.scss ]] -->
        <div class="banner bg-home"></div>
        <div class="container-fluid my-4">
    <div class="row">
        <div class="col-lg-5 scrollFade">
            <img src="../assets/images/cover/large/1.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-7 scrollFade">
        <form class="form-contact contact_form" action="mailSend.php" method="post" id="contactForm">
                    <div class="row">
                    <div class="col-12 mt-3">
                            <div class="form-group">
                                <input class="form-control valid" name="fullName" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="col--12 mt-3">
                            <div class="form-group">
                                <input class="form-control valid" name="emailAdress" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col--12 mt-3">
                            <div class="form-group">
                                <input class="form-control valid" name="Contact" id="Contact" type="Contact" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Contact'" placeholder="Contact Number" required>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <input class="form-control" name="Adress" id="Adress" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Adress'" placeholder="Enter Adress" required>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-5">
                        <input name="send" class="btn btn-outline-danger mt-3" style=" transition:ease-in-out .5s;" value="Submit" type="submit">
                    </div>
                </form>
        </div>
    </div>
</div>


        <?php include "./include/footer.php"; ?>

    </main>
   

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