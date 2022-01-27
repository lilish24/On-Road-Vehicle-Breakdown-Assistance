<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" type="text/css" href="style.css">
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Find Your Mechanic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="userstyle.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-image: url(b1.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img src="logofinal.png" height="150" width="150" style="  margin-top:   -75px "  ></a>
    </div>
<ul class="nav navbar-nav" style="float:right ;">

        <li><a href="#pricelist">Price List</a></li>
         <li><a href="#contact">Contact</a></li>
         <li><a href="#contact">Feedback</a></li>
         <li><a href="home.php">Logout</a></li>
  </div>

      </li>
        </ul>
      </a>
    </li>
  </ul>
</div>
</div>
</nav>

<!-- contact to mechanic-->
<div class="container">
<div style="max-height: 40%;max-width:40%;margin-top: 10%;margin-left:30%">
 <h2 style="text-align: center; color:black;background-color: #00B0F0  ">Select Location And Vehicle Type</h2></div>
  <form name= form1 id=frm action="mechdetails.php" onsubmit ="myFucntion()"class=form1 method="post" style="border:2px solid;
  max-width: 50%;
  max-height:   40%;
  font-size:  25px;
  text-align: center;
  word-spacing: 2px; 
  align-content: center;
  margin:40px 40px 40px 290px;
  padding-top: 10px;
  padding-bottom:   10px;
background-color:  skyblue;
  color:black;"
  >

    <!-- selecting location-->
  <label for="location" style="margin-top: 10px">Select Location</label>
<select name="location" id="location" class="location" required=" ">
  <option value="">choose Location
    <option value="Pune">Pune
    <option value="Pimpri">Pimpri
      <option valu="Chinchwad">Chinchwad
   </option></option></option></select><br>
<label for="vehicle"style="margin-top: 10px">Select Vehicle-Type</label>
<select name="vehicle" id="vehicle" class="location" required=" ">
  <option value="">choose Vehicle Type
    <option value="2-Wheeler">2-Wheeler
    <option value="4-Wheeker">4-Wheeler
   </option></option></select><br>
<input type="submit"  value="select" style="border-radius:  10%;background-color:   black;color:  white ;margin-top: 30px"/>
 </form>
  </div>
    </div>
  </div>
</nav>
</option>
</select>
</option>
</select>
</form>
</div>
<script>
 function myFunction(){
	var e = document.getElementById("location");
	var loc = e.options[e.selectedIndex].value;
	var loc1 = e.options[e.selectedIndex].text;
	var v = document.getElementById("vehicle");
	var vah = v.options[v.selectedIndex].value;
	var vah1 =v.options[e.selectedIndex].text;

	if(loc==0){
	  alert("Please select a location");
	}else{
		if (vah==0){
			alert("please select a vehicle type");
		}
	}

}
</script>
<!-- Container (Price list Section) -->
<div id="pricelist" class="bg-1">
  <div class="container" style="margin-top: 20%;">
    <h3 class="text-center">Price List</h3>
   <table id="pricelist">
  <tr>
    <th>Service</th>
    <th>Price</th>  
  </tr>
  <tr>
    <td>Engine Oil 3.2Litre </td>
    <td>Rs.1600</td>  
  </tr>
  <tr>
    <td>Oil Filter</td>
    <td>350</td>   
  </tr>
  <tr>
    <td>Cabin Ac Filter</td>
    <td>350</td> 
  </tr>
  <tr>
    <td>Air Filter</td>
    <td>350</td>
  </tr>
  <tr>
    <td>Collant Replacement 6.5 LIter</td>
    <td>850</td>
  </tr>
  <tr>
    <td>Break Fuild - Top up /500 ml- DOT3 Brake Fluid</td>
    <td>360</td>
  </tr>
  <tr>
    <td>Great Transmission Oil- 2.5 Litre</td>
    <td>1000</td>
  </tr>
  <tr>
    <td>Disel Fuel Filter</td>
    <td>1600</td>
  </tr>
  <tr>
    <td>Wheel Alignment, Wheel Balancing, Tyre Rotation</td>
    <td> 900</td>
  </tr>
  <tr>
    <td>Egr Valve Cleaning And Intercooler Cleaning</td>
    <td>3000</td>
    </tr>
  <tr>
    <td>Throttle Body Cleaning </td>
    <td>250</td>
    </tr>
  <tr>
    <td>Ac Disinfectant</td>
    <td>750</td>
     </tr>
  <tr>
    <td>Ac Disinfectant</td>
    <td>750</td>
  </tr>
</table>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container1" style="background-image: url(b2.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
  <h1 class="text-center" style="color:white;background-color: #00B0F0;">FEEDBACK</h1>
  <h2 class="text-center" style="color:black;background-color: yellow"><em>We love our Customers!</em></h2>

  <div class="row" >
    <div class="col-md-4" style="color:white;font-size:20px">
      <p>Give us feedback.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Pune, India</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: 9066993399</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: FindYourMechsupport@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">

          <form name="contact" action="feedbacksubmit.php" onsubmit="" method="post"> 
          <input class="form-control" id="name" name="name" placeholder="Enter Your Name" type="text" required >
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Enter Email ID" type="email" required>
        </div>

        <div class="col-sm-6 form-group">
          <input class="form-control" id="mechname" name="mechname" placeholder="Enter Mechanic name" type="text" required>
        </div>

        <div class="col-sm-6 form-group">
          <input class="form-control" id="location" name="location" placeholder=" Enter Location" type="text" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Enter Feedback" rows="5"></textarea>
      <br>
       <label class="radio-inline"style="color:white;font-size: 20px;"><input type="radio" name="experience" value="bad">Bad</label>
        <label class="radio-inline"style="color:white;font-size: 20px;"><input type="radio" name="experience" value="bad">Average</label>
        <label class="radio-inline"style="color:white;font-size: 20px;"><input type="radio" name="experience" value="bad">Good</label>
      <div class="row">
        <div class="col-md-12 form-group">
         <button class="btn btn-info"  type="submit" style=" background-color: #00B0F0;width:50%;height:80%; margin-left: 30%">Send</button>
          <script type="text/javascript">
            function myresponse()
            {
            
              alert("we will contact you soon,Thank you");
            }
          </script>
</div>
</div>
</form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
  
<footer class="text-center" style="background-color: black">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
    <br><br>
    Get connected with us on social networks!
    <div class="container">
      
       <button class="facebook" style="height: 30;width:30;border: none; border-radius: 00 px"><i class="fa fa-facebook"><a href="https.www.facebook.com"><img src="fb.png" height="30"width="30"> </a> </i></button>

              <button class="twitter" style="border: none; border-radius: 00 px;height: 30;width:30"><i class="fa fa-twitter"><a href="https://www.twitter.com">  <img src="tw.png" height="30"width="30"> </i></a></button>
			  <button class="google" style="height: 30;width:30;border: none; border-radius: 00 px"><i class="fa fa-google-plus"><a href="https://www.instagram.com">  <img src="insta.png" height="30"width="30"> </i></a></button>

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-white text-md-left mb-4 mb-md-0">
          <h6 class="mb-0"></h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-center">
		
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row-->
  <p>copyright @Find your mechanic </p> 
</footer>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
</body>
</head>
</html>
