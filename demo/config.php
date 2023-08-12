<?php require('stripe-php-master/init.php');

$publishableKey="pk_test_51Ne0SULBCPtRQuLKtrSEO76BjZQNHmHSFAePCns66d5YOS1BbwPHc5VQ4FxEllEoPlGzdgSbsUdZUcFggUkcQGB100bE1FRVGj";
$secretKey="sk_test_51Ne0SULBCPtRQuLKqV9Trzyz5wGvuSgwxvAnZ2BBt4fyYhyaoUWASz6Mt6vhI7EY77o25zGsHbDD8WWVdgSPDpdq00w1gdjjRf";

\stripe\stripe::setApiKey($secretKey);
?>