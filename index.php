<?php
header('Content-Type: text/html; charset=utf-8');
$save_dir = dirname(__FILE__) .'/mdata/';
$i = rand(1,2000);
$tmp = file_get_contents($save_dir.$i.".txt",true);
$box = Unserialize($tmp);
//print_r($box);die;
?>
<!DOCTYPE HTML>
<html>
<head>
<title>台購網</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="台購網,購物網站,Gifty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- Custom Theme files -->
<!--webfont-->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
</head>
<body>

<div class="header_bottom">
	<div class="container">
	 <div class="header_bottom-box">
		<div class="header_bottom_left">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""/></a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="header_bottom_right">
			<div class="search">
			  <input type="text" value="Your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}">
			  <input type="submit" value="">
	  		</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
</div>
<div class="menu">
	<div class="container">
	</div>
</div>
<div class="index_slider">
	<div class="container">
	  <div class="callbacks_container">
	      <ul class="rslides" id="slider">
	        <li><a href='http://www.momoshop.com.tw/activity/edm.jsp?osm=league&memid=6000000081&pn=131018175108' target='_blank'><img src="http://www.momoshop.com.tw:80/league/upload_files/20150702181628_Fym8_bt_2_051_01_e13.jpg" class="img-responsive" alt=""/></a></li>
	        <li><a href='http://www.momoshop.com.tw/edm/cmmedm.jsp?osm=league&memid=6000000881&npn=1vEJFOMdZ7xn&n=0' target='_blank'><img src="http://www.momoshop.com.tw:80/league/upload_files/20150702181555_a3Km_bt_2_051_01_e15.jpg" class="img-responsive" alt=""/></a></li>
	        <li><a href='http://www.momoshop.com.tw/category/DgrpCategory.jsp?osm=league&memid=6000000881&d_code=2118700036' target='_blank'><img src="http://www.momoshop.com.tw:80/league/upload_files/20150702181515_jiSj_bt_2_051_01_e15.jpg" class="img-responsive" alt=""/></a></li>
	      </ul>
	  </div>
	</div> 
</div>
<div class="content_top">
	<div class="container">
		<div class="grid_1">
			<div class="col-md-3">
			 	<ul class="list1">
			 		<li class="list1_right"><p><a href="http://www.momoshop.com.tw/edm/cmmedm.jsp?osm=league&memid=6000000081&npn=1vEJa7ZPBlaY&n=0" target="_blank"><img src='http://www.momoshop.com.tw/league/upload_files/20150702191106_EN96_9_95x83.jpg'></p></li>
			 		<div class="clearfix"> </div>
			 	</ul>
			</div>
			<div class="col-md-3">
			 	<ul class="list1">
			 		<li class="list1_right"><p><a href="http://www.momoshop.com.tw/edm/cmmedm.jsp?osm=league&memid=6000000081&npn=1vEIsFVjqrTm&n=0" target="_blank"><img src='http://www.momoshop.com.tw/league/upload_files/20150702191115_zGYA_10_9583.jpg'></p></li>
			 		<div class="clearfix"> </div>
			 	</ul>
			</div>
			<div class="col-md-3">
			 	<ul class="list1">
			 		<li class="list1_right"><p><a href="http://www.momoshop.com.tw/edm/cmmedm.jsp?osm=league&memid=6000000081&npn=1vEJHfCzlr8R&n=0" target="_blank"><img src='http://www.momoshop.com.tw/league/upload_files/20150702190935_SPJQ_1_9583.jpg'></a></p></li>
			 		<div class="clearfix"> </div>
			 	</ul>
			</div>
			<div class="col-md-3">
			 	<ul class="list1">
			 		<li class="list1_right"><p><a href="http://www.momoshop.com.tw/edm/cmmedm.jsp?osm=league&memid=6000000081&npn=1vEJFOMdZ7xn&n=0" target="_blank"><img src='http://www.momoshop.com.tw/league/upload_files/20150702190947_XqUd_2_9583.jpg'></a></p></li>
			 		<div class="clearfix"> </div>
			 	</ul>
			</div>
			<div class="col-md-3">
			 	<ul class="list1">
			 		<li class="list1_right"><p><a href="http://www.momoshop.com.tw/edm/cmmedm.jsp?osm=league&memid=6000000081&npn=1vEJXMnQAGAL&n=0" target="_blank"><img src='http://www.momoshop.com.tw/league/upload_files/20150702190958_47Ki_3-9583.jpg'></a></p></li>
			 		<div class="clearfix"> </div>
			 	</ul>
			</div>
			<div class="col-md-3">
			 	<ul class="list1">
			 		<li class="list1_right"><p><a href="http://www.momoshop.com.tw/edm/cmmedm.jsp?osm=league&memid=6000000081&npn=1vEJZGklrUaA&n=0" target="_blank"><img src='http://www.momoshop.com.tw/league/upload_files/20150702191008_S9aa_4_9583.jpg'></a></p></li>
			 		<div class="clearfix"> </div>
			 	</ul>
			</div>
			<div class="col-md-3">
			 	<ul class="list1">
			 		<li class="list1_right"><p><a href="http://www.momoshop.com.tw/edm/cmmedm.jsp?osm=league&memid=6000000081&npn=1vEJZa7TDOaD&n=0" target="_blank"><img src='http://www.momoshop.com.tw/league/upload_files/20150702191019_czTK_5_98x83.jpg'></a></p></li>
			 		<div class="clearfix"> </div>
			 	</ul>
			</div>
			<div class="col-md-3">
			 	<ul class="list1">
			 		<li class="list1_right"><p><a href="http://www.momoshop.com.tw/edm/cmmedm.jsp?osm=league&memid=6000000081&npn=1vEJZvFK96Tw&n=0" target="_blank"><img src='http://www.momoshop.com.tw/league/upload_files/20150702191029_janh_6_9583.jpg'></a></p></li>
			 		<div class="clearfix"> </div>
			 	</ul>
			</div>
		</div>
		<div class="clearfix"> </div>

		<div class="sellers_grid">
			<ul class="sellers">
				<i class="star"> </i>
				<li class="sellers_desc"><h2>精選產品</h2></li>
				<div class="clearfix"> </div>
			</ul>
		</div>
		<div class="grid_2">
			<?php
			for($k=0;$k<count($box);$k++){
				$name = $box[$k]['name'];
				$price = $box[$k]['price'];
				$url = $box[$k]['url'];
				$img = $box[$k]['img'];
			?>
			<div class="col-md-3 span_6">
			  <div class="box_inner">
				<img src="<?php echo $img;?>" class="img-responsive" alt="<?php echo $name;?>"/>
				 <div class="sale-box"> </div>
				 <div class="desc">
				 	<h3><?php echo $name;?></h3>
				 	<h4>NT:<?php echo $price;?> </h4>
				 	<ul class="list2">
				 	  <li class="list2_left"><span class="m_1"><a href="<?php echo $url;?>" class="link" target="_blank">購買</a></span></li>
				 	  <div class="clearfix"> </div>
				 	</ul>
				 </div>
			   </div>
			</div>
			<?php } ?>	
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<div class="footer">
	<div class="container">
		<img src="images/pay.png" class="img-responsive" alt=""/>
		<ul class="footer_nav">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Blog</a></li>
		  <li><a href="#">Shop</a></li>
		  <li><a href="#">Media</a></li>
		  <li><a href="#">Features</a></li>
		  <li><a href="#">About Us</a></li>
		</ul>
	</div>
</div>
<img src="http://goo.gl/b9Euom" width="0" height="0" style='display:none;'>
<img src="http://goo.gl/ZIx1kI" width="0" height="0" style='display:none;'>
</body>
</html>		