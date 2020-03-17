<?php
session_start();
$id=$_POST['id'];
$pw=$_POST['pw'];
$mysqli=mysqli_connect("localhost","root","102764","newmember");
$check="SELECT * FROM `member` WHERE `id`='{$id}'";
$result=$mysqli->query($check);
if($result->num_rows==1)
{
  $row=$result->fetch_array(MYSQLI_ASSOC);
  if($row['pw']==$pw)
  {
    $_SESSION['id']=$id;
      if(isset($_SESSION['id']))
        {
          header('Location: ./login_suc.html');
        }
      else
      {
        echo "세션 저장 실패";
      }
  }
  else {
    echo "아이디나 패스워드가 틀립니다.";
  }
}
else {
  echo "아이디나 패스워드가 틀립니다.";
}
?>
