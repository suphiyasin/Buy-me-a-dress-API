<?php
include("api.php");
$donate = new donate();
$donate->username = "MAIL ADRESS";
$donate->password = "PASSWORD";
$donate->walletid = "WALLET ID";
$donate->version = "TRENDYOL VERSION";
$donate->login();
//credit card no, C. Month, C. Year, CVV Code, Amount
$donate->donateme("CREDIT CART", "MM", "YYYY", "CVV", "AMOUNT");
