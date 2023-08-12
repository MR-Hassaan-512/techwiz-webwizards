<?php require('config.php');

\stripe\stripe::setVerifySslCerts(false);

$token =$_POST['stripeToken'];


$invoice = \stripe\Charge::create(
    array(
        "amount" => 4000,
        "currency" => "USD",
        "description" => "Basic Streaming subsciption Payment",
        "source" => $token,
    )
    );
echo "<pre>";
print_r($invoice);
?>

