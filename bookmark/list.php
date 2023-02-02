
<?
$con=mysqli_connect('localhost','bwyun','yshs1488*','bwyun');
$sql="select * from bookmark order by no desc;";
$result = mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){
?>
  <table width=600 border=1 align=center>
    <tr>
      <td bgcolor=#99cc00 align=center><?=$row['subject']?>
    <tr>
      <td><a href="go.php?no=<?=$row['no']?>" target=blank><?=$row['url']?></a>
    <tr>
      <td><img src=data/<?=$row['img']?> align=left hspace=5 >
      <?=nl2br($row['memo'])?>
    <tr>
      <td align=right> Hit : <?=$row['hit']?> 
  </table>
<? } ?>

<? 
$result = mysqli_close($con);
?>