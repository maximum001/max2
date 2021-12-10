<?php @system("clear");
// RATEIT

// Regular Colors
$Black    = "\033[0;30m" ;     //  # Black
$CRed     = "\033[0;31m" ;     //  # Red
$Green    = "\033[0;32m" ;       # Green
$Yellow   = "\033[0;33m" ;      # Yellow
$Blue     = "\033[0;34m" ;        # Blue
$Purple   = "\033[0;35m" ;      # Purple
$Cyan     = "\033[0;36m" ;        # Cyan
$White    = "\033[0;37m" ;       # White

# Bold
$BBlack   = "\033[1;30m" ;      # Black
$BRed     = "\033[1;31m" ;        # Red
$BGreen   = "\033[1;32m" ;      # Green
$BYellow  = "\033[1;33m" ;     # Yellow
$BBlue    = "\033[1;34m" ;       # Blue
$BPurple  = "\033[1;35m" ;     # Purple
$BCyan    = "\033[1;36m" ;       # Cyan
$BWhite   = "\033[1;37m" ;      # White

echo "$White\n\n";
echo "------- PHP max16.php ------\n";
echo "----------------------------\n";
echo "- Raters: maxi09-maxi16    -\n";
echo "- To Rate: maxi25-maxi01   -\n";
echo "--------(c)maximum001 ------\n\n";


echo "$White\n#ActiveLYKA";
echo date("l");
echo "\n";


//init dummy array
$DeviceIDarray=['df0439087259ad38','a5ead687bdb3729c','87a87fe99d0039a5'];
array_push($DeviceIDarray,'7d7e6f904741daea');
array_push($DeviceIDarray,'9f78dab798ab0324');
array_push($DeviceIDarray,'83d23b76250d2a97');
ARRAY_push($DeviceIDarray,'7ae21b1182e2a323');
array_push($DeviceIDarray,'29b3e709883d7321');
array_push($DeviceIDarray,'c51e10db899a4cc4');
array_push($DeviceIDarray,'47db99101c533bc5');

$DeviceArray=array("iPhone 4","iPhone 4S","iPhone 5","iPhone 5c","iPhone 5s",
"iPhone 6","iPhone 6 Plus","iPhone 6s","iPhone 6s Plus",
"iPhone SE (1st generation)","iPhone 7","iPhone 7 Plus","iPhone 8",
"iPhone 8 Plus","iPhone X","iPhone XR","iPhone XS","iPhone XS Max",
"iPhone 11","iPhone 11 Pro","iPhone 11 Pro Max","iPhone SE","iPhone 12 mini","iPhone 12","iPhone 12 Pro",
"Tecno Spark 7","Tecno Spark 7 Pro","Vivo V11i","Vivo V11","Vivo V11 Pro",
"Oppo A94","Oppo A12","Vivo Z10","Samsung Galaxy S20","Vivo Y81","Vivo Nex S","Vivo Nex A","Vivo Y75s","Vivo Y83",
"Vivo X21i","Vivo Z1","Vivo Y53i","Nokia 5","Nokia 6","Vivo Y71","Vivo X21 UD","Vivo X21","Vivo V9",
"Vivo X20 Plus UD","Vivo Y75","Vivo V7","Samsung Galaxy S9","Vivo X20 Plus","Vivo X20","Vivo V7+",
"Vivo Y69","Vivo V5s","LG G+","Vivo Y66","Sony Xperia 10","Nokia 3315","Vivo Y55s","Tecno Spark 6 Air","Tecno Spark 6 Go","Vivo Xplay6",
"HTC U20 5G","Vivo X9","Google Pixel 5","OnePlus 9","OnePlus 10","Infinix Hot S10","Vivo X7","Vivo X6S Plus",
"Vivo X6S","Vivo Y31L","Oppo A2","Oppo A11","Vivo Xplay5 Elite","Vivo Y51L","Vivo X6 Plus",
"Vivo X6","Vivo Y51","Vivo Y27L","Vivo Y15S","Vivo V1Max","Vivo V1","Vivo X5Pro","Vivo X5Max+",
"Vivo X5S L","Vivo X Shot","Vivo X3S","Vivo Y15","Vivo Y22","Vivo X5Max","Nokia 3210");
//$passarray=[];
echo "$White";

$usernamearray = ["shib_aparri","maximum001"]; 

for ($x=4; $x<9;$x++)
{
    array_push($usernamearray, "maximum00$x",);
}


//should use one password per dummy account
echo "\n";
echo "Input the default password of maxi001-008\n";
$pass=readline('Password : ');

if ($pass == '')
{
    echo "\nNo password entered.\n";
    echo "Program will terminate\n\n";
    echo "Thank you\n\n";
    exit;
}

echo "$Yellow\n";

//get acct names to rate

$accounts = []; 

$x=25;
do {
    array_push($accounts, "maximum0$x",);
  
 // echo "maximum0$x, ";
  $x--;

} while ($x != 9);

$x=9;
do {
    array_push($accounts, "maximum00$x",);
 //   echo "maximum0$x, ";
    $x--;
} while ($x != 3);

array_push($accounts,"maximum001"); //attach my own username
array_push($accounts,"shib_aparri"); //attach my own username


/*
$accounts=[];

echo "\nInput the username to Auto-Rate\n";
echo "(blank) to skip.\n";
 do {
    $accountName=readline('Username : ');
  if ($accountName !='') {  
  array_push($accounts,"$accountName");
  }

} while ($accountName !='');
*/

//get the account where the harvested gems will be sent
echo "$Purple";
echo "\nInput GEMS recipient username.\n";
echo "(blank) no transferring to do.\n";
$GEMReceiver=readline('Username : ');

echo "$White";
echo "\nall is set... \n";
sleep(1);
foreach ($usernamearray as $user) {

    $devID=$DeviceIDarray[rand(0,9)];
    $DevName=$DeviceArray[rand(0,50)];
    //Login to dummy account
    echo "$White";
    echo "\nPhone Name : $DevName";
    echo "\nPhone ID   : $devID\n\n";
    echo "\nlogin to RATERS[$user] ...";

    $urll = "https://identity.mylykaapps.com/useraccounts/login";
    $curll = curl_init($urll);
    curl_setopt($curll, CURLOPT_URL, $urll);
    curl_setopt($curll, CURLOPT_POST, true);
    curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
    $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 30)");
    curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
    $DeviceInfo = <<<DATA
    {
    "countryCode": "US",
    "device": {
    "deviceId"          : "$devID", 
    "deviceImei"        : "$devID",
    "deviceModel"       : "$DevName",
    "deviceName"        : "android",
    "deviceOs"          : "Android O_MR1",
    "isEmulator"        : false,
    "notificationToken" : "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
    "osVersion"         : "30"
  },
    "password"          : "$pass",
    "username"          : "$user"
}
DATA;

    curl_setopt($curll, CURLOPT_POSTFIELDS, $DeviceInfo);
    $respp = curl_exec($curll);
    curl_close($curll);
    $jsonn = json_decode($respp);
    $msgn = $jsonn->message;
    $status = $jsonn->status;
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    $json = json_decode($respp);  

//    echo "bearer :$bearer";
    

    if ($status == 0) {
      echo "$CRed";
      echo "error\n";
    }

  //loop only when logged successfully
  if ($status == 1) {

    echo "$Cyan";
    echo "success\n";
    echo "$White";
 
    //Get current balance of dummy
    $urlbal = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlbal = curl_init($urlbal);
    curl_setopt($curlbal, CURLOPT_URL, $urlbal);
    curl_setopt($curlbal, CURLOPT_RETURNTRANSFER, true);   
    $headersbal = array("authorization: Bearer $bearer",);
    curl_setopt($curlbal, CURLOPT_HTTPHEADER, $headersbal);
    $respbal = curl_exec($curlbal);
    curl_close($curlbal);
  
    $jsonbal = json_decode($respbal);
    $tg = $jsonbal->data->totalGem;
    echo "\nYou have [$tg] GEMS\n\n";
    sleep(1);
    //echo "No balance will be transferred to any account.\n\n";
    //
    echo "RATING of POSTS started...\n";
    foreach($accounts as $mainacct) {
      
      echo "$White\n";
      echo "connecting to [$mainacct]... ";
  
      echo "$Cyan";
  
      $urlm = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$mainacct&os=android&pageIndex=1&pageSize=16";
      $curlm = curl_init($urlm);
      curl_setopt($curlm, CURLOPT_URL, $urlm);
      curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
      $headersm = array("user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)", "authorization: Bearer $bearer",);
      curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
      $respm = curl_exec($curlm);
      curl_close($curlm);

      $jsonm = json_decode($respm, true);
      $uid = $jsonm["data"]["0"]["id"];
      $vvuser = $jsonm["data"]["0"]["userName"];

      //Found the username
      if ($mainacct == $vvuser) {

        echo "success\n";
        sleep(1);  
        $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$uid&category=ALL";
        $curld = curl_init($urld);
        curl_setopt($curld, CURLOPT_URL, $urld);
        curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
        $headersd = array("authorization: Bearer $bearer", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)",);
        curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
        $respd = curl_exec($curld);
        curl_close($curld);
        $jsond = json_decode($respd, true);
  
        $arr = json_decode($respd, true);

 for ($x=0;$x<11;$x++)
 {
   $p[$x] = $arr["data"]["$x"]["id"];
 } 
  
           
//    $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
//    $headers = array("authorization:Bearer $bearer", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
  
//RATING posts
echo "$White";
echo "\n[$user]";
echo "$Cyan";
echo " is rating ";
echo "$White";
echo "[$mainacct]\n";
for ($postloop=1; $postloop<11; $postloop++) {   
  
  $DeviceIDarray[rand(0,9)];
  $DevName=$DeviceArray[rand(0,50)];

  echo "$White"; 
  echo "\nrating post # $postloop \n";

  $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
  $headers = array("authorization:Bearer $bearer", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  $data = <<<DATA
{
  "device": {
  "deviceId"         : "$devID",
  "deviceImei"       : "$devID",
  "deviceModel"      : "$DevName",
  "deviceName"       : "android",
  "deviceOs"         : "Android O_MR1",
  "isEmulator"       : false,
  "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
  "osVersion"        : "30"
  },
  "postId": $p[$postloop],
  "rate": 5,
  "userid": $uid
}
DATA;
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  $resp = curl_exec($curl);
  sleep(2);
  curl_close($curl);
  //var_dump($resp);
  $json = json_decode($resp);
  echo "$Cyan";
  echo $json->message; 

          } //end of for..loop
          } else { 
            echo "failed\n"; 
          }
          //end of mainacct=vvuser
          echo "$Yellow";
          echo "\n\npls. wait...\n";
          sleep(2);

      } //end of foreach username  
  } //end of status==1  
  echo "$White";
  echo "\n\n---- end of rating ----\n\n";
  
  
  echo "Retrieving [$user] updated GEMS\n";

  echo "$Cyan";
   
    $urlbal2 = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlbal2 = curl_init($urlbal2);
    curl_setopt($curlbal2, CURLOPT_URL, $urlbal2);
    curl_setopt($curlbal2, CURLOPT_RETURNTRANSFER, true);
    $headersbal2 = array("authorization: Bearer $bearer",);
    curl_setopt($curlbal2, CURLOPT_HTTPHEADER, $headersbal2);
    //for debug only!
    curl_setopt($curlbal2, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curlbal2, CURLOPT_SSL_VERIFYPEER, false);
    $respbal2 = curl_exec($curlbal2);
    curl_close($curlbal2);
    //var_dump($respbal);
    $jsonbal2 = json_decode($respbal2);
    $tg2 = $jsonbal2->data->totalGem;
    echo "New balance is [$tg2] GEMS\n";

   if ($GEMReceiver !='') {
    echo "$White"; 
    echo "Confirming [$GEMReceiver]... ";
    
    $urlx = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$GEMReceiver&os=android&pageIndex=1&pageSize=16";
      $curlx = curl_init($urlx);
      curl_setopt($curlx, CURLOPT_URL, $urlx);
      curl_setopt($curlx, CURLOPT_RETURNTRANSFER, true);
      $headersx = array("user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)", "authorization: Bearer $bearer",);
      curl_setopt($curlx, CURLOPT_HTTPHEADER, $headersx);
      $respx = curl_exec($curlx);
      curl_close($curlx);

      $jsonx = json_decode($respx, true);
      $uidx = $jsonx["data"]["0"]["id"];
      $usernamex = $jsonx["data"]["0"]["userName"];
    
      if ($GEMReceiver == $usernamex)
      {
        echo "$Cyan"; 
        echo "confirmed\n";
        $urlbals = "https://wallets.mylykaapps.com/api/v3/wallets/SendGem";
        $curlbals = curl_init($urlbals);
        curl_setopt($curlbals, CURLOPT_URL, $urlbals);
        curl_setopt($curlbals, CURLOPT_POST, true);
        curl_setopt($curlbals, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlbals, CURLOPT_HTTPHEADER, $headers);
        $databals = '{"amount":"' . $tg2 . '","device":{"deviceId":"f606c43d78f50669","deviceImei":"f606c43d78f50669","deviceModel":"Tecno Spark 7 Pro","deviceName":"android","deviceOs":"Android O_MR1","isEmulator":false,"notificationToken":"eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR","osVersion":"28"},"recipientId":' . $uidx . '}';
        curl_setopt($curlbals, CURLOPT_POSTFIELDS, $databals);
        $respbals = curl_exec($curlbals);
        curl_close($curlbals);

        $jsonbals = json_decode($respbals);
        //echo $jsonbals->message;
        echo "$Yellow\n";
        echo "[$GEMReceiver] received [$tg2] GEMS.";  
        echo "\n";
      } else {
        echo "$CRed\nerror confirming recipient";
        echo "no GEMS was transferred\n\n";
             }
            
    } 

    sleep(2);
    echo "\n";
    sleep(1);

} //end of loop for each dummy

  //rene_wolverine uid = 700002814478

    echo "$BWhite";
    echo "\nDone. Thank you!\n\n";
