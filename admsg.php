
  <meta charset="utf-8">

<?php

include_once "conn.php";

$name = $_POST['name'];
$email = $_POST['email'];
$school = $_POST['school'];
$major = $_POST['major'];
$year = $_POST['year'];
$highschool = $_POST['highschool'];
$work = $_POST['work'];
$district = $_POST['district'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];
$university = $_POST['university'];
$qq = $_POST['qq'];
$hobby = $_POST['hobby'];
$suggest = $_POST['suggest'];
$facebook = $_POST['facebook'];
$weibo = $_POST['weibo'];
$dream = $_POST['dream'];




$sql = "INSERT INTO address (name, email, school,major,year,highschool,work,district,phone,birthday,university,qq,hobby,suggest,facebook,weibo,dream) VALUES ('$name', '$email', '$school','$major','$year','$highschool','$work','$district','$phone','$birthday','$university','$qq','$hobby','$suggest','$facebook','$weibo','$dream');";

mysql_query($sql);

echo "<script>alert('感谢录入，页面跳转至通讯录列表！'); location.href = 'check.php'</script>";



?>