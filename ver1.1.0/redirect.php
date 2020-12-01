<?php
            session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php 
       
        $link = mysqli_connect("localhost", "root", "", "reservation");

       
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <title>Book Now</title>
    <link rel="icon" type="image/png" href=".png">
</head>

<body style="background-color: #BDC3C7">

    <nav class="navbar navbar-expand-md navbar-custom navbar-dark fixed-top show-on-scroll " style="border-bottom: 5px solid black;">
		<div class="container-fluid " id="navbarResponsive">

			<div class="header_content ">
				<div class="logo">
					<a href="#">
						<div style="font-size: 30px;line-height: 0.75;color: #FFFFFF;font-family: 'PT Sans Narrow', sans-serif;">The Venue</div>
						<div style="font-size: 12px;text-transform: uppercase;color: #FFFFFF;letter-spacing: 0.680em;line-height: 0.75;margin-top: 12px;">restaurant</div>
					</a>
				</div>
			</div>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" >
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto" style="padding-left:10px;">
		
			<li class="nav-item active" style="padding-right:15px;">
			  <a class="nav-link" href="index.php">HOME</a>
			</li>
			<li class="nav-item" style="padding-right:15px">
			  <a class="nav-link" href="booking.php">RESERVATION</a>
			</li>
		   <li class="nav-item" style="padding-right:15px" >
			  <a class="nav-link" href="order.php" >MENU</a>
			</li>
		   <li class="nav-item" style="padding-right:15px">
			  <a class="nav-link" href="gal.php">GALLERY</a>
			</li>
		   <!--<li class="nav-item" style="padding-right:15px">
				  <a class="nav-link" href="customerlogin.php" >LOG IN</a>
				</li>
				<li class="nav-item" style="padding-right:15px">
					<a class="nav-link" href="#" >CART</a>
				  </li>-->
			  </ul>
			</div>
			</div>
			</nav>
			
            
            <div class="para2">
                <div class="caption">
                    <span class="text-block" style="font-size:4vw;"><b>R</b>ESER<b>V</b>ATI<b>O</b>N</span>
                </div>
            </div>
    </div>  
    
    <div style="height:200px;background-color:#BDC3C7"></div> 

    

    
    <div class="container">
        <div class="row" >
            <div class="span4">
            <br><br>
                <p><em>WE HAVE SUCCESSFULLY RESERVED A TABLE FOR YOU</em></p>
                <br><br><h2>DAYS OPEN</h2>
                <p>MONDAY - FRIDAY</p>
                <p>Events Conducted Usually On Sunday's</p>
                <p>WEDNESDAY SPECIAL<br><br>ONE ITEM IS ON US<br><br></p>
            </div>
            <div class="span8">
                <img src="https://images.unsplash.com/photo-1602232037779-30b01ac3c457?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" style="opacity:1px;height:500px;width:450px">

            </div>
        </div><br><br><br>
    </div>  
    
    <div style="height:100px;background-color:#BDC3C7">
        <form  action="" method="POST">
            <div class="content" style="text-align:center;background-color:black;height:100px;margin:10px 200px 100px 200px;padding-bottom:100px">
                <span style="text-align:center;letter-spacing:2px;color:white">If You Want To Cancel Your Booking Enter The ID Provided In Your Mail</span><br><br>
                <input placeholder="ENTER ID" type="text" name="id" class="id" required >
                <button type="submit" value="submit" name="submit" class="btn"style="padding-top:0px">Cancel</button>
                <?php
                                
                                        if(isset($_POST['submit'])){
                                        
                                            
                                            $ID = $_POST['id'];
                                            $ID = mysqli_real_escape_string($link,$_POST['id']);
                                        
                                            $query="DELETE FROM bookingtable WHERE bookingID='$ID';";
                                            $result = mysqli_query($link, $query); 
                                            echo"<script>alert('This booking is SUCCESSFULLY cancelled')</script>";
                                        }    
                ?>                            
            </div>
        </form> 
    </div> 
    
    <br><br><br>
    <p style="background-color: white;color:black;text-align: center;letter-spacing: 2px;">Kindly be present 5 minutes before the reservation time</p>
     <footer>
        <br><br><br>
        <div class= "no-gutters" id="footer" style="text-align: center;padding-top: 7%;background-color:black;color:white;letter-spacing: 2px;font-size: small;">
    
                        <div class="container">
                            <div class="row">
                            <div class="col-md-4 fadeInUp ">
                            <div class="media d-block text-center block-6 services">
                            <div class="d-flex justify-content-center align-items-center mb-5">
                                <B>VISIT US</B>
                            </div>
                            <div class="media-body">
                                Kamala Mills Compound, Lower Parel,<br>Mumbai, Maharashtra 400013
                                </div>
                            </div>
                            </div>
                    
                            <div class="col-md-4 fadeInUp">
                            <div class="media d-block text-center block-6 services">
                            <div class="d-flex justify-content-center align-items-center mb-5">
                                <b>OPENING HOURS</b>
                            </div>
                            <div class="media-body">
                                Monday to Sunday, 10am - 1am<br>For reservations call +917715963030<br>Or +918451011124
                                </div>
                            </div>
                            </div>
                    
                            <div class="col-md-4 fadeInUp">
                            <div class="media d-block text-center block-6 services">
                            <div class="d-flex justify-content-center align-items-center mb-5">
                            <b>OUR HISTORY</b>
                            </div>
                            <div class="media-body">
                                Since 1995 <br>First Restaurant opened in Lower Parel 
                            </div>
                            </div>
                            </div>
                            </div>
                            <br><br>
                            <div style="display: grid;">
                                <div style="grid-column:1;grid-row:1;">© 2020, The Venue</div>
                                <div style="grid-column:2;float: right;">Designed by Divhya, Lakshmi and Mansi</div>
                            </div>
                            
                        </div><br><br>
                    </div>
     </footer>  
     <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script> 
     <script src="scripts/jquery-3.3.1.min.js "></script>
        <script src="scripts/script.js "></script>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    
</body>
</html>