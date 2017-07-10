<!--A Design by Lazaza
Author: Lazaza
Author URL: http://lazaza.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Lazaza | Home :: lazaza</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--- start-mmmenu-script---->
<script src="js/jquery.min.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
<script type="text/javascript" src="js/jquery.mmenu.js"></script>
		<script type="text/javascript">
			//	The menu on the left
			$(function() {
				$('nav#menu-left').mmenu();
			});
		</script>
<!-- start slider -->
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					animation			: 'center',
					autoplay			: true,
					slideshow_interval	: 3000,
					titlesFactor		: 0
                });
            });
        </script>
<!-- start top_js_button -->
<script type="text/javascript" src="js/move-top.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
<!-- start header -->
<div class="top_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt=""/></a>
		</div>
		 <div class="log_reg">
				<ul>
					<li><a href="login.php">Login</a> </li>
					<span class="log"> or </span>
					<li><a href="register.php">Register</a> </li>								   
					<div class="clear"></div>
				</ul>
		</div>	
		<div class="web_search">

	    </div>						
		<div class="clear"></div>
	</div>	
</div>
</div>
<!-- start header_btm -->
<div class="wrap">
<div class="header_btm">
		<div class="menu">
			<ul>
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="shop now.php">Our product</a></li>
				<li><a href="about us.html">about lazaza</a></li>
				<li><a href="blog.html">Help</a></li>
				<li><a href="contact menubar.html">Contact</a></li>
				<div class="clear"></div>
			</ul>
		</div>
		<div id="smart_nav">
			<a class="navicon" href="#menu-left"> </a>
		</div>
		<nav id="menu-left">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="shop now.php">Our products</a></li>
				<li><a href="about.html">about</a></li>
				<li><a href="index.html">pages</a></li>
				<li><a href="blog.html">blog</a></li>
				<li><a href="contact menubar.html">Contact</a></li>
				<div class="clear"></div>
			</ul>
		</nav>
	<div class="header_right">
		<ul>
			
		</ul>
	</div>
	<div class="clear"></div>
</div>
</div>
<!-- start slider -->
<div class="slider">
				<!---start-image-slider---->
				<div class="image-slider">
					 <div class="wrapper">
                <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
                        <li>
                            <img src="images/slider-image3.jpg" alt="image02" />
                            <div class="ei-title">
                            	<h3 class="btn">599.000</h3>
                                <h2>pink shoes <br>	 Koleksi 2015</h2>
                                <h3 class="active">koleksi terbaik Lazaza tahun 2015<br>                            </h3>
                                <h3>
                                	
                            </div>
                        </li>
                        <li>
                            <img src="images/slider-image5.jpg" alt="image05"/>
                            <div class="ei-title">
                            	<h3 class="btn">380.000 </h3>
                                <h2>pink shoes <br> Koleksi	2015 </h2>
                                <h3 class="active">koleksi terbaik Lazaza tahun 2015<br>
                                	                                </h3>
                                <h3>
                                	
                            </div>
                        </li>
                    </ul><!-- ei-slider-large -->
                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>
                        <li><a href="#"><span>Anne Klein</span><p>limited edition</p> </a><img src="images/thumbs/5.jpg" alt="thumb05" /></li>
                        <li><a href="#"><span>Anne Klein</span><p>new release</p> </a><img src="images/thumbs/3.jpg" alt="thumb07" /></li>
                    </ul>
                    <!-- ei-slider-thumbs -->
                </div><!-- ei-slider -->
            </div><!-- wrapper -->
		</div>
		<!---End-image-slider---->	
</div>
<!-- start image1_of_3 -->
<div class="top_bg">
<div class="wrap">
<div class="main1">
	<div class="image1_of_3">
		<img src="images/img1.jpg" alt=""/>
	    <a href="shop now.php"><span class="tag">on sale</span></a>
	</div>
	<div class="image1_of_3">
		<img src="images/img2.jpg" alt=""/>
		<a href="shop now.php"><span class="tag">special offers</span></a>
	</div>
	<div class="image1_of_3">
		<img src="images/img3.jpg" alt=""/>
		<a href="shop now.php"><span class="tag">must have</span></a>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
	<div class="top_main">
		<h2>Happy Shopping</h2>
		<a href="shop now.php">shop now</a>
		<div class="clear"></div>
	</div>
	<!-- start grids_of_3 -->
	<div class="grids_of_3">
		<div class="grid1_of_3">
			<a href="shop now.php">
				<img src="images/pic1.jpg" alt=""/>
				<h3>wedges</h3>
				<span class="price">599.999</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="shop now.php">
				<img src="images/pic2.jpg" alt=""/>
				<h3>Nicholas edison</h3>
				<span class="price">239.000</span>
				
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="shop now.php">
				<img src="images/pic3.jpg" alt=""/>
				<h3>Karen Sandal</h3>
				<span class="price">100.000</span>
			</a>
		</div>
		<div class="clear"></div>
	</div>
	
	<!-- start grids_of_3 -->
	<div class="grids_of_3">
		<div class="grid1_of_3">
			<a href="shop now.php">
				<img src="images/pic4.jpg" alt=""/>
				<h3>Embosed Floral</h3>
				<span class="price">70.000</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="shop now.php">
				<img src="images/pic6.jpg" alt=""/>
				<h3>Victoria Milan</h3>
				<span class="price">340.000</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="shop now.php">
				<img src="images/pic5.jpg" alt=""/>
				<h3>Tracce Nestie Sports</h3>
				<span class="price">830.000</span>
				<span class="price1 bg">Special Offers</span>
			</a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	
	
	

	
	
	
	
	
	
	
	
	<!-- start grids_of_2 -->
	<div class="grids_of_2">
		<div class="grid1_of_2">
			<div class="span1_of_2">
				<h2>Sepatu untuk fashion wanita</h2>
				<p>Dalam dunia fashion wanita, selain pakaian, sepatu juga 
				memberikan nuansa manis terhadap gaya busana anda.
				Dapatkan segera sepatu yang sesuai dengan selera dan kebutuhan 
				fashion wanita anda.</p>
			</div>
			<div class="span1_of_2">
				<h2>Brand Terbaik</h2>
				<p>Sepatu sangat erat dengan fashion dan sudah menjadi kebutuhan dasar.
				Oleh karena itu LAZAZA terus berupaya menjawab kebutuhan fashion wanita 
				ini dengan menawarkan produk dari brand-brand terbaik lokal maupun internasional.</p>
			</div>
		</div>
		<div class="grid1_of_2 bg">
			<h2>Belanja fashion wanita di LAZAZA Indonesia</h2>
			<div class="grid_date">
					<p>Berbelanja kebutuhan sepatu wanita di LAZAZA Indonesia akan memberikan pengalaman baru dari koleksi, kualitas, pelayanan, dan keamanan.
					Kami juga memberikan layanan GRATIS ongkos kirim ke seluruh wilayah Indonesia*  dan pengembalian jika ada barang yang tidak sesuai dengan yang anda pesan.
					Jika anda mencari kebutuhan sepatu wanita, LAZAZA adalah pusat belanja sepatu online yang paling tepat untuk anda.
					Selamat berbelanja di LAZAZA Indonesia!</p> 
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>

<!-- start footer -->
<div class="footer_top">
<div class="wrap">
<div class="footer">
	<!-- start grids_of_3 -->
	<div class="span_of_3">
		<div class="span1_of_3">
			<h3>About Us</h3>
			<p>Lazaza sebagai online shoe shop destinasi terbesar di Asia tenggara, didirikan pada awal tahun 2012.
			kami berada di Indonesia, Malaysia, Singapura, Brunei,Thailand, Filipina & Hongkong.
			<br><a href="about us.html"><u>read more</u></a></br></p>
		</div>
		<div class="span1_of_3">
			<h3>Layanan</h3>
			<p><a href="panduan ukuran.html">Panduan Ukuran</a></p>
			<p class="top"><a href="status order.html">Status Order</a></p>
			<p class="top"><a href="konfirmasi transfer.php">Konfirmasi Transfer</a></p>
			<p class="top"><a href="pengembalian ongkir.php">Pengembalian Ongkir</a></p>
		</div>
		<div class="span1_of_3">
			<h3>Pembayaran</h3>
			<ul class="f_nav">
				<li><a href="#"><img src="images/homina.jpg" alt="" /> </a></li>
				<li><a href="#"><img src="images/f_pic2.jpg" alt="" /> </a></li>
				<li><a href="#"><img src="images/f_pic3.jpg" alt="" /> </a></li>
				<li><a href="#"><img src="images/f_pic4.jpg" alt="" /> </a></li>
				<li><a href="#"><img src="images/f_pic5.jpg" alt="" /> </a></li>
				<li><a href="#"><img src="images/f_pic6.jpg" alt="" /> </a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>
<!-- start footer -->
<div class="footer_mid">
<div class="wrap">
<div class="footer">
	<div class="f_search">
		
	</div>
	<div class="soc_icons">
			<ul>
				<li><a class="icon1" href="#"></a></li>
				<li><a class="icon2" href="#"></a></li>
				<li><a class="icon3" href="#"></a></li>
				<li><a class="icon4" href="#"></a></li>
				
			</ul>	
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
	<div class="f_nav1">
		<ul>
			<li><a href="kebijakan.html">kebijakan privasi /</a></li>
			<li><a href="syarat.html">Terms and conditions /</a></li>
			<li><a href="blog.html">support /</a></li>
			<li><a href="contact us.html">Contact us</a></li>
		</ul>
		</div>
	<div class="copy">
		<p class="link"><span>anda punya pertanyaan? Temukan jawabannya di
		<br>link ini: <a href=#> http://support.lazaza.co.id/hc/id</a></br></span></p>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>