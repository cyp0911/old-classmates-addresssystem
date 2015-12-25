<section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">成员介绍</h2>
                    <h3 class="section-subheading text-muted">点击头像查看详细信息</h3>
                </div>
            </div>
            
            
            <div class="row">
            
          <!-- 我 -->
<?php 	$i=1;
	$sql = mysql_query("select * from address");
	$team = mysql_fetch_array($sql);
	do{
?>          
                <div class="col-sm-3">
                    <div class="team-member">

                      <a href="#<?php echo $team[id]; ?>" data-toggle="collapse">	
                        <img src="img/team/<?php echo $team[id]; ?>.JPG" class="img-responsive img-circle person" alt="cyp"></a>


                        <h4><?php echo $team[name]; ?></h4>
                        <p class="text-muted"><?php echo $team[suggest]; ?></p>
                        <div id="<?php echo $team[id]; ?>" class="collapse">
        					<p><?php echo $team[year] - 4; ?>届</p>
        					<p><?php echo $team[school]; ?></p>
                            <p>爱好：<?php echo $team[hobby]; ?></p>
    	 				</div>


                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-weixin"></i></a>
                            </li>
                            <li><a href="<?php echo $team[weibo] ?>"><i class="fa fa-weibo"></i></a>
                            </li>
                            <li><a href="tencent://message/?uin=<?php echo $team[qq] ?>&Site=&Menu=yes"><i class="fa fa-qq"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>        
<?php
		if($i%4 == 0){
?>       
              </div>
         <div class="row">
<?php
		}
	$i=$i+1;
	}while($team = mysql_fetch_array($sql));
?>

</div>
               
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted"></p>
                </div>
            </div>
    </section>