 <?php
session_start();
?>

  <meta charset="utf-8">

<?php
include_once "../conn.php";

  
$suggest = $_POST['suggest'];
$weibo = $_POST['weibo'];
$facebook = $_POST['facebook'];
$dream = $_POST['dream'];
$hobby = $_POST['hobby'];

$submit = $_SESSION['submit'];

if($facebook != NULL){
$query="UPDATE address SET facebook='$facebook' WHERE name='$submit'";
mysql_query($query);
}

if($weibo != NULL){
$query="UPDATE address SET weibo='$weibo' WHERE name='$submit'";
mysql_query($query);
}

if($dream != NULL){
$query="UPDATE address SET dream='$dream' WHERE name='$submit'";
mysql_query($query);
}

if($hobby != NULL){
$query="UPDATE address SET hobby='$hobby' WHERE name='$submit'";
mysql_query($query);
}

if($suggest != NULL){
$query="UPDATE address SET suggest='$suggest' WHERE name='$submit'";
mysql_query($query);
}



mysql_close();


			




echo "<script>alert('完成！转回主页'); location.href = '../index.php'</script>";




?>