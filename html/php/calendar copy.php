<!--년도 및 월 콤보박스 만들기-->
<form action=calendar.php >
  <select name=year>
    <? for($i=1950;$i<=date('Y');$i++){
        if($i!=date('Y')){
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
        if($i!=date('d')){
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
  $max=date('t');
?>

<div align=center>
   <?=$year?>년 <?=$month?>월
   <table width=80% border=1>
      <col width=100 style="font-size:20">
      <col>
      <col>
      <col>
      <col>
      <col>
      <col>
     <tr>
       <th>일
       <td>월
       <td>화
       <td>수
       <td>목
       <td>금
       <td>토
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
      if($tmp==0)echo "<tr>";
?>
      <td> <?=$i?> </td>
<? }
    //마지막날 이후 공백 넣기
      $tmp=date("w",strtotime("$year-$month-$max"));
      for ($i=0;$i<6-$tmp;$i++) echo "<td> &nbsp;</td>";
 ?>

      </tr>
   </table>
</div>


