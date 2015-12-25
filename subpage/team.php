<section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">成员介绍</h2>
                    <h3 class="section-subheading text-muted">点击头像查看详细信息</h3>
                    <p><em>补全修改信息请选择右上角选项</em></p>
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
                        <img src="img/team/<?php echo $team[id]; ?>.JPG" class="img-responsive img-circle person" alt="<?php echo $team[id]; ?>.JPG"></a>


                        <h4><?php echo $team[name]; ?></h4>
                        <p class="text-muted"><?php echo $team[suggest]; ?></p>
                        <div id="<?php echo $team[id]; ?>" class="collapse">
        					<p><?php if($team[master] == 1){echo $team[year] - 3;}
										else{echo $team[year]-4;} ?>届
                                        <?php
											if($team[master] == 1){
										?>
                                        研究生
                                        <?php }else{ ?>
                                        本科生
                                        <?php } ?>
                                        </p>
        					<p><?php echo $team[university]; ?> <?php echo $team[school]; ?></p>
                            <p><b>爱好：</b> <?php echo $team[hobby]; ?></p>
                            <p><b>职业及梦想：</b> <?php echo $team[dream] ?> </p>
    	 				</div>


                        <ul class="list-inline social-buttons">
                          <!--  <li><a href="#"><i class="fa fa-weixin"></i></a>
                            </li>
                            -->
                            
				<?php
                            if($team[facebook] != NULL){
                ?>
                            <li><a href="<?php echo $team[facebook] ?>"><i class="fa fa-facebook"></i></a>
                            </li>
               <?php		}
			   ?>
                            
               <?php
			   				if($team[weibo] != NULL){
							?>
                            <li><a href="<?php echo $team[weibo] ?>"><i class="fa fa-weibo"></i></a>
                            </li>
               <?php		}
			   ?>
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