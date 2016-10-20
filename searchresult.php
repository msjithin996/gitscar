<?php
$host="localhost";
$username="jithinms123";
$userpass="car123";
$dbname="cars";

try{
    $DB_con = new PDO("mysql:host={$host};dbname={$dbname}",$username,$userpass);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
}
?>
<?php
require ('searchresult.class.php');
if (isset($_POST['findmycar'])) {
    $car_type = $_POST['car_type'];
	$make = $_POST['make'];
	$fuel = $_POST['fuel'];
		$price = $_POST['price'];

	$mileagec = $_POST['mileagec'];
	$transmisson = $_POST['transmisson'];


    if ($obj->createQuery($car_type,$make,$fuel,$mileagec,$transmisson,$price)){

        $data= $obj->output;
        $data2 = $obj->queryResult;
        $countsize = sizeof($data2);
    }
}
?>
<!doctype html>

<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="images/favicon.ico">
<title>Gits Cars</title>

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
                
            </div>
        </div>
    </div>
</section>


       


     

            
            
            <div class="clearfix"></div>
            <div class="row">
            
            <?php
                            if (count($data2) >1) {
                                $counter =1;
                                foreach ($data2 as $keys => $value1) {
                                    ?>
           
                
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        
                           <?php
                            $a=$value1['id']; ?>

                            <a class="inventory" href= "inventory-listing.php?id=<?php echo $a?>"  /> 	 	
                            <div class="title"><?php $obj-> getCartitle($a) ?></div>
                            <img src="images/cars/<?php $obj->getCarImages($a) ?>" class="preview" alt="preview">
                            
                           
                           
                            <div class="price"><b>Price:</b><br>
                                <div class="figure"><?php echo $value1['price'] ?><br>
                                </div>
                                <div class="tax">Plus Sales Tax</div>
                            </div>
                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                            <div class="clearfix"></div></div>
                            </a>
                        </div>
                   
                      <?php
                                }
								
                            }elseif(count($data2)<1){
                                    ?>
                                <div class="col-sm-9 col-xs-12">
                                    <div class="b-detail__head-title">
                                        <h1>NO RECORD FOUND</h1>
                                    </div>
                                    <br>
                                </div>
                            <?php
                            }else {
								                                foreach ($data2 as $keys => $data2) {

                                ?>
               
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        
                           <?php
                            $a=$data2['id']; ?>

                            <a class="inventory" href= "inventory-listing.php?id=<?php echo $a?>"  /> 	 	
                            <div class="title"><?php $obj-> getCartitle($a) ?></div>
                            <img src="images/cars/<?php $obj->getCarImages($a) ?>" class="preview" alt="preview">
                            
                           
                           
                            <div class="price"><b>Price:</b><br>
                                <div class="figure"><?php echo $data2['price'] ?><br>
                                </div>
                                <div class="tax">Plus Sales Tax</div>
                            </div>
                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                            <div class="clearfix"></div></div>
                            </a>
                        </div>
                   
 <?php
                            }
							}
                            ?>




<div class="clearfix"></div>
<section class="copyright-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="logo-footer margin-bottom-40 md-margin-bottom-40 sm-margin-bottom-10 xs-margin-bottom-20"><a href="#">
                    <h1>Gits Cars</h1>
                    <span></span></a></div>
               
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
               
            </div>
        </div>
    </div>
</section>
<div class="back_to_top"> <img src="http://demo.themesuite.com/automotive/images/arrow-up.png" alt="scroll up" /> </div>
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