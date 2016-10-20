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
<link href="css/social-likes.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/print.css" rel="stylesheet" type="text/css" media="print">
<link href="css/ts.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key&amp;sensor=false"></script>



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
<?php
$a=$_GET['id'];

?>

       <?php
	$sql = "SELECT * FROM car where id=$a";
	$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);

?>
                	<?php $row = mysql_fetch_assoc($sql_result)?>








<div class="clearfix"></div>
<section id="secondary-banner" class="dynamic-image-8">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h2>Inventory Listing</h2>
 
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 ">
      
            </div>   
        </div>
    </div>
</section>

<div class="message-shadow"></div>
<div class="clearfix"></div>
<section class="content">
    <div class="container">
        <div class="inner-page inventory-listing">
            <div class="inventory-heading margin-bottom-10 clearfix">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <h2><?php echo $row['title'] ?></h2>
                        <span class="margin-top-10"><?php echo $row['tagline'] ?></span> </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-right">
                        <h2><?php echo $row['PRICE'] ?></h2>
                      <!--  <em><?php echo $row['title'] ?></em>--> </div>
                </div>
            </div>
            <div class="content-nav margin-bottom-30">
                <div class="row">
                    <ul>
                       
                       
                        <li class="schedule gradient_button"><a href="forms/schedule.php?recaptcha" class="fancybox_div">Schedule Test Drive</a></li>
                        <li class="offer gradient_button"><a href="360/index.php?id=<?php echo $a?>">360view</a></li>
                        <li class="pdf gradient_button"><a href="http://<?php echo $row['brochure'] ?>" class="">PDF Brochure</a></li>
                        <li class="print gradient_button"><a class="print_page">Print This Vehicle</a></li>
                        <li class="email gradient_button"><a href="forms/friend.php?recaptcha" class="fancybox_div">Email to a Friend</a></li>
                      
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 left-content padding-left-none"> 
                  
                    <div class="listing-slider">
                        <section class="slider home-banner">
                            <div class="flexslider" id="home-slider-canvas">
                                <ul class="slides">
                                    <li data-thumb="images/boxster1_slide.jpg"> <img src="images/cars/<?php echo $row['photo1'] ?>" alt="" data-full-image="images/boxster1.jpg" /> </li>
                                    <li data-thumb="images/boxster4_slide.jpg"> <img src="images/cars/<?php echo $row['photo2'] ?>" alt="" data-full-image="images/boxster4.jpg" /> </li>
                                    <li data-thumb="images/boxster5_slide.jpg"> <img src="images/cars/<?php echo $row['photo3'] ?>" alt="" data-full-image="images/boxster5.jpg" /> </li>
                                    <li data-thumb="images/boxster8_slide.jpg"> <img src="images/cars/<?php echo $row['photo4'] ?>" alt="" data-full-image="images/boxster8.jpg" /> </li>
                                    <li data-thumb="images/boxster10_slide.jpg"><img src="images/cars/<?php echo $row['photo5'] ?>" alt="" data-full-image="images/boxster10.jpg" /> </li>
                                    
                                    <li data-thumb="images/boxster2_slide.jpg"> <img src="images/cars/<?php echo $row['photo6'] ?>" alt="" data-full-image="images/boxster2.jpg" /> </li>
                                    <li data-thumb="images/boxster3_slide.jpg"> <img src="images/cars/<?php echo $row['photo7'] ?>" alt="" data-full-image="images/boxster3.jpg" /> </li>
                                    <li data-thumb="images/boxster6_slide.jpg"> <img src="images/cars/<?php echo $row['photo8'] ?>" alt="" data-full-image="images/boxster6.jpg" /> </li>
                                    <li data-thumb="images/boxster7_slide.jpg"> <img src="images/cars/<?php echo $row['photo9'] ?>" alt="" data-full-image="images/boxster7.jpg" /> </li>
                                    <li data-thumb="images/boxster9_slide.jpg"> <img src="images/cars/<?php echo $row['photo10'] ?>" alt="" data-full-image="images/boxster9.jpg" /> </li>
                                
                                </ul>
                            </div>
                        </section>
                        <section class="home-slider-thumbs">
                            <div class="flexslider" id="home-slider-thumbs">
                                <ul class="slides">
                                    <li data-thumb="images/thumbnail1.jpg"> <a href="#"><img src="images/cars/<?php echo $row['photo1'] ?>" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail2.jpg"> <a href="#"><img src="images/cars/<?php echo $row['photo2'] ?>" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail3.jpg"> <a href="#"><img src="images/cars/<?php echo $row['photo3'] ?>" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail4.jpg"> <a href="#"><img src="images/cars/<?php echo $row['photo4'] ?>" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail5.jpg"> <a href="#"><img src="images/cars/<?php echo $row['photo5'] ?>" alt="" /></a> </li>

                                    <li data-thumb="images/thumbnail6.jpg"> <a href="#"><img src="images/cars/<?php echo $row['photo6'] ?>" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail7.jpg"> <a href="#"><img src="images/cars/<?php echo $row['photo7'] ?>" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail8.jpg"> <a href="#"><img src="images/cars/<?php echo $row['photo8'] ?>" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail9.jpg"> <a href="#"><img src="images/cars/<?php echo $row['photo9'] ?>" alt="" /></a> </li>
                                    <li data-thumb="images/thumbnail10.jpg"> <a href="#"><img src="images/cars/<?php echo $row['photo10'] ?>" alt="" /></a> </li>
                                 
                                </ul>
                            </div>
                        </section>
                    </div>
                   
                    <div class="clearfix"></div>
                    <div class="bs-example bs-example-tabs example-tabs margin-top-50">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#vehicle" data-toggle="tab">Vehicle Overview</a></li>
                       
                            <li><a href="#technical" data-toggle="tab">Technical Specifications</a></li>
                      
                        </ul>
                        <div id="myTabContent" class="tab-content margin-top-15 margin-bottom-20">
                            <div class="tab-pane fade in active" id="vehicle">
                                <p><?php echo $row['ddesc'] ?></p>
                                
                            </div>
                            <div class="tab-pane fade" id="features">
                                <ul class="fa-ul">
                                    <li><i class="fa-li fa fa-check"></i> Adaptive Cruise Control</li>
                                    <li><i class="fa-li fa fa-check"></i> Airbags</li>
                                    <li><i class="fa-li fa fa-check"></i> Air Conditioning</li>
                                    <li><i class="fa-li fa fa-check"></i> Alarm System</li>
                                    <li><i class="fa-li fa fa-check"></i> Anti-theft Protection</li>
                                    <li><i class="fa-li fa fa-check"></i> Audio Interface</li>
                                    <li><i class="fa-li fa fa-check"></i> Automatic Climate Control</li>
                                    <li><i class="fa-li fa fa-check"></i> Automatic Headlights</li>
                                    <li><i class="fa-li fa fa-check"></i> Auto Start/Stop</li>
                                    <li><i class="fa-li fa fa-check"></i> Bi-Xenon Headlights</li>
                                    <li><i class="fa-li fa fa-check"></i> Bluetooth® Handset</li>
                                    <li><i class="fa-li fa fa-check"></i> BOSE® Surround Sound</li>
                                    <li><i class="fa-li fa fa-check"></i> Burmester® Surround Sound</li>
                                    <li><i class="fa-li fa fa-check"></i> CD/DVD Autochanger</li>
                                    <li><i class="fa-li fa fa-check"></i> CDR Audio</li>
                                    <li><i class="fa-li fa fa-check"></i> Cruise Control</li>
                                    <li><i class="fa-li fa fa-check"></i> Direct Fuel Injection</li>
                                    <li><i class="fa-li fa fa-check"></i> Electric Parking Brake</li>
                                    <li><i class="fa-li fa fa-check"></i> Floor Mats</li>
                                    <li><i class="fa-li fa fa-check"></i> Garage Door Opener</li>
                                    <li><i class="fa-li fa fa-check"></i> Leather Package</li>
                                    <li><i class="fa-li fa fa-check"></i> Locking Rear Differential</li>
                                    <li><i class="fa-li fa fa-check"></i> Luggage Compartments</li>
                                    <li><i class="fa-li fa fa-check"></i> Manual Transmission</li>
                                    <li><i class="fa-li fa fa-check"></i> Navigation Module</li>
                                    <li><i class="fa-li fa fa-check"></i> Online Services</li>
                                    <li><i class="fa-li fa fa-check"></i> ParkAssist</li>
                                    <li><i class="fa-li fa fa-check"></i> Porsche Communication</li>
                                    <li><i class="fa-li fa fa-check"></i> Power Steering</li>
                                    <li><i class="fa-li fa fa-check"></i> Reversing Camera</li>
                                    <li><i class="fa-li fa fa-check"></i> Roll-over Protection</li>
                                    <li><i class="fa-li fa fa-check"></i> Seat Heating</li>
                                    <li><i class="fa-li fa fa-check"></i> Seat Ventilation</li>
                                    <li><i class="fa-li fa fa-check"></i> Sound Package Plus</li>
                                    <li><i class="fa-li fa fa-check"></i> Sport Chrono Package</li>
                                    <li><i class="fa-li fa fa-check"></i> Steering Wheel Heating</li>
                                    <li><i class="fa-li fa fa-check"></i> Tire Pressure Monitoring</li>
                                    <li><i class="fa-li fa fa-check"></i> Universal Audio Interface</li>
                                    <li><i class="fa-li fa fa-check"></i> Voice Control System</li>
                                    <li><i class="fa-li fa fa-check"></i> Wind Deflector</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="technical">
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Engine</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Layout / number of cylinders</td>
                                            <td><?php echo $row['cylinders'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Top Speed</td>
                                            <td><?php echo $row['top_speed']?> kmph</td>
                                        </tr>
                                        <tr>
                                            <td>Mileage</td>
                                            <td><?php echo $row['mileageh'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Horespower</td>
                                            <td><?php echo $row['power'] ?> bhp</td>
                                        </tr>
                                        <tr>
                                            <td>Torque</td>
                                            <td><?php echo $row['torque'] ?> Nm</td>
                                        </tr>
                                        <tr>
                                            <td>Zero to Sixty</td>
                                            <td><?php echo $row['zer'] ?>s</td>
                                        </tr>
                                        <tr>
                                            <td>Ground Clearance</td>
                                            <td><?php echo $row['groundclearence'] ?> mm</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Performance</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Top Track Speed</td>
                                            <td><?php echo $row['topspeed'] ?> kmph</td>
                                        </tr>
                                        <tr>
                                            <td>0 - 60 mph</td>
                                            <td><?php echo $row['zerotosixty'] ?> s</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                              
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Fuel consumption</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>City (estimate)</td>
                                            <td><?php echo $row['mileagec'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Highway (estimate)</td>
                                            <td><?php echo $row['mileageh'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Body</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Length</td>
                                            <td><?php echo $row['Length'] ?> mm</td>
                                        </tr>
                                        <tr>
                                            <td>Width</td>
                                            <td><?php echo $row['Width'] ?> mm</td>
                                        </tr>
                                        <tr>
                                            <td>Height</td>
                                            <td><?php echo $row['groundclearence'] ?> mm</td>
                                        </tr>
                                        <tr>
                                            <td>Wheelbase</td>
                                            <td><?php echo $row['Wheelbase'] ?> mm</td>
                                        </tr>
                                  
                                        <tr>
                                            <td>Curb weight</td>
                                            <td><?php echo $row['Kerbweight'] ?> kg</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="technical">
                                    <thead>
                                        <tr>
                                            <th>Capacities</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Luggage compartment volume</td>
                                            <td><?php echo $row['bootcapacity'] ?> litres</td>
                                        </tr>
                                        <tr>
                                            <td>Fuel Tank Capacity</td>
                                            <td><?php echo $row['fuelcapacity'] ?> litres</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                     
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 right-content padding-right-none">
                    <div class="side-content">
                        <div class="car-info margin-bottom-50">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Body Style:</td>
                                            <td><?php echo $row['car_type'] ?></td>
                                        </tr>
                                  
                                        <tr>
                                            <td>TRANSMISSION:</td>
                                            <td><?php if( $row['transmisson']=="Both")
											{echo "Manual,Auto";}
else {echo $row['transmisson']; }										?></td>
                                        </tr>
                                        <tr>
                                            <td>Top Speed:</td>
                                            <td><?php echo $row['top_speed'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>No. of cylinders</td>
                                            <td><?php echo $row['cylinders'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colours</td>
                                            <td><?php echo $row['color'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Ground clearance:</td>
                                            <td><?php echo $row['groundclearence'] ?></td>
                                        </tr> 
                                        <tr>
                                            <td>DOORS:</td>
                                            <td><?php echo $row['doors'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Seating Capacity:</td>
                                            <td><?php echo $row['number_of_seats'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Boot Capacity:</td>
                                            <td><?php echo $row['bootcapacity'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Fuel Capacity:</td>
                                            <td><?php echo $row['fuelcapacity'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>FUEL MILEAGE:</td>
                                            <td><?php echo $row['mileagec'] ?> City / <?php echo $row['mileageh'] ?> Hwy</td>
                                        </tr>
                                        <tr>
                                            <td>FUEL TYPE:</td>
                                            <td><?php if( $row['fuel']=="Both")
											{echo "Petrol,Diesel";}
else {echo $row['fuel']; }										?></td>
                                        </tr>
                                 
                                         <tr>
                                            <td>WARRANTY:</td>
                                            <td>3 Years Limited</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="efficiency-rating text-center padding-vertical-15 margin-bottom-40">
                            <h3>Fuel Efficiency Rating</h3>
                            <ul>
                                <li class="city_mpg"><small>City MPG:</small> <strong><?php echo $row['mileagec'] ?></strong></li>
                                <li class="fuel"><img src="http://demo.themesuite.com/automotive/images/fuel-icon.png" alt="" class="aligncenter"></li>
                                <li class="hwy_mpg"><small>Hwy MPG:</small> <strong><?php echo $row['mileageh'] ?></strong></li>
                            </ul>
                            <p>Actual rating will vary with options, driving conditions,
                                driving habits and vehicle condition.</p>
                        </div>
                 
                        <div class="clearfix"></div>
                        <div class="financing_calculator margin-top-40">
                            <h3>FINANCING CALCULATOR</h3>
                            <div class="table-responsive">
                                <table class="table no-border no-margin">
                                    <tbody>
                                        <tr>
                                            <td>Cost of Vehicle ($):</td>
                                            <td><input type="text"  class="number cost" placeholder="10000" /></td>
                                        </tr>
                                        <tr>
                                            <td>Down Payment ($):</td>
                                            <td><input type="text"  class="number down_payment" placeholder="1000" /></td>
                                        </tr>
                                        <tr>
                                            <td>Annual Interest Rate (%):</td>
                                            <td><input type="text"  class="number interest" placeholder="7" /></td>
                                        </tr>
                                        <tr>
                                            <td>Term of Loan in Years:</td>
                                            <td><input type="text"  class="number loan_years" placeholder="5" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bi_weekly clearfix">
                                <div class="pull-left">Frequency of Payments:</div>
                                <div class="dropdown_container ">
                                    <select class="frequency css-dropdowns">
                                        <option value='0'>Bi-Weekly</option>
                                        <option value='1'>Weekly</option>
                                        <option value='2'>Monthly</option>
                                    </select>
                                </div>
                            </div>
                            <a class="btn-inventory pull-right calculate">Calculate My Payment</a>
                            <div class="clear"></div>
                            <div class="calculation">
                                <div class="table-responsive">
                                    <table>
                                        <tr>
                                            <td><strong>NUMBER OF PAYMENTS:</strong></td>
                                            <td><strong class="payments">60</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong>PAYMENT AMOUNT:</strong></td>
                                            <td><strong class="payment_amount">Rs. 89.11</strong></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        
            <div class="clearfix"></div>
        </div>
    </div>
  
</section>

<div class="clearfix"></div>


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
 <script src="js/retina.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?ver=4.1"></script> 
<script type="text/javascript" src="js/jquery.fancybox.js"></script> 
<script src="js/modernizr.custom.js"></script> 
<script src="js/social-likes.min.js"></script><script defer src="js/jquery.flexslider.js"></script> 
<script src="js/jquery.bxslider.js" type="text/javascript"></script> 
<script src="js/jquery.selectbox-0.2.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.mousewheel.js"></script> 
<script type="text/javascript" src="js/jquery.easing.js"></script>
</body>
</html>