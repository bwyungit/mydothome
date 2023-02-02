<?php
//   ############## PHP 에서 json 배열 만들기

// 그룹에 대한 정보를 저장
header('Content-Type: application/json');
header("Content-Type:text/html;charset=utf-8");
////01. 데이터 만들기
$groupData = array();
$groupData["groupName"] = "서태지와 아이들";
$groupData["debutYear"] = "1992";
$groupData["memberCount"] = "3";

////02. 데이터 안에 데이터 만들기
$member1 = array("name" => "서태지", "height" => "173cm", "weight" => "55kg");
$member2 = array("name" => "양현석", "height" => "180cm", "weight" => "70kg");
$member3 = array("name" => "이주노", "height" => "172cm", "weight" => "53kg");
$memberData = array($member1, $member2, $member3);
////02-01. 데이터 안에 데이터 넣기
$groupData["memberData"] = $memberData;

////03.  Json으로 만들기     // JSON Array가 포함된 Object를 문자열로 변환
$output =  json_encode($groupData);

echo urldecode($output);
echo "<br><br>";

// 출력
//     echo  urldecode($output);
//     {
//         "groupName": "서태지와 아이들",
//         "debutYear": "1992",
//         "memberCount": "3",
//         "memberData": [
//         {
//              "name": "서태지",
//              "height": "173cm",
//              "weight": "55kg"
//         },
//         {
//              "name": "양현석",
//              "height": "180cm",
//              "weight": "70kg"
//         },
//         {
//              "name": "이주노",
//              "height": "172cm",
//              "weight": "53kg"
//         }
//         ]
//     }


//   ############## json에서  PHP로 만들기

//   01. Json 데이터 배열로 담기

print_r($output);
echo "<br><br>";
$json_string = $output;
$data_array = json_decode($json_string, true);

echo $data_array;

//   02. JSon 데이터 뿌리기
echo $data_array['groupName']."<br/>";
echo $data_array['debutYear']."<br/>";
echo $data_array['memberCount']."<br/>";
echo "<br>";

foreach ($data_array['memberData'] as $key => $value){
    echo $value['name']."<br/>";
    echo $value['height']."<br/>";
    echo $value['weight']."<br/>";
    echo "<br/>";

};

// 03. Json 에러내역 보여주기
if (json_last_error() > 0) {
    echo json_last_error_msg() . PHP_EOL;
}
?>