<?php
session_start();
require 'actions/db.php';
if(isset($_SESSION['is_login']))
{
	

	$cats=query("select * from cats");
	$catsf=query("select * from cats");
	
	$country=query("select * from countries");
	

	$ads=query("select * from ads where a_id='{$_GET['id']}' and u_id='{$_SESSION['u_id']}'");
	$ad=fetch($ads);
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
		<h3>Update Ad</h3>
		<h4><a href="index.php">Home</a><label>/</label>Update Ad</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--dash-->
	<div class="check-out">	 
		<div class="container">	 
	 <div class="spec "><?php

			include 'temp/user_nav.php';
			?>
				<h3>Your Ad Details</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
				<form action="actions/update.php" enctype="multipart/form-data" method="post"><?php
			   	get_msg();
			   ?>
						 <div class="form-group">
						  <label for="sel1">Select Catagory :</label>
						  <select class="form-control" name="cat" id="sel1">
						    
						    <?php
						    while($catf=fetch($catsf))
						    {
						    	if($catf['c_id']==$ad['c_id'])
						    	{
						    		$s="selected";
						    	}else
						    	{
						    		$s="";
						    	}

						    echo "<option ".$s."  value='".$catf['c_id']."'>".$catf['c_name']."</option>";
						    }
						    ?>
						  </select>
						</div> 
						<input type="hidden" name="a_id" value="<?php echo $ad['a_id']; ?>">
						<div class="form-group">
						  <label for="usr">Title:</label>
						  <input type="text" name="title" value="<?php echo $ad['a_title'] ?>" class="form-control" id="usr">
						</div>
						 <div class="form-group">
						  <label for="country">Select Country :</label>
						  <select class="form-control" name="country" id="country">
						    
						   <?php
						    while($co=fetch($country))
						    {
						    	if($co['id']==$ad['country_id'])
						    	{
						    		$se="selected";
						    	}
						    echo "<option value='".$co['id']."'>".$co['name']."</option>";
						    }
						    ?>
						  </select>
						
						</div> 
						 <div class="form-group">
						  <label for="state">Select State :</label>
						  <select class="form-control" name="state" id="state">
						    
						  <?php
						  $state=query("select * from states where country_id='{$ad['country_id']}'");
	
						    while($co=fetch($state))
						    {
						    	if($co['id']==$ad['state_id'])
						    	{
						    		$se="selected";
						    	}
						    echo "<option value='".$co['id']."'>".$co['name']."</option>";
						    }
						    ?>
						  </select>
						
						</div> 
						 <div class="form-group">
						  <label for="city">Select City :</label>
						  <select class="form-control" name="city" id="city">
						    
						   <?php
						  $city=query("select * from cities where state_id='{$ad['state_id']}'");
	
						    while($co=fetch($city))
						    {
						    	if($co['id']==$ad['city_id'])
						    	{
						    		$se="selected";
						    	}
						    echo "<option value='".$co['id']."'>".$co['name']."</option>";
						    }
						    ?>
						  </select>
						
						</div>
						 <div class="form-group">
						  <label for="comment">Your Ad Description</label>
						  <textarea class="form-control" name="desc" rows="5" id="comment"><?php echo $ad['a_desc'] ?></textarea>
						</div> 
						<div class="input-group">
						  <span class="input-group-addon">$</span>
						  <input value="<?php echo $ad['a_price'] ?>"  type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollar)">
						  <span class="input-group-addon">.00</span>
						</div>
						<div class="form-group">
							
							<label for="usr">Image:</label>
							<img style="height: 100px;width: 100px;" src="uploads/<?php echo $ad['a_img'] ?>">
						     
  							  
  						</div>
						<div class="form-group">
							
							<label for="usr">Select Image:</label>
						      <label class="btn btn-default btn-file">
      						   <input type="file" name="img" style="display: block;">
  							  </label>
  							  
  						</div>
						  
						
						
						
						<input class="btn btn-info" type="submit" value="Update">
						<input class="btn btn-warning" type="reset" value="Reset Form" name="">

					</form>
 
		 </div>
		 </div>
		 				
	<!--quantity-->
			<script>
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
				$("#country").change(function(){

				var co_id=$(this).val();
				$.ajax({
					data:{c_id:co_id},
					type:"post",
					url:"actions/get_state.php",
					success:function(data){
						$("#state").html(data);
					}

				});
			});
			$("#state").change(function(){

				var co_id=$(this).val();
				$.ajax({
					data:{s_id:co_id},
					type:"post",
					url:"actions/get_city.php",
					success:function(data){
						$("#city").html(data);
					}

				});
			});
		
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