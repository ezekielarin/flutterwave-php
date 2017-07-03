





<?php

if (isset($_POST['paynow'])) {
  # code...
  
$apiKey = "";
$redirecturl = "";


$price = $_GET['price'];
$product_name = $_GET['pr_name']


//personal info
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$country = $_POST['country'];
$phonenumber = $_POST['phone'];

//billing info

$card_no = $_POST['card_number'];
$cvv = $_POST['cvv'];
$expiry_year = $_POST['expiry_year'];
$expiry_month = $_POST['expiry_month'];



if (isset($_POST['paynow'])) {
  # code...


POST https://moneywave.herokuapp.com/v1/transfer


$headers = array('content-type'=>'application/json','Authorization'=>'sedxsawegtyrerw3srsdfzxzzvbhgehh213fdsz');
$query = array(
        "firstname"=>$firstname,
        "lastname"=>$lastname,
        "email"=>$email,
        "phonenumber"=>$phone,
        "card_no"=>$card_no,
        "pin"=>"", //optional required when using VERVE card
        "expiry_year"=>$expiry_year,
        "charge_auth"=>"PIN", //optional required where card is a local Mastercard
        "apiKey" =>"",
        "amount" =>$price,
        "fee"=>45,
        "medium"=>"web",
        "redirecturl"=> $redirecturl
    ) 
$response = Unirest\Request::post('https://moneywave.herokuapp.com/v1/transfer', $headers, $query);


}


?>
