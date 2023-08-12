<?php



function insertPlan($name, $price, $specification, $interval)
{
    $escapedName = mysqli_real_escape_string($GLOBALS["conn"], $name);
    $escapedPrice = mysqli_real_escape_string($GLOBALS["conn"], $price);
    $escapedSpecification = mysqli_real_escape_string($GLOBALS["conn"], $specification);
    $escapedInterval = mysqli_real_escape_string($GLOBALS["conn"], $interval);


    $query = "INSERT INTO plan (`name`, `price`, `specification`, `interval`) VALUES ('$escapedName', '$escapedPrice','$escapedSpecification','$escapedInterval')";
    mysqli_query($GLOBALS["conn"], $query); 
}

include ("conn.php"); 
function getPlan()
{
    $query = "select * from plan ";
    $retval = mysqli_query($GLOBALS["conn"],$query );
    if (!$retval) {
        echo "Could not get data" . mysqli_error();
    }
    $data = [];
    while ($row = mysqli_fetch_array($retval)) {
        $data[] = [
            'name' => $row['name'],
            'price' => $row['price'],
            'specification' => $row['specification'],
            'paymentPage' => $row['paymentPage'],
            'interval' => $row['interval'],
        ];
    }
    return $data;
}
?>