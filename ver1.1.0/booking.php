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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <title>Book Now</title>
    <link rel="icon" type="image/png" href=".png">

</head>

<body data-spy="scroll" data-target="#navbarResponsive" style="background-color: black;overflow-x: hidden;width: 100%;margin-left: 0%;margin-right:0%">

            <nav class="navbar navbar-expand-md navbar-custom navbar-dark fixed-top show-on-scroll " style="border-bottom: 5px solid black;">
		<div class="container-fluid " id="navbarResponsive">

			<div class="header_content ">
				<div class="logo">
					<a href="#">
						<div style="font-size: 33px;line-height: 0.75;color: #FFFFFF;font-family: 'PT Sans Narrow', sans-serif;">The Venue</div>
						<div style="font-size: 14px;text-transform: uppercase;color: #FFFFFF;letter-spacing: 0.680em;line-height: 0.80;margin-top: 12px;">restaurant</div>
					</a>
				</div>
			</div>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto" style="padding-left:10px;">
		
			<li class="nav-item" style="padding-right:15px;">
			  <a class="nav-link" href="index.php">HOME</a>
			</li>
			<li class="nav-item active" style="padding-right:15px">
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

    <div class="table" style="height:650px;background-color:#BDC3C7">

            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators my-4">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block mx-auto w-200" src="https://i.pinimg.com/474x/36/f5/2a/36f52acc4b336e022f8aec8cede267f9.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block ">
                                <b>  <p style="margin-top:30px;color:black;letter-spacing:2px">FORMAL TABLE</p></b>
                            </div>
                        </div>
                            <div class="carousel-item ">
                                <img class="d-block mx-auto w-200" src="https://i.pinimg.com/474x/91/44/73/914473afc97ecc03b52ed7666cba553c.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block ">
                                    <p style="margin-top:30px;color:white;letter-spacing:2px">CASUAL TABLE</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block mx-auto w-200" src="https://i.pinimg.com/564x/5e/80/67/5e80676efdb6e92a3054c0c41ad69021.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block ">
                                    <p style="margin-top:30px;color:white;letter-spacing:2px">OUTDOOR TABLE</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block mx-auto w-200" src="https://i.pinimg.com/474x/80/3f/6f/803f6f54cc5f005abd3009696f35fcc6.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block ">
                                    <p style="margin-top:30px;color:white;letter-spacing:2px">PRIVATE TABLE</p>
                                </div>
                            </div>
                        
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <br><br><br><center>
        <p style="letter-spacing:2px;font-size:17px">FORMAL   CASUAL   OUTDOOR   PRIVATE<br>TABLES</p></center>    
        <br><br><br><br>
      <!--  <p style="font-size:30px;background-color:white;">RESERVE YOUR TABLE HERE</p></center>-->
    </div>
        
        <div style="height:100px;background-color:black"></div>   





        <section class="Form my-4 mx-5">
            <div class="container" style="width:">
                
                <div class="row no-gutters">
                
                   
                    <div class="col-md-5"><img src="https://i.pinimg.com/564x/b4/ef/22/b4ef223f5092332662348b3362f7dbfa.jpg" class="img-fluid"> </div>
                    <div class="col-md-7">   
                        <form  action="" method="POST">
                            <div class="form-row"> 
                                <div class="col-md-7 mx-5 my-2 p-5">
                                           
                                <input placeholder="First Name" type="text" name="fName" id="name" required class="form-control my-3 p-1">
                                
                                <input placeholder="Last Name" type="text" name="lName"  class="form-control my-3 p-1">
                                
                                <input placeholder="Phone Number" type="text" name="pNumber" id="phone" required class="form-control my-3 p-1">

                                <input placeholder="Email" type="email" name="email" id="email" class="form-control my-3 p-1">
                               
                                <select name="t_type" required class="form-control my-3 p-1">   
                                    <option value="" disabled selected>BOOKING TYPE</option>
                                    <option value="Formal">Formal</option>
                                    <option value="Casual">Casual</option>
                                    <option value="Outdoor">Outdoor</option>
                                    <option value="Private-Room">Private Room</option>
                                </select>

                                <select name="num_p" required class="form-control my-3 p-1">
                                    <option value="" disabled selected>NUMBER OF PEOPLE</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="6">6</option>
                                    <option value="10">10</option>
                                </select>

                                <select name="date" required class="form-control my-3 p-1">
                                    <option value="" disabled selected>DATE</option>
                                    <option value="3-12-2020">December 3,2020</option>
                                    <option value="4-12-2020">December 4,2020</option>
                                    <option value="5-12-2020">December 5,2020</option>
                                    <option value="7-12-2020">December 7,2020</option>
                                    <option value="8-12-2020">December 8,2020</option>
                                </select>
                                
                             
                                <select name="hour" required class="form-control my-3 p-1">
                                    <option value="" disabled selected>TIME</option>
                                    <option value="09-00">09:00 AM</option>
                                    <option value="12-00">12:00 AM</option>
                                    <option value="15-00">03:00 PM</option>
                                    <option value="18-00">06:00 PM</option>
                                    <option value="21-00">09:00 PM</option>
                                    <option value="24-00">12:00 PM</option>
                                </select>

                            

                                <button type="submit" value="submit" name="submit" class="btn1 my-3 p-1" >Book a Table</button>
                                <?php
                                $fNameErr = $pNumberErr= "";
                                $fName = $pNumber = "";$error='';
                        
                                if(isset($_POST['submit'])){
                                
                                    
                                    $fName = trim($_POST['fName']);
                                    $lName = $_POST['lName'];

                                    if(strlen($fName)<=2)
                                    {
                                        $error .='Name should be more than 2 characters';
                                    }
                                    
                                    if(!preg_match('/^[a-z ]+$/i', $fName)) {
                                        $error .= 'Name missing or incorrect<br>';
                                    }     
                        
                                    $pNumber = trim($_POST['pNumber']);
                                     
                                    if ($error) {
                                        echo $error;       
                                    }
                                   else{
                                    $type = mysqli_real_escape_string($link,$_POST['t_type']);
                                    $peopl = mysqli_real_escape_string($link,$_POST['num_p']);
                                    $dat=mysqli_real_escape_string($link,$_POST['date']);
                                    $time=mysqli_real_escape_string($link,$_POST['hour']);
                                    $query="SELECT bookingType,numPeople FROM bookingtable WHERE bookingType='$type' and numPeople='$peopl' and bookingDate='$dat' and bookingTime='$time'";
                                    $result = mysqli_query($link, $query); 
                                    if(mysqli_num_rows($result)>0){
                                        while($row=  mysqli_fetch_assoc($result)){
                                            echo"<script>alert('This table is already BOOKED. Please Select some other date or time!')</script>";
                                            
                                        }
                                           
                                    }
                                    

                                    else{

                                        $myuid = uniqid('la');
                                       
                                        $insert_query = "INSERT INTO 
                                    bookingtable (  bookingID,
                                                    bookingType,
                                                    numPeople,
                                                    bookingDate,
                                                    bookingTime,
                                                    bookingFName,
                                                    bookingLName,
                                                    emailID,
                                                    bookingPNumber
                                                   
                                                    )
                                    VALUES (        
                                                    '$myuid',
                                                    '".$_POST["t_type"]."',
                                                    '".$_POST["num_p"]."',
                                                    '".$_POST["date"]."',
                                                    '".$_POST["hour"]."',
                                                    '".$_POST["fName"]."',
                                                    '".$_POST["lName"]."',
                                                    '".$_POST["email"]."',
                                                    '".$_POST["pNumber"]."')";
                                                  
                                    mysqli_query($link,$insert_query);    
                                    
                                    $uemail= $_POST['email'];
                                    $uname= $_POST['fName'];
                                    $udate= $_POST['date'];
                                    
                                    $to_email = "$uemail";
                                    $subject = "FINE DINING";
                                    $body = "Hi, $uname you have booked a table at FINE DINING on $udate.Thank you for being with us $uname! Have a great day!
                                    If you would like to cancel your booking here's your ID  $myuid .";
                                    $headers = "From: thevenue@gmail.com";

                                    if (mail($to_email, $subject, $body, $headers)) {
                                    echo "<script>  alert ('Hey! $uname your table has been booked successfully !');window.location.href='redirect.php'</script>";
                                      } 
                                    else {
                                        echo "<script>alert('failed to register...');</script>";
                                        }
                                    
    
                                    }
                                }  
                                }
                                ?> 
                                 
                                
                            </form>
                        </div>
                                             
                </div>
            </div>
        </section> 
        <div style="height:100px;background-color:black"></div>   
         
        <div class="content" style="text-align:center;background-color:white">
            <br><br><br><br><br>  
            <h2 style="font-size:;">EVENTS AT LAS FELICITE</h2><br><br>
            <div class="mask">
              <p><u>EVENT COMING UP</u></p>
              <p>Masquerade Ball</p>
              <p>Magical Menu Lined Up For You</p><br>
              <p> MASKS WILL BE AVAILABLE AT THE VENUE</p> <br>
              <p>See the Magic Happen at<br> 8PM<br> 5th December</p>
            </div>
        </div>    
        
        <div class= "footer" id="footer" style="text-align: center;padding-top: 5%;font-size: 20px;background-color:black;color:white;">

<div class="container">
    <div class="row" style="background-color:black;color:white;">
    <div class="col-md-3 fadeInUp ">
    <div class="d-block text-center block-7 ">
    <div class="d-flex justify-content-center align-items-center mb-5">
        <B>VISIT US</B>
    </div>
    <div class="media-body">
        Kamala Mills Compound,<br> Lower Parel,<br>Mumbai, Maharashtra 400013
        </div>
    </div>
    </div>

    <div class="col-md-3 fadeInUp">
    <div class="d-block text-center block-7 ">
    <div class="d-flex justify-content-center align-items-center mb-5">
        <b>OPENING HOURS</b>
    </div>
    <div class="media-body">
        Dine-in; Monday-Sunday<br>Lunch: 12pm – 4pm<br>Dinner: 7pm – 10pm 
        </div>
    </div>
    </div>

    <div class="col-md-3 fadeInUp">
        <div class="d-block text-center block-7">
        <div class="d-flex justify-content-center align-items-center mb-5">
            <b>DELIVERY</b>
        </div>
        <div class="media-body">
            Monday – Thursday <br>12pm – 10pm<br>Friday – Sunday <br> 12pm – 10.30pm
            </div>
        </div>
        </div>

        <div class="col-md-3 fadeInUp">
            <div class="d-block text-center block-7">
            <div class="d-flex justify-content-center align-items-center mb-5">
                <b>GENERAL ENQUIRIES</b>
            </div>
            <div class="media-body">
                Call +919876543210,<BR>+911234567890,<br>+919876543210
                </div>
            </div>
            </div>
        
    </div>
    <br><br>
    <!--<a href="#" style="color: #77724b;"><i class="fab fa-facebook" style="font-size: 50px;margin-right: 30px;"></i></a>
    <a href="#" style="color: #77724b;"><i class="fab fa-instagram" style="font-size: 50px;margin-right: 30px;"></i></a>
    <a href="#" style="color: #77724b;"><i class="fab fa-twitter" style="font-size: 50px;"></i></a>-->
    <br><br>
    <div style="display: grid;">
      <div style="grid-column:1;grid-row:1;">© 2020, The Venue</div>
          <div style="grid-column:2;float: right;">Designed by Divhya, Mansi and Lakshmi</div>
    </div>
    <br><br>
</div>
</div>
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
