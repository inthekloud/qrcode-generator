<?php

require_once  "../php/qrcode.php";

$name =  $_POST["full-name"];
$organization = $_POST["org-name"];
$title = $_POST["title"];
$email = $_POST["email"];
$workTel = $_POST["tel-work"];
$mobile = $_POST["tel-mobile"];
$address = $_POST["addr-work"];

$vcardString = "BEGIN:VCARD\n";
$vcardString .= "VERSION:4.0\n";

$vcardString .= $name."\n";
$vcardString .= $organization."\n";
$vcardString .= $title."\n";
$vcardString .= $workTel."\n";
$vcardString .= $mobile . "\n";
$vcardString .= $address ."\n";
$vcardString .= $email ."\n";
$vcardString .= "END";

echo $vcardString;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>VCARD to QR Code</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
   
</head>

<body>
    <div class="container">
       Results to go here
    </div>
</body>

</html>