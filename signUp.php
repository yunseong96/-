<?php
$id=$_POST['id'];
$pw=$_POST['pw'];
if($id==NULL||$pw==NULL)
{
  echo "정보를 모두 입력해주세요";
  echo "<a href=./signUp.html>back page</a>";
  exit();
}
$mysqli=mysqli_connect("127.0.0.1","root","102764","newmember");
$insert_query = "INSERT INTO `member` (`id`, `pw`) VALUES ('{$id}', '{$pw}')";
$signup=mysqli_query($mysqli,$insert_query);
if($signup)
{
  echo "회원가입이 완료되었습니다.";
  echo "<a href=./login.html>로그인 페이지로 돌아가기</a>";
}
 ?>
