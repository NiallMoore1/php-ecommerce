<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
    <head>
        <title> On Line Store </title>
        <link rel="stylesheet" href="styles/style.css" media="all">
    </head>

        <body>
<!--main container-->
	            <div class="main-wrapper">
<!--header-->
  
                        <img id="logo" src="images/image-11.jpeg"/>
                        <img id="banner" src="images/image-22.jpeg"/>
                </div>
<!--/header-->
<!--navbar-->

                    <div class="menubar">
                        <ul id="menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">All Products</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Sign Up</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                        
					<div id="form">
						<form method="get" action="result.php" enctype="multipart/form-data">
						<input type="text" name="user-query" placeholder="search a product"/>
						<input type="submit" name="search" value="search"/>
						</form>
					</div>
                    </div>
<!--search box-->
<!--/search box-->                   
<!--/navbar--> 
<!--content wrapper -->	              
                <div class="content-wraper">
                    <div id="sidebar">
                    <div id="sidebar-title">Categories</div>
                        <ul id="cats">
                        <?php getCats();?>
                        </ul>
                        <div id="sidebar-title">Brands</div>
                        <ul id="brands">
                            <li><a href="#">HP</a></li>
                            <li><a href="#">Dell</a></li>
                            <li><a href="#">Motorola</a></li>
                            <li><a href="#">Sony</a></li>
                            <li><a href="#">LG</a></li>
                            <li><a href="#">Apple</a></li>
                        </ul>
					</div>
                    <div id="content_area"></div>
                </div>
<!--/content wrapper-->	
<!--/ container ends-->
	     </body>
</html>