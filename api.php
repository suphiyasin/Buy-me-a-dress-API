<?php
class donate{
	public $username;
	public $password;
	public $token;
	public $walletid;
	public $version;
	//login to trendyol
public function login(){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://auth.trendyol.com/login');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"email\":\"$this->username\",\"password\":\"$this->password\"}");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array();
$headers[] = 'Authority: auth.trendyol.com';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Application-Id: 1';
$headers[] = 'Content-Type: application/json;charset=UTF-8';
$headers[] = 'Cookie: hvtb=1; initialTrafficSource=utmcsr=(direct)|utmcmd=(none)|utmccn=(not set); _gcl_au=1.1.348926789.1645552573; pid=3POl3zi8gf; _ym_uid=1645552575955475529; _ym_d=1645552575; _fbp=fb.1.1645552576329.702997842; _gcl_aw=GCL.1647884493.CjwKCAjwxOCRBhA8EiwA0X8hi6dK1oAzWkf0WuNR7C8Fiec6cXx3JBTaZ0TTn8R6vZUt284B0PgD9xoCZIsQAvD_BwE; _gac_UA-13174585-1=1.1647884495.CjwKCAjwxOCRBhA8EiwA0X8hi6dK1oAzWkf0WuNR7C8Fiec6cXx3JBTaZ0TTn8R6vZUt284B0PgD9xoCZIsQAvD_BwE; AbTesting=23; AbTestingCookies=A_58-B_24-C_84-D_60-E_11-F_76-G_69-H_71-I_99-J_18-K_100-L_92-M_44-N_36-O_99; access_token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJTdGFuZGFyZFVzZXIiOiIwIiwidW5pcXVlX25hbWUiOiJ5YXNpbi5rYWhyaW1hbjYwQGdtYWlsLmNvbSIsInN1YiI6Inlhc2luLmthaHJpbWFuNjBAZ21haWwuY29tIiwicm9sZSI6InVzZXIiLCJhdHdydG1rIjoiM2JjYzgyZjctYjI1Yi0xMWVjLTkyZjEtY2U3ZDRkMGI3MzBjIiwidXNlcklkIjoiNzI4MjQxMjUiLCJlbWFpbCI6Inlhc2luLmthaHJpbWFuNjBAZ21haWwuY29tIiwiYXVkIjoiQlR1NkFYajdRUURBQ1o5SkpTYzlaZzRldkp3ZndjSmMiLCJleHAiOjE4MDY2NzQ1NDUsImlzcyI6ImF1dGgudHJlbmR5b2wuY29tIiwibmJmIjoxNjQ4ODg2NTQ1fQ._c6w1uMPljWwTSG7fUGNXN1Gp4n67yahWc3r864fUCk; _TRENDYOL_MBL_Auth=%7B%22access_token%22%3A%22eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJTdGFuZGFyZFVzZXIiOiIwIiwidW5pcXVlX25hbWUiOiJ5YXNpbi5rYWhyaW1hbjYwQGdtYWlsLmNvbSIsInN1YiI6Inlhc2luLmthaHJpbWFuNjBAZ21haWwuY29tIiwicm9sZSI6InVzZXIiLCJhdHdydG1rIjoiM2JjYzgyZjctYjI1Yi0xMWVjLTkyZjEtY2U3ZDRkMGI3MzBjIiwidXNlcklkIjoiNzI4MjQxMjUiLCJlbWFpbCI6Inlhc2luLmthaHJpbWFuNjBAZ21haWwuY29tIiwiYXVkIjoiQlR1NkFYajdRUURBQ1o5SkpTYzlaZzRldkp3ZndjSmMiLCJleHAiOjE4MDY2NzQ1NDUsImlzcyI6ImF1dGgudHJlbmR5b2wuY29tIiwibmJmIjoxNjQ4ODg2NTQ1fQ._c6w1uMPljWwTSG7fUGNXN1Gp4n67yahWc3r864fUCk%22%2C%22expires_in%22%3A157788000%2C%22refresh_token%22%3A%22eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE2NDg5NzI5NDUsInN1YiI6MX0.SU-yPiz71YeQlOMDV3Jick8lTbIxC3IFq3wfi6zaKwA%22%2C%22token_type%22%3A%22bearer%22%7D; token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJTdGFuZGFyZFVzZXIiOiIwIiwidW5pcXVlX25hbWUiOiJ5YXNpbi5rYWhyaW1hbjYwQGdtYWlsLmNvbSIsInN1YiI6Inlhc2luLmthaHJpbWFuNjBAZ21haWwuY29tIiwicm9sZSI6InVzZXIiLCJhdHdydG1rIjoiM2JjYzgyZjctYjI1Yi0xMWVjLTkyZjEtY2U3ZDRkMGI3MzBjIiwidXNlcklkIjoiNzI4MjQxMjUiLCJlbWFpbCI6Inlhc2luLmthaHJpbWFuNjBAZ21haWwuY29tIiwiYXVkIjoiQlR1NkFYajdRUURBQ1o5SkpTYzlaZzRldkp3ZndjSmMiLCJleHAiOjE4MDY2NzQ1NDUsImlzcyI6ImF1dGgudHJlbmR5b2wuY29tIiwibmJmIjoxNjQ4ODg2NTQ1fQ._c6w1uMPljWwTSG7fUGNXN1Gp4n67yahWc3r864fUCk; WebAbTesting=A_31-B_70-C_71-D_89-E_100-F_45-G_97-H_26-I_45-J_54-K_16-L_57-M_41-N_90-O_82-P_49-Q_24-R_72-S_42-T_52-U_62-V_38-W_77-X_99-Y_91-Z_15; cto_bundle=cKGNy19rT2ZzN1NSbE01SzR5eG5qN3p1V3k0Nmo1ZW5ITmQ3SWdVa096d3p1UmI4bmN3cDg0UjFMR2N2TGlIRndENXVseU8wR1VyaFg4dVdnTFFXYTZMTUZQZk5qaW1IZ3FVWkE2b295JTJGYVhZJTJCJTJCa1pIZTlkNGpSSXdjM3ZUeHhqdkpNa3Q5Uzh4Z2wyNFcyNHlyMWoxTFBEOEElM0QlM0Q; _ga_E7THKP49RD=GS1.1.1648886220.1.1.1648887161.7; VisitCount=7; SearchMode=1; __cfruid=48305e02c47e4c4ae37688d09307055c3aa2c690-1649535527; _cfuvid=eYkWWNcvdyrE._I40XZpYjJrxapCbq6br3PuL4Vnl6s-1649535527048-0-604800000; __utmzzses=1; _gid=GA1.2.305002693.1649535524; _dc_gtm_UA-13174585-1=1; sid=7ZxIgHaEnV; _ga_8F2NHTRF7T=GS1.1.1649535523.7.1.1649535527.56; _ga=GA1.2.1068123689.1645552573; _ym_isad=2';
$headers[] = 'Culture: tr-TR';
$headers[] = 'Origin: https://auth.trendyol.com';
$headers[] = 'Referer: https://auth.trendyol.com/static/fragment?application-id=1&storefront-id=1&culture=tr-TR&language=tr&debug=false';
$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"100\", \"Google Chrome\";v=\"100\"';
$headers[] = 'Storefront-Id: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
$kahka = json_decode($result);
$this->token = $kahka->accessToken;
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
}

//donate with credit cart
public function donateme($cc, $cm, $cy, $cv, $amount){
	
//$site
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://payment.trendyol.com/v3/wallets/'.$this->walletid.'/deposit');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"version\":$this->version,\"amount\":$amount,\"paymentOptions\":[{\"customerSelectedThreeD\":false,\"savedCardId\":0,\"cvv\":\"$cv\",\"cardNo\":\"$cc\",\"expireMonth\":\"$cm\",\"expireYear\":\"$cy\"}]}");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$headers = array();
$headers[] = 'Authority: payment.trendyol.com';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: tr-TR';
$headers[] = 'Authorization: bearer '.$this->token.'';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Cookie: hvtb=1; initialTrafficSource=utmcsr=(direct)|utmcmd=(none)|utmccn=(not set); _gcl_au=1.1.348926789.1645552573; pid=3POl3zi8gf; _ym_uid=1645552575955475529; _ym_d=1645552575; _fbp=fb.1.1645552576329.702997842; _gcl_aw=GCL.1647884493.CjwKCAjwxOCRBhA8EiwA0X8hi6dK1oAzWkf0WuNR7C8Fiec6cXx3JBTaZ0TTn8R6vZUt284B0PgD9xoCZIsQAvD_BwE; _gac_UA-13174585-1=1.1647884495.CjwKCAjwxOCRBhA8EiwA0X8hi6dK1oAzWkf0WuNR7C8Fiec6cXx3JBTaZ0TTn8R6vZUt284B0PgD9xoCZIsQAvD_BwE; AbTesting=23; AbTestingCookies=A_58-B_24-C_84-D_60-E_11-F_76-G_69-H_71-I_99-J_18-K_100-L_92-M_44-N_36-O_99; _TRENDYOL_MBL_Auth={"access_token":"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJTdGFuZGFyZFVzZXIiOiIwIiwidW5pcXVlX25hbWUiOiJ5YXNpbi5rYWhyaW1hbjYwQGdtYWlsLmNvbSIsInN1YiI6Inlhc2luLmthaHJpbWFuNjBAZ21haWwuY29tIiwicm9sZSI6InVzZXIiLCJhdHdydG1rIjoiM2JjYzgyZjctYjI1Yi0xMWVjLTkyZjEtY2U3ZDRkMGI3MzBjIiwidXNlcklkIjoiNzI4MjQxMjUiLCJlbWFpbCI6Inlhc2luLmthaHJpbWFuNjBAZ21haWwuY29tIiwiYXVkIjoiQlR1NkFYajdRUURBQ1o5SkpTYzlaZzRldkp3ZndjSmMiLCJleHAiOjE4MDY2NzQ1NDUsImlzcyI6ImF1dGgudHJlbmR5b2wuY29tIiwibmJmIjoxNjQ4ODg2NTQ1fQ._c6w1uMPljWwTSG7fUGNXN1Gp4n67yahWc3r864fUCk","expires_in":157788000,"refresh_token":"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE2NDg5NzI5NDUsInN1YiI6MX0.SU-yPiz71YeQlOMDV3Jick8lTbIxC3IFq3wfi6zaKwA","token_type":"bearer"}; token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJTdGFuZGFyZFVzZXIiOiIwIiwidW5pcXVlX25hbWUiOiJ5YXNpbi5rYWhyaW1hbjYwQGdtYWlsLmNvbSIsInN1YiI6Inlhc2luLmthaHJpbWFuNjBAZ21haWwuY29tIiwicm9sZSI6InVzZXIiLCJhdHdydG1rIjoiM2JjYzgyZjctYjI1Yi0xMWVjLTkyZjEtY2U3ZDRkMGI3MzBjIiwidXNlcklkIjoiNzI4MjQxMjUiLCJlbWFpbCI6Inlhc2luLmthaHJpbWFuNjBAZ21haWwuY29tIiwiYXVkIjoiQlR1NkFYajdRUURBQ1o5SkpTYzlaZzRldkp3ZndjSmMiLCJleHAiOjE4MDY2NzQ1NDUsImlzcyI6ImF1dGgudHJlbmR5b2wuY29tIiwibmJmIjoxNjQ4ODg2NTQ1fQ._c6w1uMPljWwTSG7fUGNXN1Gp4n67yahWc3r864fUCk; _ga_E7THKP49RD=GS1.1.1648886220.1.1.1648887161.7; _gid=GA1.2.352041934.1650365651; WebAbTesting=A_81-B_38-C_44-D_42-E_74-F_82-G_69-H_57-I_6-J_85-K_81-L_38-M_33-N_8-O_94-P_97-Q_32-R_1-S_17-T_29-U_23-V_76-W_46-X_93-Y_74-Z_13; __cfruid=2575f731e839c18a5a555327f2cbf11c7a3eabc4-1650529616; _cfuvid=7z3PUTSoO556l2U1yOyJqELnkCrwz3GI9yAhDZLEP8E-1650529616343-0-604800000; __utmzzses=1; _ym_isad=2; cto_bundle=MyFSxV9rT2ZzN1NSbE01SzR5eG5qN3p1V3k3OEFMODFPeGZWdlN1NmJMS2N4cU8yVU1jQmoxblZOQWR4ZHFXaWQxTCUyQlljSnBSaGpFUEw0ZDZYd2ZoSGplclU1V2lFaVprdjZlVGszaVRaRExnTkVyWXBWU1NMRzZ3UVBjNFFCdiUyRnR4NnlyazlGRzNWSHV6Vll6R3FZakE1aUdBJTNEJTNE; VisitCount=23; SearchMode=1; sid=aOSXrZZNoF; _ga_8F2NHTRF7T=GS1.1.1650544396.17.1.1650544727.30; _ga=GA1.2.1068123689.1645552573';
$headers[] = 'Origin: https://payment.trendyol.com';
$headers[] = 'Referer: https://payment.trendyol.com/wallet/card-fragment?application-id=1&storefront-id=1&culture=tr-TR&user-id='.$this->walletid.'';
$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"100\", \"Google Chrome\";v=\"100\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36';
$headers[] = 'X-Ab-Test-Values: A_81-B_38-C_44-D_42-E_74-F_82-G_69-H_57-I_6-J_85-K_81-L_38-M_33-N_8-O_94-P_97-Q_32-R_1-S_17-T_29-U_23-V_76-W_46-X_93-Y_74-Z_13';
$headers[] = 'X-Applicationid: 1';
$headers[] = 'X-Storefrontid: 1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$kahka = json_decode($result, true);
print_r($kahka['json']['content']);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
		
	
	
	
}

}

