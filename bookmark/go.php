<?
$con=mysqli_connect('localhost','bwyun','yshs1488*','bwyun');

$sql="select * from bookmark where no = '$_GET[no]';";
$result = mysqli_query($con,$sql);

$row=mysqli_fetch_array($result);

$sql="update bookmark set hit=hit+1 where no = '$_GET[no]';";
$result = mysqli_query($con,$sql);


$result = mysqli_close($con);
?>

<script>
  location.href="<?=$row['url']?>";
</script>