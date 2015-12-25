

  <meta charset="utf-8">

<?php
include_once "../conn.php";

$new = $_POST['new'];
$datatype = $_POST['datatype'];
$name = $_POST['name1'];

$sql = "INSERT INTO modify (name, new, datatype) VALUES ('$name', '$new', '$datatype');";

mysql_query($sql);

echo "<script>alert('申请已提交，可提醒老陈加速处理。。否则24小时之内受理'); location.href = '../index.php'</script>";