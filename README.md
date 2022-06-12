
<h1>Trendyol Buy Me A Coffee API</h1>
<br/>
<b>Sign up at Trendyol.com , then click load balance to wallet<br/>
watch it from network and get walletid and version from deposit query
  
![image](https://user-images.githubusercontent.com/65618247/173256295-6860077c-efc7-4445-8737-9c9850ac458d.png)

<br/>
Click on load balance with your credit card information
<br/>
<b> wait on network and get wallet id
  
![image](https://user-images.githubusercontent.com/65618247/173256344-4a8dbd56-b23b-4c7e-a288-101b0d2da963.png)

  Get Version from payload
  
![image](https://user-images.githubusercontent.com/65618247/173256370-eae2c3f0-86a4-43cd-90ea-b495d8e3371b.png)

  
  # Usage 
  ```
  <?php
include("api.php");
$donate = new donate();
$donate->username = "acc mail";
$donate->password = "password";
$donate->walletid = "your wallet id";
$donate->version = "trendyol version";
$donate->login();
//credit card no, C. Month, C. Year, CVV Code, Amount
$donate->donateme("user cc", "mm", "yyyy", "cvv", "amount");
  
  ```
 
