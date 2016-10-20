<?php
error_reporting(0);
include("options.php");
?>
<!doctype html>

<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="images/favicon.ico">
<title>Gits cars </title>

<link href="css/bootstrap.min.css" rel="stylesheet">



<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yellowtail%7COpen%20Sans%3A400%2C300%2C600%2C700%2C800" media="screen" />

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" media="screen" />
<link href="css/jquery.fancybox.css" rel="stylesheet">
<link href="css/jquery.selectbox.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/mobile.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/ts.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>



</head>

<body>

<header  data-spy="affix" data-offset-top="1" class="clearfix">
    
    <div class="bottom-header" >
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid"> 
                   
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="index.html"><span class="logo"><span class="primary_text">Gits Cars</span> <span class="secondary_text"></span></span></a> </div>
                    
                  
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav pull-right">
                            <li class="active"><a href="index.html">Home</a></li>
                   
							<li><a href="boxedleft.php">Inventory</a></li>
							
							<li><a href="contact.html">Contact</a></li>
                            
                            <li><a href="our-team.html">Our Team</a></li>
                      
                            
                                
                            
                            
                        </ul>
                    </div>
               
                </div>

            </nav>
        </div>
        <div class="header_shadow"></div>
    </div>
</header>


<div class="clearfix"></div>
<section id="secondary-banner" class="dynamic-image-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h2>Inventory</h2>
                
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <ul class="breadcrumb">
                 
                </ul>
            </div>
        </div>
    </div>
</section>


<div class="message-shadow"></div>
<div class="clearfix"></div>
<section class="content">
    <div class="container">
        <div class="inner-page row">
            <div class="listing-view margin-bottom-20">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 padding-none"> <span class="ribbon"><strong>Matching Vehicles:</strong></span> <span class="ribbon-item">All Listings</span> </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pull-right select_view padding-none"> <span class="align-right"></span>
                    
                    </div> 
                </div>
            </div>
            <div class="clearfix"></div>
   
            <?php
	$sql = "SELECT * FROM car";
	$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);


?>


     

            
            
            <div class="clearfix"></div>
            <div class="row">
            
               <div class="inventory_box car_listings boxed boxed_full">
               
                	<?php while ($row = mysql_fetch_assoc($sql_result)) { ?>

                
                
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
             
                            
                          
                           <?php
                            $a=$row['id']; ?>

                            <a class="inventory" href= "inventory-listing.php?id=<?php echo $a?>"  /> 	 	
                            <div class="title"><?php echo $row['title'] ?></div>
                            <img src="images/cars/<?php echo $row['photo1'] ?>" class="preview" alt="preview">
                            <table class="options-primary">
                                <tr>
                                    <td class="option primary">Body Style:</td>
                                    <td class="spec"><?php echo $row['car_type'] ?></td>
                                </tr>
                                <tr>
                                    <td class="option primary">Horsepower:</td>
                                    <td class="spec"><?php echo $row['power'] ?> bhp</td>
                                </tr>
                                <tr>
                                    <td class="option primary">Top Speed:</td>
                                    <td class="spec"><?php echo $row['top_speed'] ?> kmph</td>
                                </tr>
                                <tr>
                                    <td class="option primary">Transmission:</td>
                                    <td class="spec"><?php echo $row['transmisson'] ?></td>
                                </tr>
                                <tr>
                                    <td class="option primary">Mileage:</td>
                                    <td class="spec"><?php echo $row['mileageh'] ?> kmpl</td>
                                </tr>
                            </table>
                            <table class="options-secondary">
                                <tr>
                                    <td class="option secondary">Exterior Color:</td>
                                    <td class="spec">Dark Blue Metallic</td>
                                </tr>
                                <tr>
                                    <td class="option secondary">Interior Color:</td>
                                    <td class="spec">Black / Titanium Blue</td>
                                </tr>
                                <tr>
                                    <td class="option secondary">MPG:</td>
                                    <td class="spec">15 city / 21 hwy</td>
                                </tr>
                                <tr>
                                    <td class="option secondary">Stock Number:</td>
                                    <td class="spec">590497</td>
                                </tr>
                                <tr>
                                    <td class="option secondary">VIN Number:</td>
                                    <td class="spec">WP1AD29P09LA65818</td>
                                </tr>
                            </table>
                      
                            <div class="price"><b>Price:</b><br>
                                <div class="figure"><?php echo $row['price'] ?>  Lakh<br>
                                </div>
                                <div class="tax">Plus Sales Tax</div>
                            </div>
                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                            <div class="clearfix"></div>
                            </a>
                            <div class="view-video gradient_button" data-youtube-id="<?php echo $row['video'] ?>"><i class="fa fa-video-camera"></i> View Video</div>
                        </div>
                    </div>
                   
                    	<?php } ?>
                 
                   
                   
</section>
<div id="youtube_video">
    <iframe width="560" height="315" src="#" allowfullscreen style="width: 560px; height: 315px; border: 0;"></iframe>
</div>


<div class="clearfix"></div>



<div class="clearfix"></div>
<section class="copyright-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="logo-footer margin-bottom-40 md-margin-bottom-40 sm-margin-bottom-10 xs-margin-bottom-20"><a href="#">
                    <h1> Gits Cars</h1>
                    <span></span></a></div>

            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <ul class="social margin-bottom-25 md-margin-bottom-25 sm-margin-bottom-20 xs-margin-bottom-20 xs-padding-top-10 clearfix">
          
                </ul>  
              
            </div>
        </div>
    </div>
</section>
 <script src="js/retina.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.fancybox.js"></script> 
<script src="js/modernizr.custom.js"></script> <script defer src="js/jquery.flexslider.js"></script> 
<script src="js/jquery.bxslider.js" type="text/javascript"></script> 
<script src="js/jquery.selectbox-0.2.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.mousewheel.js"></script> 
<script type="text/javascript" src="js/jquery.easing.js"></script>
</body>
</html>