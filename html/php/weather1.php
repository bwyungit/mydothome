

<?

  if(extension_loaded("curl")){
  	  echo "cUrl extension is loaded";
  }else{
     echo "cUrl extension is not available";
  }

echo "<br><br>";
$date = date("Ymd");
$time = "1700";
$type = "json";
echo "base_date : $date<br><br>";

$key ='fRf1dQAnUgMrIg6PidIcy5twTKsCU9SrFm1ux1YA%2FEPXvYm%2BYo7iaattm5iEhF4H%2BxC9b6hIuEu7B1Yf67H0xQ%3D%3D';

echo "인증키 : $key<Br><br>";

$url= "http://apis.data.go.kr/1360000/VilageFcstInfoService_2.0/getVilageFcst?serviceKey=$key&numOfRows=10&pageNo=1&base_date=$date&base_time=$time&nx=55&ny=128&dataType=$type";


echo "url : $url<br><br>";


$postfields = array(
    'Username'=>'habony', 
    'Password'=>'123456', 
    'Submit'=>'전송' 
 ); 

 $ch = curl_init(); 
 curl_setopt($ch, CURLOPT_URL, $url); 

 //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
 //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 

 curl_setopt($ch, CURLOPT_HEADER, false); 
 //curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
 //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
 //curl_setopt($ch, CURLOPT_POST, 1); 
 //curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields); 

 $data = curl_exec($ch); 
 if (curl_error($ch))  
 { 
    exit('CURL Error('.curl_errno( $ch ).') '. curl_error($ch)); 
 } 
 curl_close($ch); 

 print_r($data);

 echo "<br><br>";
 $json_string = $data;
 $data_array = json_decode($json_string, true);

//print_r($data_array);
//echo $data_array[0][0][0];
// echo $data_array.ob_get_length();
// echo $data_array.ob_get_contents();
// echo $data_array.file_exists();


?>

<br><br>

<a href=<?=$url?>>기상청</a>