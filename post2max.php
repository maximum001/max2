<?php 
@system("clear");

//Set font color

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

$hash_tags =array("#lykaglobal","#lykaglobalph","#lykagems","#Travel", "#SpreadLove",
"#StayBlessed","#Goodluck","#LYKAGlobal","#LYKAEmpoweringLykans","#TravelThainow2019",
"#WeRiseByLiftingOthers","#LykaMall","#LykaGems","#LykaPH","#Vivalasvegas",    
"#LykaGlobal","#LykaShare","#LykaWorld","#MaxRate","#LykaRetail",
"#StayBlessed","#Goodluck","#LYKAGlobal","#LYKAEmpoweringLykans","#TravelThainow2019",
"#WeRiseByLiftingOthers","#LykaMall","#LykaGems","#LykaPH","#Vivalasvegas",    
"#LykaGlobal","#travelthainow2019","#LykaUltraRater","#LykaMerchants","#travelthainow2019",
"#lykaglobal","#lykaglobalph","#lykagems","#Travel", "#SpreadLove",
"#StayBlessed","#Goodluck","#LYKAGlobal","#LYKAEmpoweringLykans","#TravelThainow2019",
"#LykaGlobal","#LykaMall","#LykaUltraRater","#LykaMerchants","#travelthainow2019",
"#lykaglobal","#lykaglobalph","#lykagems","#Travel", "#SpreadLove",
"#WeRiseByLiftingOthers","#LykaMall","#LykaGems","#LykaPH","#Vivalasvegas");

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


echo "$Cyan\n\n";
echo "------- PHP post2max.php ------\n";
echo "-------------------------------\n";
echo "- add posts / moments to maxi -\n";
echo "- maximum001 >>>> maximum025  -\n";
echo "--------(c)maximum001 ---------\n\n";

echo "$White\n#ActiveLYKA";
echo date("l");
echo "\n";

//echo "Tip: it is recommended that all username\n";
//echo "     have same password.\n\n";

$usernamearray = ['maximum001','shib_aparri']; 

for ($x=4; $x<10;$x++)
{
    array_push($usernamearray, "maximum00$x",);
}

for ($x=10; $x<26;$x++)
{
    array_push($usernamearray, "maximum0$x",);
}

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

echo "pls. wait ...\n";

foreach ($usernamearray as $user) {


    $devID=$DeviceIDarray[rand(0,9)];
    $DevName=$DeviceArray[rand(0,50)];

    echo "$White";
    echo "\nPhone Name : $DevName";
    echo "\nPhone ID   : $devID\n\n";
    echo "\nlogin to account [$user] ...";

echo "$Cyan";

//Login to account
$urll = "https://identity.mylykaapps.com/useraccounts/login";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android R 30)");
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
//sleep(1);

if ($status == 1) {

   echo "$Cyan";
   echo "success\n\n";

   $devID=$DeviceIDarray[rand(0,9)];
  
for ($postloop=1; $postloop<6; $postloop++) { 
   echo "$White";
   echo "adding post   #$postloop... "; 
   $device_id = "$devID";

   echo "$Cyan";
   $title_content=$hash_tags[rand(0,57)];
   $xhash=$hash_tags[rand(0,57)];
   addPosts($vuser, $bearer, $device_id, $title_content, $xhash);
   echo "$White";
   echo "adding moment #$postloop... ";
   echo "$Cyan"; 
   addMoments($vuser, $bearer, $device_id);
   echo "\n";

} //end of for loop

//payroyalty($bearer);

echo "$White";
echo "\n\nadd post/moments to [$vuser] done.\n";

} else {
    echo "$Yellow";
    echo "error logging in to [$user].\n";
    echo "$White";
} //end of status==1   

} //end of loop for x username
echo "\n\n";
echo "Postmoment script end.\n";
echo "Thank you\n\n";

function addPosts($user, $bearer, $device_id, $contents, $xhash) {

    $user_id = getUserId($device_id, $bearer);
   $device_id = $device_id;

   $uploadLegacy = "https://media.mylykaapps.com/api/v1/media/social/multi-upload-url";
   $uploadPay = <<<DATA
       {"category":"post","clientId":"$user_id","files":[{"fileName":"p1.jpeg", "mediaType":"image"}]}
   DATA; 
   $uploadLegPost = postX($uploadLegacy,$uploadPay,$bearer);

   if($uploadLegPost->data){
       $mediaID = $uploadLegPost->data[0]->mediaId;

       $amznToken = "https://media.mylykaapps.com/api/v1/access/aws/media-token/$user_id";
       $firstGet = getX($amznToken,$device_id,$bearer);

       if($firstGet->data){
           $amzIDid = $firstGet->data->identityId;
           $amzIDtoken = $firstGet->data->token; 

           $postURL = "https://cognito-identity.ap-southeast-1.amazonaws.com/";
           $postHeader =  array(
           "Content-Type: application/x-amz-json-1.1",
           "Accept-encoding: indentity",
           "X-Amz-Target: AWSCognitoIdentityService.GetCredentialsForIdentity",
           "user-agent: aws-sdk-android/2.22.4 Linux/3.18.140-gb765813d2c04 Dalvik/2.1.0/0 en_US") ;
           $amndata = <<<DATA
                   {"Logins": {
                       "cognito-identity.amazonaws.com": "$amzIDtoken"},
                           "IdentityId": "$amzIDid"}
                   DATA; 
           $postCurl = curl_init($postURL);
           curl_setopt($postCurl, CURLOPT_URL, $postURL);
           curl_setopt($postCurl, CURLOPT_POST, true);
           curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
           curl_setopt($postCurl, CURLOPT_POSTFIELDS, $amndata);
           $postResp = curl_exec($postCurl);
           curl_close($postCurl);
           $postjson = json_decode($postResp);
           if($postjson->Credentials){
               $sessToken = $postjson->Credentials->SessionToken;
               $aws_access_key_id = $postjson->Credentials->AccessKeyId;
               $aws_secret_access_key = $postjson->Credentials->SecretKey;

               //AWS Process
               $bucket_name = 'lyka-legacy-images-input';
               $aws_region = 'ap-southeast-1';
               $host_name = $bucket_name . '.s3.amazonaws.com';
               $content = "0";
               $content_title = $mediaID;
               $aws_service_name = 's3';
               $timestamp = gmdate('Ymd\THis\Z');
               $date = gmdate('Ymd');
               $request_headers = array();
               $request_headers['x-amz-date'] = $timestamp;
               $request_headers['Host'] = $host_name;
               $request_headers['x-amz-security-token'] = $sessToken;
               $request_headers['x-amz-content-sha256'] = hash('sha256', $content);
               ksort($request_headers);

               $canonical_headers = [];
               foreach($request_headers as $key => $value) {
                   $canonical_headers[] = strtolower($key) . ":" . $value;
               }
               $canonical_headers = implode("\n", $canonical_headers);

               // Signed headers
               $signed_headers = [];
               foreach($request_headers as $key => $value) {
                   $signed_headers[] = strtolower($key);
               }
               $signed_headers = implode(";", $signed_headers);

               // Cannonical request 
               $canonical_request = [];
               $canonical_request[] = "PUT";
               $canonical_request[] = "/" . $content_title;
               $canonical_request[] = "";
               $canonical_request[] = $canonical_headers;
               $canonical_request[] = "";
               $canonical_request[] = $signed_headers;
               $canonical_request[] = hash('sha256', $content);
               $canonical_request = implode("\n", $canonical_request);
               $hashed_canonical_request = hash('sha256', $canonical_request);

               // AWS Scope
               $scope = [];
               $scope[] = $date;
               $scope[] = $aws_region;
               $scope[] = $aws_service_name;
               $scope[] = "aws4_request";

               // String to sign
               $string_to_sign = [];
               $string_to_sign[] = "AWS4-HMAC-SHA256"; 
               $string_to_sign[] = $timestamp; 
               $string_to_sign[] = implode('/', $scope);
               $string_to_sign[] = $hashed_canonical_request;
               $string_to_sign = implode("\n", $string_to_sign);

               // Signing key
               $kSecret = 'AWS4' . $aws_secret_access_key;
               $kDate = hash_hmac('sha256', $date, $kSecret, true);
               $kRegion = hash_hmac('sha256', $aws_region, $kDate, true);
               $kService = hash_hmac('sha256', $aws_service_name, $kRegion, true);
               $kSigning = hash_hmac('sha256', 'aws4_request', $kService, true);

               // Signature
               $signature = hash_hmac('sha256', $string_to_sign, $kSigning);

               // Authorization
               $authorization = [
                   'Credential=' . $aws_access_key_id . '/' . implode('/', $scope),
                   'SignedHeaders=' . $signed_headers,
                   'Signature=' . $signature
               ];
               $authorization = 'AWS4-HMAC-SHA256' . ' ' . implode( ',', $authorization);

               // Curl headers
               $curl_headers = [ 'Authorization: ' . $authorization ];
               foreach($request_headers as $key => $value) {
                   $curl_headers[] = $key . ": " . $value;
               }

               $url = 'https://' . $host_name . '/' . $content_title;
               $ch = curl_init($url);
               curl_setopt($ch, CURLOPT_HEADER, false);
               curl_setopt($ch, CURLOPT_HTTPHEADER, $curl_headers);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
               curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
               curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
               curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
               curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
               curl_exec($ch);
               $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
               // echo $http_code;
               if ($http_code != 200) {
                   echo "failed\n";
               }
               
               $delURL = "https://lyka-legacy-images-input.s3.ap-southeast-1.amazonaws.com/".$mediaID;
               $delHeader = array(
                   "x-clientid: $device_id",
                   "x-amz-date: $timestamp",
                   "x-amz-content-sha256: STREAMING-AWS4-HMAC-SHA256-PAYLOAD",
                   "Authorization: $authorization"
               );
               $deleteCurlx = curl_init($delURL);
               curl_setopt($deleteCurlx, CURLOPT_URL, $delURL);
               curl_setopt($deleteCurlx, CURLOPT_RETURNTRANSFER, true);
               curl_setopt($deleteCurlx, CURLOPT_CUSTOMREQUEST, "PUT");
               curl_setopt($deleteCurlx, CURLOPT_HTTPHEADER, $delHeader);
               $deleteResp = curl_exec($deleteCurlx);
               curl_close($deleteCurlx);

               $uploaded_count = 0;
               $upload_attempt = 0;
               while ($uploaded_count < 1) {
                   sleep(1);
                   $uploadPost = "https://posting.mylykaapps.com/api/v3/posts/AddImagePost";
                   $post = postX($uploadPost, 
                   payload($device_id,
                   '"files":[{
                    "imageURL":"https://www.w3schools.com/Css/img_lights.jpg",
                    "height":1024,
                    "key":"'.$mediaID.'", 
                    "RemoteStorage":"lyka-legacy-images-input" ,
                    "type":"image","width":768}],
                    "isHighlight":false,
                    "isSharedLink":false,
                    "mediaTags":"[[]]",
                    title:"#ActiveLYKA'.date("l").'",
                    hashtags:"'.$xhash.'",
                    content: "'.$contents.'"'),
                    $bearer);
                    $response_message = $post->message;
                   //echo "$response_message.";
                   if (strstr($response_message, 'Post saved')) {
                     echo "success\n";  
                     
                     $uploaded_count++;
                       $upload_attempt = 0;
                   } else {
                       echo "failed. retrying. \n";
                       $upload_attempt++;
                       if ($upload_attempt >= 5) {
                           break;
                       }
                   }
               }      
           }
       }
   } else {
   }
}

function addMoments($user, $bearer, $device_id) {
   

   $user_id = getUserId($device_id, $bearer);

   $uploadLegacy = "https://media.mylykaapps.com/api/v1/media/social/multi-upload-url";
   $uploadPay = <<<DATA
       {"category":"moment","clientId":"$user_id","files":[{"fileName":"p5.jpeg", "mediaType":"image"}]}
   DATA; 
   $uploadLegPost = postX($uploadLegacy,$uploadPay,$bearer);

   if($uploadLegPost->data){
       $mediaID = $uploadLegPost->data[0]->mediaId;

       $amznToken = "https://media.mylykaapps.com/api/v1/access/aws/media-token/$user_id";
       $firstGet = getX($amznToken,$device_id,$bearer);

       if($firstGet->data){
           $amzIDid = $firstGet->data->identityId;
           $amzIDtoken = $firstGet->data->token; 

           $postURL = "https://cognito-identity.ap-southeast-1.amazonaws.com/";
           $postHeader =  array(
           "Content-Type: application/x-amz-json-1.1",
           "Accept-encoding: indentity",
           "X-Amz-Target: AWSCognitoIdentityService.GetCredentialsForIdentity",
           "user-agent: aws-sdk-android/2.22.4 Linux/3.18.140-gb765813d2c04 Dalvik/2.1.0/0 en_US") ;
           $amndata = <<<DATA
                   {"Logins": {
                       "cognito-identity.amazonaws.com": "$amzIDtoken"},
                           "IdentityId": "$amzIDid"}
                   DATA; 
           $postCurl = curl_init($postURL);
           curl_setopt($postCurl, CURLOPT_URL, $postURL);
           curl_setopt($postCurl, CURLOPT_POST, true);
           curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
           curl_setopt($postCurl, CURLOPT_POSTFIELDS, $amndata);
           $postResp = curl_exec($postCurl);
           curl_close($postCurl);
           $postjson = json_decode($postResp);
           if($postjson->Credentials){
               $sessToken = $postjson->Credentials->SessionToken;
               $aws_access_key_id = $postjson->Credentials->AccessKeyId;
               $aws_secret_access_key = $postjson->Credentials->SecretKey;

               //AWS Process
               $bucket_name = 'lyka-legacy-images-input';
               $aws_region = 'ap-southeast-1';
               $host_name = $bucket_name . '.s3.amazonaws.com';
               $content = "0";
               $content_title = $mediaID;
               $aws_service_name = 's3';
               $timestamp = gmdate('Ymd\THis\Z');
               $date = gmdate('Ymd');
               $request_headers = array();
               $request_headers['x-amz-date'] = $timestamp;
               $request_headers['Host'] = $host_name;
               $request_headers['x-amz-security-token'] = $sessToken;
               $request_headers['x-amz-content-sha256'] = hash('sha256', $content);
               ksort($request_headers);

               $canonical_headers = [];
               foreach($request_headers as $key => $value) {
                   $canonical_headers[] = strtolower($key) . ":" . $value;
               }
               $canonical_headers = implode("\n", $canonical_headers);

               // Signed headers
               $signed_headers = [];
               foreach($request_headers as $key => $value) {
                   $signed_headers[] = strtolower($key);
               }
               $signed_headers = implode(";", $signed_headers);

               // Cannonical request 
               $canonical_request = [];
               $canonical_request[] = "PUT";
               $canonical_request[] = "/" . $content_title;
               $canonical_request[] = "";
               $canonical_request[] = $canonical_headers;
               $canonical_request[] = "";
               $canonical_request[] = $signed_headers;
               $canonical_request[] = hash('sha256', $content);
               $canonical_request = implode("\n", $canonical_request);
               $hashed_canonical_request = hash('sha256', $canonical_request);

               // AWS Scope
               $scope = [];
               $scope[] = $date;
               $scope[] = $aws_region;
               $scope[] = $aws_service_name;
               $scope[] = "aws4_request";

               // String to sign
               $string_to_sign = [];
               $string_to_sign[] = "AWS4-HMAC-SHA256"; 
               $string_to_sign[] = $timestamp; 
               $string_to_sign[] = implode('/', $scope);
               $string_to_sign[] = $hashed_canonical_request;
               $string_to_sign = implode("\n", $string_to_sign);

               // Signing key
               $kSecret = 'AWS4' . $aws_secret_access_key;
               $kDate = hash_hmac('sha256', $date, $kSecret, true);
               $kRegion = hash_hmac('sha256', $aws_region, $kDate, true);
               $kService = hash_hmac('sha256', $aws_service_name, $kRegion, true);
               $kSigning = hash_hmac('sha256', 'aws4_request', $kService, true);

               // Signature
               $signature = hash_hmac('sha256', $string_to_sign, $kSigning);

               // Authorization
               $authorization = [
                   'Credential=' . $aws_access_key_id . '/' . implode('/', $scope),
                   'SignedHeaders=' . $signed_headers,
                   'Signature=' . $signature
               ];
               $authorization = 'AWS4-HMAC-SHA256' . ' ' . implode( ',', $authorization);

               // Curl headers
               $curl_headers = [ 'Authorization: ' . $authorization ];
               foreach($request_headers as $key => $value) {
                   $curl_headers[] = $key . ": " . $value;
               }

               $url = 'https://' . $host_name . '/' . $content_title;
               $ch = curl_init($url);
               curl_setopt($ch, CURLOPT_HEADER, false);
               curl_setopt($ch, CURLOPT_HTTPHEADER, $curl_headers);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
               curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
               curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
               curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
               curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
               curl_exec($ch);
               $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
               // echo $http_code;
               if ($http_code != 200) {
                   echo "failed\n";
               }
               
               $delURL = "https://lyka-legacy-images-input.s3.ap-southeast-1.amazonaws.com/".$mediaID;
               $delHeader = array(
                   "x-clientid: $device_id",
                   "x-amz-date: $timestamp",
                   "x-amz-content-sha256: STREAMING-AWS4-HMAC-SHA256-PAYLOAD",
                   "Authorization: $authorization"
               );
               $deleteCurlx = curl_init($delURL);
               curl_setopt($deleteCurlx, CURLOPT_URL, $delURL);
               curl_setopt($deleteCurlx, CURLOPT_RETURNTRANSFER, true);
               curl_setopt($deleteCurlx, CURLOPT_CUSTOMREQUEST, "PUT");
               curl_setopt($deleteCurlx, CURLOPT_HTTPHEADER, $delHeader);
               $deleteResp = curl_exec($deleteCurlx);
               curl_close($deleteCurlx);

               $uploaded_count = 0;
               $upload_attempt = 0;
               while ($uploaded_count < 1) {
                   sleep(1);
                   $uploadMoment = "https://momenting.mylykaapps.com/api/v3/moments/AddImageMoment";
                   $momnts = postX($uploadMoment, 
                   payload($device_id,
                   '"files":[{
                       "height":2081,
                       "key":"'.$mediaID.'", 
                       "RemoteStorage":"lyka-legacy-images-input" ,
                       "type":"image","width":1079
                    }]'), 
                    $bearer);
                   $response_message = $momnts->message;
                   if( $response_message == "Moment retrieved."){
                       echo "success\n";
                       $uploaded_count++;
                       $upload_attempt = 0;
                   } else {
                       echo "failed. retrying. \n";
                       $upload_attempt++;
                       if ($upload_attempt >= 5) {
                           echo "Max upload attempt limit reached.\n\n";
                           break;
                       }
                   }
               }      
           }
       }
   } else {
       echo "Error getting moments server data.\n";
   }
}

function getUserId($rDevID, $mcCookie){
   $getUID = getX("https://profiles.mylykaapps.com/api/v3/profiles/GetUserProfileForEditing?os=android", $rDevID, $mcCookie);

   return $getUID->data->id;

}

function getX($urlx, $gdevID, $cooks = ""){
   $getURL = $urlx;
   $uAgent = 'Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)';
   $getHeader = array(
       "Content-Type: application/json; charset=UTF-8",
       "user-agent: $uAgent",
       "authorization: Bearer $cooks",
       "x-clientid: $gdevID",
       );
       $getCurl = curl_init($getURL);
       curl_setopt($getCurl, CURLOPT_URL, $getURL);
       curl_setopt($getCurl, CURLOPT_HTTPGET, true);
       curl_setopt($getCurl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($getCurl, CURLOPT_HTTPHEADER, $getHeader);
       //sleep(1);
       $getResp = curl_exec($getCurl);
       curl_close($getCurl);
       $getjson = json_decode($getResp);

       return $getjson;
}

function postX($urlx, $payloader, $cooks = ""){
   $postURL = $urlx;
   $uAgent = 'Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)';
   $postHeader = !$cooks 
       ? array(
       "Content-Type: application/json; charset=UTF-8",
       "user-agent: $uAgent") 
       : array(
       "Content-Type: application/json; charset=UTF-8",
       "user-agent: $uAgent","authorization: Bearer $cooks") ;
       $postCurl = curl_init($postURL);
       curl_setopt($postCurl, CURLOPT_URL, $postURL);
       curl_setopt($postCurl, CURLOPT_POST, true);
       curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
       curl_setopt($postCurl, CURLOPT_POSTFIELDS, $payloader);
       curl_setopt($postCurl, CURLOPT_SSL_VERIFYHOST, false);
       curl_setopt($postCurl, CURLOPT_SSL_VERIFYPEER, false);
       //sleep(1);
       $postResp = curl_exec($postCurl);
       curl_close($postCurl);
       $postjson = json_decode($postResp);

       return $postjson;
}

function payload($devIDx, $xtraPay, $rTokenx = ""){
   $valdata = <<<DATA
           {"device": {
               "deviceId": "$devIDx",
               "deviceImei": "",
               "deviceModel": "Tecno Spark 7 Pro",
               "deviceName": "android",
               "deviceOs": "Android R ",
               "isEmulator": false,
               "osVersion": "30",
               "notificationToken": "$rTokenx"
           },
           "countryCode": "US",
           $xtraPay
           }
           DATA; 

   return $valdata;
}

function payroyalty($carrier) {
   
    $userID="700018485803";

    $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$uid&category=ALL";
    $curld = curl_init($urld);
    curl_setopt($curld, CURLOPT_URL, $urld);
    curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
    $headersd = array("authorization: Bearer $carrier", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)",);
    curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
    $respd = curl_exec($curld);
    curl_close($curld);
    $jsond = json_decode($respd, true);

    $arr = json_decode($respd, true);
    $p[1] = $arr["data"]["0"]["id"];
    $p[2] = $arr["data"]["1"]["id"];
    $p[3] = $arr["data"]["2"]["id"];
    $p[4] = $arr["data"]["3"]["id"];
    $p[5] = $arr["data"]["4"]["id"];
    $p[6] = $arr["data"]["5"]["id"];
    $p[7] = $arr["data"]["6"]["id"];
    $p[8] = $arr["data"]["7"]["id"];
    $p[9] = $arr["data"]["8"]["id"];
    $p[10] = $arr["data"]["9"]["id"];
    $p[11] = $arr["data"]["10"]["id"];


$url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
$headers = array("authorization:Bearer $carrier", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);


for ($postloop=1; $postloop<11; $postloop++) {   

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data = <<<DATA
  {
    "device": {
    "deviceId": "fcbe87b62342fbac",
    "deviceImei": "fcbe87b62342fbac",
    "deviceModel": "Tecno Spark 7 Pro",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
    },
    "postId": $p[$postloop],
    "rate": 5,
    "userid": $uid
  }
  DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $resp = curl_exec($curl);
    curl_close($curl);
}
}

