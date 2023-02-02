<form action=add_post.php method=post enctype=multipart/form-data>
<table width=600 border=1 align=center>
  <tr bgcolor=#99cc00>
    <td colspan=2 align=center>추가하는 프로그램
  <tr>
    <td>제목
    <td><input type=text name=subject size=50>
  <tr>
    <td>설명
    <td><textarea name=memo cols=52 rows=5></textarea>
  <tr>
    <td>주소(url)
    <td><input type=text name=url value='http://' size=50>
  <tr>
    <td>스크린샷
    <td><input type=file name=assa size=30>
  <tr>
    <td colspan=2 align=center>
    <input type=submit value='추가하기'>
    
</table>
</form>
  