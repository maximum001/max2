<?php 
@system("clear");
// CollectGEMS

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
echo "---- PHP harvestmax.php -----\n";
echo "-----------------------------\n";
echo "- Harvest all maxi GEMS     -\n";
echo "- & send to [Main Acct]     -\n";
echo "--------(c)maximum001 -------\n\n";


echo "$White\n#ActiveLYKA";
echo date("l");
echo "\n";

//init dummy array
$usernamearray = ["maximum001","shib_aparri"]; 


for ($x=4; $x<10;$x++)
{
    array_push($usernamearray, "maximum00$x",);
}

for ($x=10; $x<26;$x++)
{
    array_push($usernamearray, "maximum0$x",);
}

echo "$White\n";

echo "Input the password of maxi\n";
$pass=readline('Password : ');

if ($pass == '')
{
    echo "\nNo password entered.\n";
    echo "Program will terminate\n\n";
    echo "Thank you\n\n";
    exit;
}

echo "$Yellow\n";

//get the account where the harvested gems will be sent

echo "\nInput GEMS recipient username.\n";
echo "(blank) no transferring to do.\n";
$GEMReceiver=readline('Username : ');

if ($GEMReceiver == '')
{
    echo "\nNo receiver has been set.\n";
    echo "Program will terminate\n\n";
    echo "Than you\n\n";
    exit;
}

echo "$White";
echo "\nready to harvest GEMS... \n";
sleep(1);
foreach ($usernamearray as $user) {

    //Login to dummy account

    echo "\nlogin to [$user] ...";

    $urll = "https://identity.mylykaapps.com/useraccounts/login";
    $curll = curl_init($urll);
    curl_setopt($curll, CURLOPT_URL, $urll);
    curl_setopt($curll, CURLOPT_POST, true);
    curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
    $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)");
    curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
    $DeviceInfo = <<<DATA
    {
    "countryCode": "US",
    "device": {
    "deviceId": "9f78dab798ab0324",
    "deviceImei": "9f78dab798ab0324",
    "deviceModel": "Tecno Spark 7 Pro",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
    "osVersion": "30"
  },
  "password": "$pass",
  "username": "$user"
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

  //pass only when logged successfully
  if ($status == 1) {

    echo "$Cyan";
    echo "success\n";
    echo "$White";
 
    echo "$White\n";
    echo "[$user] has ";

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
    echo "[$tg2] GEMS\n";

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
        $headers = array("authorization:Bearer $bearer", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
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
            

    sleep(2);
    echo "\n";
    sleep(1);
  } //end of status==1  

} //end of loop for each dummy

  //rene_wolverine uid = 700002814478

    echo "$BWhite";
    echo "\nExit. Thank you!\n\n";

