<?php require('config.php');

\stripe\stripe::setVerifySslCerts(false);

$token =$_POST['stripeToken'];


$invoice = \stripe\Charge::create(
    array(
        "amount" => 6000,
        "currency" => "USD",
        "description" => "Premium Package Streaming subsciption Payment",
        "source" => $token,
    )
    );
echo "<pre>";
print_r($invoice);
?>

