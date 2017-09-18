<!DOCTYPE html>
<html>

<head>
<title>MetrostoresNG</title>
<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script> -->
<link href="styles/bootstrap.min.css" rel="stylesheet">



<link href="font_awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="styles/style.css" rel="stylesheet">
</head>

<body>

<div  id="top"><!-- top Starts -->

  <div class="container"><!--container Starts -->

    <div class="col-md-6 offer"><!-- col-m6 offer Starts -->

<a href="#" class="btn btn-danger btn-sm">
Welcome: Guest
</a>

<a href="#">
Shopping Cart Total Price: ₦100, Total Items 2
</a>

    </div><!-- col-m6 offer Ends -->


<div class="col-md-6"><!-- col-md-6 Starts -->
<ul class="menu"><!-- menu Starts -->

<li>
  <a href="customer_register.php">
    Register
  </a>
</li>

<li>
<a href="checkout.php">
  My Account
</a>
</li>


<li>
  <a href="cart.php">
    Go to Cart
</a>
</li>


<li>
<a href="checkout.php">
Login
</a>
</li>


<li>
<a href="sellerhq.php">
Become a Seller
</a>
</li>


</ul><!-- menu Ends -->


</div><!-- col-md-6 Ends -->



  </div><!--container Ends -->

</div><!-- top Ends -->

<div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->
<div class="container"><!-- container Starts -->
<div class="navbar-header"><!-- navbar-header Starts -->
<a class="navbar-brand home" href="index.php"><!-- navbar navbar-brand home Starts -->

<img src="images/rsz_metro2.png" alt="MetrostoresNG logo" class="hidden-xs">
<img src="images/rsz_metro2.png" alt="MetrostoresNG logo" class="visible-xs">




</a><!-- navbar navbar-brand home Ends -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
<span class="sr-only">Toggle Navigation</span>
<i class="fa fa-align-justify"></i>
</button>

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
<span class="sr-only">Toggle Search</span>
<i class="fa fa-search"></i>
</button>


</div><!-- navbar-header Ends -->

<div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse Starts -->

<div class="padding-nav"><!-- padding-nav Starts -->

<ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Starts -->
<li>
  <a href="index.php"> Home </a>
</li>

<li class="active">
  <a href="shop.php"> Shop </a>
</li>

<li>
  <a href="checkout.php"> My Account </a>
</li>

<li>
  <a href="cart.php"> Shopping Cart </a>
</li>

<li>
  <a href="contact.php"> Contact Us </a>
</li>

</ul><!-- nav navbar-nav navbar-left Ends -->

</div><!-- padding-nav Ends -->
<a class="btn btn-primary navbar-btn right" href="cart.php"><!-- btn btn-primary navbar-btn right Starts -->

<i class="fa fa-shopping-cart"></i>
<span> 4 items in cart </span>
</a><!-- btn btn-primary navbar-btn right Ends -->

<div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Starts -->

<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

<span class="sr-only">Toggle Search</span>
<i class="fa fa-search"></i>

</button>

</div><!-- navbar-collapse collapse right Ends -->

<div class="collapse clearfix" id="search"><!-- collapse clearfix Starts -->

<form class="navbar-form" method="get" action="results.php"><!-- navbar-form Starts -->
<div class="input-group"><!-- input-group Starts -->
<input class="form-control" type="text" placeholder="Search" name="user_query" required>
<span class="input-group-btn"><!-- input-group-btn Starts -->

<button type="submit" value="Search" name="search" class="btn btn-primary">

<i class="fa fa-search"></i>

</button>

</span><!-- input-group-btn Ends -->

</div><!-- input-group Ends -->

</form><!-- navbar-form Ends -->
</div><!-- collapse clearfix Ends -->


</div><!-- navbar-collapse Ends -->

</div><!-- container Ends -->
</div><!-- navbar navbar-default Ends -->


<div id="content"><!-- content Starts -->
<div class="container"><!-- container Starts -->
<div class="col-md-12"><!-- col-md-12 Starts -->

<ul class="breadcrumb"><!-- breadcrumb Starts -->
<li>
<a href="index.php">Home</a>
</li>

<li>Shop</li>



</ul><!-- breadcrumb Ends -->
</div><!-- col-md-12 Ends -->
</div><!-- container Ends -->
</div><!-- content Ends -->

<?php
include("includes/footer.php");




?>
<script src="js/jquery-3.2.1.min.js"></script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
