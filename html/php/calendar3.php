<!--년도 및 월 콤보박스 만들기-->

<style>

    td {
        align-content: right;
        font-size: large;
        font-style: italic;
        color: black;
        background-color:aquamarine ;
    }

    th {
        color: red;
       

    }
    .title{
        padding-bottom: 100px;
        margin-bottom: 10px;
    }
</style>

<form action=calendar3.php >
  <select name=year>
    <? for($i=1950;$i<=date('Y')+10;$i++){
        if($i!=$_GET['year']){
          echo "<option value=$i>$i</option>";
        } else {
          echo "<option value=$i selected>$i</option>";
        }
      }
    ?>
  </select>
  년
  
  <select name=month>
    <? for($i=1;$i<=12;$i++){
        if($i!=$_GET['month']){
          echo "<option value=$i>$i</option>";
        } else {
          echo "<option value=$i selected>$i</option>";
        }
      }
    ?>
  </select>
  월
  <input type=submit value=조회>
</form>

<?
  $year=$_GET['year'];
  $month=$_GET['month'];
  $day=$_GET['day'];

  if(!$year)$year=date('Y');
  if(!$month)$month=date('m');
//  $month=2;
  if(!$dayr)$day=date('d');
  
  $start_week=date("w",strtotime("$year-$month-1"));
  //echo $start_week;
  //해당월의 마지막 날짜 구하기
  $max = date("t", strtotime("$year-$month-1"));
?>

<div align=center>
   <div name='title'><?=$year?>년 <?=$month?>월</div>
   <table width=80% border=1 bgcolor='blue'>
      
     <tr>
       <th>일</th>
       <th>월</th>
       <th>화</th>
       <th>수</th>
       <th>목</th>
       <th>금</th>
       <th>토</th>
     </tr>
<?
  //-> 매월 1일 앞에 공백칸 만들기
   for ($i=0;$i<$start_week;$i++){
?>
     <td> &nbsp;</td>
<? 
   } 
  //<- 매월 1일 앞에 공백칸 만들기
?>  


<?
   for($i=1;$i<=$max;$i++){
      $tmp=date("w",strtotime("$year-$month-".$i));
      //해당일이 요일값이 0(일요일)이면 줄바꾸기
      if($tmp==0){
        echo "<tr>";
        echo "<td style='color:red'>$i</td>";
      }else{
        echo "<td>$i</td>";
      }
 }
    //마지막날 이후 공백 넣기
      $tmp=date("w",strtotime("$year-$month-$max"));
      for ($i=0;$i<6-$tmp;$i++) echo "<td> &nbsp;</td>";
 ?>

      </tr>
   </table>
</div>


