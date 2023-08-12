<?php require('config.php');
header("Location: ./home.php");
\stripe\stripe::setVerifySslCerts(false);

$token =$_POST['stripeToken'];


$invoice = \stripe\Charge::create(
    array(
        "amount" => 4000,
        "currency" => "USD",
        "description" => "Basic Package Streaming subsciption Payment",
        "source" => $token,
    )
    );
echo "<pre>";
print_r($invoice);
?>

