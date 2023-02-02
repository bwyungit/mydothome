<?
$con=mysqli_connect('localhost','bwyun','yshs1488*','bwyun');

echo $_FILES['assa']['type'];
//phpinfo();
if($_FILES['assa']['type']!='image/gif'){
  echo "gif파일만 업로드 가능합니다.";
  exit;
  }
//echo "HI";
//exit;
$uploads_dir = './data';
$name = $_FILES['assa']['name'];
echo $name;
move_uploaded_file( $_FILES['assa']['tmp_name'], "$uploads_dir/$name");

$sql="insert into bookmark(subject, memo, url, img) 
      values(
      '".$_POST['subject']."',
      '".$_POST['memo']."',
      '".$_POST['url']."',
      '".$name."');";

echo "<br>$sql<br><br>";

$result = mysqli_query($con,$sql);
echo $result;


$result = mysqli_close($con);
echo $result;
?>