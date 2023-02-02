<?
/* PHP 샘플 코드 */
if(extension_loaded("curl")){
    echo "cUrl extension is loaded";
}else{
 echo "cUrl extension is not available";
}

echo "<br><br>";
$date = date("Ymd");
echo "base_date : $date<br><br>";

$key ='fRf1dQAnUgMrIg6PidIcy5twTKsCU9SrFm1ux1YA%2FEPXvYm%2BYo7iaattm5iEhF4H%2BxC9b6hIuEu7B1Yf67H0xQ%3D%3D';

echo "인증키 : $key<Br><br>";

$url= "http://apis.data.go.kr/1360000/VilageFcstInfoService_2.0/getVilageFcst";




$ch = curl_init();
$url = 'http://apis.data.go.kr/1360000/VilageFcstInfoService_2.0/getUltraSrtNcst'; /*URL*/
$queryParams = '?' . urlencode('serviceKey') . $key; /*Service Key*/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /**/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('1000'); /**/
$queryParams .= '&' . urlencode('dataType') . '=' . urlencode('json'); /**/
$queryParams .= '&' . urlencode('base_date') . '=' . urlencode('20230124'); /**/
$queryParams .= '&' . urlencode('base_time') . '=' . urlencode('0500'); /**/
$queryParams .= '&' . urlencode('nx') . '=' . urlencode('55'); /**/
$queryParams .= '&' . urlencode('ny') . '=' . urlencode('128'); /**/

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
?>
