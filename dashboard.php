<?php
session_start();
require 'actions/db.php';
if(isset($_SESSION['is_login']))
{
	$res=query("select * from ads where u_id='{$_SESSION['u_id']}'");
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | About :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->


</head>
<body>

<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="index.php"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1>
			</div>
			<?php

			include 'temp/top_nav.php';
			?>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

			<?php

	include 'temp/nav.php'
	?>		
</div>
  <!---->
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Dashboard</h3>
		<h4><a href="index.php">Home</a><label>/</label>Dashboard</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--dash-->
	<div class="check-out">	 
		<div class="container">	 
	 <div class="spec "><?php

			include 'temp/user_nav.php';
			?>
				<h3>Your Ads</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
				
			
			  
			   <a href="new_ad.php" class="btn btn-info">Post New Ad</a>
			   <?php
			   	get_msg();
			   ?>
			   
			   <br>
			   <span class="notify"></span>
			   <br>
 <table class="table ">
		  <tr>
			<th class="t-head head-it ">Title</th>
			<th class="t-head">Category</th>
			<th class="t-head">Location</th>
			<th class="t-head">Price</th>
		<th class="t-head">Date of Post</th>

			<th class="t-head">Action</th>
		  </tr>
		 <?php
		 $i=1;
		 while($ads=fetch($res))
		 {
		 	$msg=fetch(query("select count(*) as msg from msg where m_on_ad='{$ads['a_id']}' and m_status='unread'"));
		 	if($msg['msg']>0)
		 	{
		 		$popup="<a href='chat.php'>".$msg['msg']." <span class='fa fa-comments'>unread</span></a>";

		 	}else
		 	{
		 		$popup="";
		 	}
		 	$co=fetch(query("select * from countries where id='{$ads['country_id']}'"));
		 	$st=fetch(query("select * from states where id='{$ads['state_id']}'"));
		 	$ci=fetch(query("select * from cities where id='{$ads['city_id']}'"));
		 	$loc=$co['name'].",".$st['name'].",".$ci['name'];
		 	$cat=fetch(query("select c_name from cats where c_id='{$ads['c_id']}'"));

		 	echo "<script>$(document).ready(function(c) {
					$('.close".$i."').on('click', function(c){

							$('.cross".$i."').fadeOut('slow', function(c){
							$('.cross".$i."').remove();

						});
						});	  
					});
			   </script>";
			   if($ads['a_status']=='active')
			   {
			   	$sh="De-Activate It";
			   	$cls="danger";
			   }else if($ads['a_status']=='inactive')
			   {
			   	$sh="Activate It";
			   	$cls="info";
			   }
		 echo " <tr class='cross".$i."'>
			<td class='ring-in t-data' >
				<a href='a_detail.php?a_id=".$ads['a_id']."' class='at-in'>
					<img src='uploads/".$ads['a_img']."' class='img-responsive' alt='".$ads['a_img']."'>
				</a>
			<div class='sed'>
				<h5>".$ads['a_title']."</h5>
			".$popup."
			</div>
				<div class='clearfix'></div>
				<div class='close".$i."' title='Delete Adq' onclick='test(".$i.")'> <i class='fa fa-times' aria-hidden='true'></i></div>
			 </td>
			 <td class='t-data'>".$cat['c_name']."</td>
			  <td class='t-data'>".$loc."</td>
			<td class='t-data'>$".$ads['a_price'].".00</td>
			<td class='t-data'>".$ads['a_date']."</td>
			<!--<td class='t-data'><div class='quantity'> 
								<div class='quantity-select'>            
									<div class='entry value-minus'>&nbsp;</div>
										<div class='entry value'><span class='span-1'>1</span></div>									
									<div class='entry value-plus active'>&nbsp;</div>
								</div>
							</div>
			
			</td>-->
			<input type='hidden' id='ad_id".$i."' value='".$ads['a_id']."'>
			<td class='t-data t-w3l'><a class=' add-1' href='update.php?id=".$ads['a_id']."'>Update</a><br><br>
			<a class='btn btn-".$cls."' href='actions/status.php?id=".$ads['a_id']."&st=".$ads['a_status']."'>".$sh."</a>

			</td>
			
		  </tr>";
		  $i++;
		}
		 ?>
		  
		  
	</table>
	<span class="notify"></span>
		 
		 </div>
		 </div>

		 				
	<!--quantity-->
			<script>

				function test(tempData){
					var cls=tempData;
						var ad_id=$("#ad_id"+cls).val();
					$.ajax({
						data:{cls:ad_id},
						type:"post",
						url:"actions/del.php",
						success:function(data)
						{
							$(".notify").html(data);
						}
					});

					//
				}
			$('.value-plus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
				divUpd.text(newVal);
			});

			$('.value-minus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
				if(newVal>=1) divUpd.text(newVal);
			});
			</script>
			<!--quantity-->


	
<!--footer-->
<?php


include 'temp/footer.php';
?>
<!-- //footer-->
<!-- smooth scrolling -->
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>


</body>
</html>

<?php
}else
{
	set_msg("Please Login First");
	red("login.php");
}
?>