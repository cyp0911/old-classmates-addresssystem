<!DOCTYPE html>
<html lang="zh">

<head>
	<title>贵州大学北京老乡会</title>
  	<meta charset="utf-8">
  	<meta name="北京老乡会" content="贵州大学">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  	<link rel="icon" type="image/ico" href="img/bjico.ico"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://maps.googleapis.com/maps/api/js"> </script>
    <!-- Jquery -->
	<script src="js/jquery-1.7.1.min.js"></script>
 	<script src="js/modernizr.2.5.3.js"></script>

</head>

<body id="page-top" class="index">

<?php 
include "conn.php";


?>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">BJGZU</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">顶部</a>
                    </li>
                    <!--<li>
                        <a class="page-scroll" href="#portfolio">相册</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">关于</a>
                    </li> -->
                    
                    <li>
                        <a class="page-scroll" href="#contact">填写同学录</a>
                    </li>
                    <li>
                        <a class="page-scroll" data-toggle="modal" data-target="#update" href="#update">补全/编辑资料</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="check.php">通讯录</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#picture">上传照片</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://yinpengchen.com">返回主页</a>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>        
    
    
    <div class="carousel-caption">
			<div class="intro-text">
                <div class="intro-lead-in">贵州大学北京老乡会</div>
                <div class="intro-heading">欢迎访问</div>
                <a href="#contact" class="page-scroll btn btn-xl">了解更多</a>
            </div>
    </div>
    
    
    
        	<div id="myCarousel" class="carousel slide" data-ride="carousel">
            
    <!-- Indicators -->
    		<ol class="carousel-indicators">
      			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      			<li data-target="#myCarousel" data-slide-to="1"></li>
      			<li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
      			<li data-target="#myCarousel" data-slide-to="4"></li>
      			<li data-target="#myCarousel" data-slide-to="5"></li>

    		</ol>
    <!-- Wrapper for slides -->
    			<div class="carousel-inner" role="listbox">
      				<div class="item active">
        				<img class="img-responsive" src="img/1stgra.gif" alt="2ndbiye" width="1200" height="700">                 
      				</div>

					<div class="item">
        			<img class="img-responsive" src="img/boge.gif" alt="zhibo" width="1200" height="700">
              		</div>
                    
      				<div class="item">
        				<img class="img-responsive" src="img/2ndgra.gif" alt="beipinglou" width="1200" height="700">
      				</div>
    
      				<div class="item">
        				<img class="img-responsive" src="img/gubo.gif" alt="yangxiezi" width="1200" height="700">
              		</div>
                    
                    <div class="item">
        			<img class="img-responsive" src="img/quanweidao.gif" alt="quanweidao" width="1200" height="700">
              		</div>
					<div class="item">
        			<img class="img-responsive" src="img/beipinlou.gif" alt="zhibo" width="1200" height="700">
              			</div>
        			</div>      

    <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
         </div>
    </header>

    <!-- Services Section -->
    <!--
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">E-Commerce</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Responsive Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Web Security</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
-->
    <!-- Portfolio Grid Section -->

<!--
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">珍贵视频</h2>
                    <h3 class="section-subheading text-muted">点击观看</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4></h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Startup Framework</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Treehouse</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Golden</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Dreams</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

-->
    <!-- About Section -->
    <!--
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
-->
    <!-- Team Section -->
    
<?php 
include "subpage/team.php";
?>    
    
    
    
    
    <!-- Clients Aside -->
    <!--
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    -->
    
    
    
    
 <?php include 'subpage/modal.php'
 ?>

  
    
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center">录入信息</h2>
  		<p class="text-center"><em>请填写相关信息，如要补全/修改已注册信息，请点击主菜单选项</em>
         </p>
<!--
  <div class="row">
    <div class="col-md-4">
      <p>Please contact me</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Wolfville, Canada</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +1 902-300-8932</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: cyp0911@gmail.com</p>	   
    </div> -->
  
        
  
  
  
  	<form method="post" action="admsg.php" class="my-form" role="form">
      <div class="row">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="name" placeholder="姓名" type="text" required>
        </div>
        <div class="col-sm-4 form-group" align="center">
                <label for="sel1"><span style="color:yellow">学院:</span></label>
          <select name="school" class="form-control" id="sel1" required>
    			<option value="经济学院">经济学院</option>
    			<option value="计算机学院">计算机学院</option>
   				<option value="外国语学院">外国语学院</option>
   				<option value="电工学院">电工学院</option>
                <option value="行政学院">行政学院</option>
                <option value="文学院">文学院</option>
                <option value="建工学院">建工学院</option>
                <option value="土建学院">土建学院</option>
                <option value="生命科学学院">生命科学学院</option>
                <option value="法学院">法学院</option>
                <option value="音乐学院">音乐学院</option>
  		  </select>   
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="major" name="major" placeholder="专业" type="text" required>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="highschool" name="highschool" title="来贵州前就读学校" placeholder="高中/本科（来贵州前所在学校，可填写多个用逗号隔开）" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" type="email" name="email" id="email" placeholder="Email地址" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="work" name="work" placeholder="现在单位" type="text" required>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-4 form-group" align="center">
        	<label for="sel2"><span style="color:yellow;">所在区县:</span></label>
          <select name="district" class="form-control" id="sel2" required>
    			<option value="西城区">西城区</option>
    			<option value="东城区">东城区</option>
   				<option value="海淀区">海淀区</option>
   				<option value="昌平区">昌平区</option>
                <option value="顺义区">顺义区</option>
                <option value="通州区">通州区</option>
                <option value="朝阳区">朝阳区</option>
                <option value="延庆区">延庆区</option>
                <option value="房山区">房山区</option>
                <option value="平谷区">平谷区</option>
                <option value="丰台区">丰台区</option>
  		  </select> 
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="phone" name="phone" placeholder="电话" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
        	<label for="birthday"><span style="color:yellow">生日：</span></label>
          <input class="input-sm" type="date" id="birthday" name="birthday" max="1995-01-01" required>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="qq" name="qq" placeholder="QQ" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" type="text" name="hobby" id="hobby" placeholder="爱好" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="suggest" name="suggest" placeholder="一个词形容自己，将显示在个人头像下" type="text" required>
        </div>
      </div>
      
      <div class="row">
      	<div class="col-sm-4 form-group">
          <input class="form-control" id="dream" name="dream" placeholder="职业及梦想" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="weibo" name="weibo" placeholder="微博（用户名，没有可不填）" type="text" >
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" type="text" name="facebook" id="facebook" placeholder="facebook(用户名，没有可不填)" >
        </div>
      </div>
      
      <div class="row form-group" align="center">
      <h2>毕业学校：<input class="radio-inline" type="radio" name="university" value="贵州大学" checked> 贵州大学  </h2>
  				<h2>  <input class="radio-inline" type="radio" name="university" value="贵州民族大学"> 贵州民族大学	</h2>
               <h2>   <input class="radio-inline" type="radio" name="university" value="贵州师范大学"> 贵州师范大学  </h2>
       </div>
       <div class="row form-inline" align="center">
       	<div class="col-lg-12">
        <h3>  毕业年份：<select name="year" class="form-control" required>
                  	<option value="2012">2012</option>	
                    <option value="2013">2013</option>	
                  	<option value="2014">2014</option>	
                  	<option value="2015">2015</option>	
                  </select>
      </h3>
      </div>
      
      </div>
      <!--
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea> -->
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn btn-info pull-right" id="submitbtn" type="submit">提交</button>
        </div>
      </div>	
     </form> 

        </div>
    </section>
    
    <section id="picture">
    	<div class="container">
        	<h2>照片上传，接受任何照片</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
    选择需要上传的照片：然后点击上传
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input class="btn btn-info" type="submit" value="上传图片" name="submit">
</form>
</div>       
    </section>
    
    
    

<!-- Add Google Maps -->
<div class="jumbotron" >
	<div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-11">
    	<h2>地点：贵州大学</h2>
      </div>
    </div>
		<div id="googleMap">
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script>
		var myCenter = new google.maps.LatLng(26.443288, 106.674422);

		function initialize() {
		var mapProp = {
		center:myCenter,
		zoom:12,
		scrollwheel:true,
		draggable:true,
		mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		  
		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
		  
		var marker=new google.maps.Marker({
		position:myCenter,
		animation:google.maps.Animation.BOUNCE
  		});

		marker.setMap(map);

		var infowindow = new google.maps.InfoWindow({
  			content:"<b>贵州大学</b>"
  		});

		google.maps.event.addListener(marker, 'click', function() {
  			infowindow.open(map,marker);
  		});
		}
  

		google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		</div>
</div>
<!-- containner tag above-->


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <!--<ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>-->
                    <span class="copyright">Copyright &copy; 海狸先生 2015</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#"></a>
                        </li>
                        <li><a href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Heading</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                            <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                            <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
