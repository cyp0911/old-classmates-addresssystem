<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>搜索用户</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<div class="container">
<br>
<br>
<br>
</div>



<?php
include "../conn.php";

$id1 = $_POST['id1'];
$mark = 0;

$_SESSION["submit"] = $id1;

$i = 0;
$count = 0;
$sql = mysql_query("select * from address");
?>

    <div class="container">
		



<?php
$search = mysql_fetch_array($sql, MYSQL_BOTH);
do{
	$count = count($search)/2;
	
	if($search[name] == $id1)
	{
		?>
		<p>姓名：<?php echo $search[name] ?>。<br/>你有下列资料没填，请填写！</p>
<?php
		for($i = 0; $i < $count; $i++){
		if($search[$i] == NULL){
				
	?>
    <form method="post" class="my-form" action="subadmsg.php" role=form>
          		
    <p><b><?php 
	
		
		switch (mysql_field_name($sql,$i)) {
    case "suggest":
        echo "格言和介绍（显示在头像下面）：";
		$mark++;
		?>
		<input class="form-control" id="suggest" name="suggest" placeholder="格言介绍" type="text">        
		<?php
        break;
    case "weibo":
        echo "微博（链接最好，用户名也可）：";
		$mark++;
		?>
		<input class="form-control" id="weibo" name="weibo" placeholder="微博" type="text">        
		<?php
        break;
    case "facebook":
        echo "脸书（链接最好，用户名也可）：";
		$mark++;
		?>
		<input class="form-control" id="facebook" name="facebook" placeholder="脸书" type="text">        
		<?php
        break;
	case "dream":
        echo "职业和理想：";
		$mark++;
		?>
		<input class="form-control" id="dream" name="dream" placeholder="职业及理想" type="text">        
		<?php
        break;
	case "hobby":
        echo "爱好：";
		$mark++;
		?>
		<input class="form-control" id="hobby" name="hobby" placeholder="爱好" type="text">        
		<?php
        break;
}
?>


</b>&nbsp;&nbsp; <?php echo $search[$i]; ?></p>
    
    
    <?php
		
		}
			
			
			}
			
		if($mark == 0){echo "<script>alert('你的资料很完整，直接返回！如果想要修改资料，请编辑资料->修改已存资料!'); location.href = '../index.php'</script>";}
	?>
    
   
    
    
    
    <?php

	}

}while($search = mysql_fetch_array($sql, MYSQL_BOTH));
?>
<button class="btn btn-info" id="submitbtn" type="submit">提交</button>
</form>
</div>








</body>
</html>