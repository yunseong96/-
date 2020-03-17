<?php
$id=$_POST['id']
$pw=$_POST['pw']
if($id==NULL||$pw==NULL)
{
  echo "정보를 모두 입력해주세요";
  echo "<a href=signUp.html>back page</a>";
  exit();
}
$mysqli=mysqli_connect("localhost","root","102764","member");
$check="SELECT *from user_info WHERE userid='$id'";
$result=$mysqli->query($check);
if($result->num_rows==1)
{
  echo "중복된 아이디입니다.";
  echo "<a href=signUp.html>back page</a>";
  exit();
}
$signup=mysqli_query($mysqli,"INSERT INTO user_info (userid,userpw) VALUES  ('$id','$pw')");
if($signup)
{
  echo "회원가입이 완료되었습니다.";
}

 ?>
