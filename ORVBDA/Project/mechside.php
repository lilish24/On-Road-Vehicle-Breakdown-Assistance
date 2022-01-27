<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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
 <link rel="stylesheet" type="text/css" href="style.css">
  <style>

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">


<body>
<nav class="navbar navbar-default navbar-fixed-top"> 
<div class="container-fluid"> 
  <div class="navbar-header"> 
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
    </button>
    <a class="navbar-brand" href="#myPage"><img src="logofinal.png" height="150" width="150" style="  margin-top:   -75px "  ></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="float:right">
      <ul class="nav navbar-nav navbar-right">
  <ul class="nav navbar-nav navbar-right">
  </ul>
    </li>
    <ul class="nav navbar-nav navbar-left">
      
      <li><a href="#pricelist">Price List</a></li>
      <li><a href="#contact">Contact </a></li>
      <li><a href="Service1.php">Service Form</a></li>
      <li><a href="home.php">Logout</a></li>
      <li class="dropdown show"> <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown"> 
      </li>
      </ul></div>
    
  </ul>
</div></div>
</nav> 



<!-- pic section (The Band Section) -->
<div class="row" style="margin-top: 10%;margin-left: 10%">
    <div class="col-sm-4">
     
      <a href="#demo" data-toggle="collapse">
        <img src="1.jfif" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      
    </div>
    <div class="col-sm-4">
      
      <a href="#demo2" data-toggle="collapse">
        <img src="2.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      
    </div>
    <div class="col-sm-4">
     
      <a href="#demo3" data-toggle="collapse">
        <img src="3.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <br>
        <br>
        <br>  
        <br>
        <br>
    </div>
  </div>
</div>

<!-- Container (Price list Section) -->
<div id="pricelist" class="bg-1"> 
  <div class="container"> 
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
<!-- Container (Contact Section) -->
<div id="contact" class="container1"> 
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>Thanks For Choosing us</em></p>
  <div class="row"> 
    <div class="col-md-4"> 
      <p>Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Pune, India</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: 9066993399</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: FindYourMechsupport@mail.com</p>
    </div>
    <div class="col-md-8"> <div class="row"> <div class="col-sm-6 form-group"> 
      <form name="contact" action="contactinsert.php" method="post">
        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required></div> 
        <div class="col-sm-6 form-group"> 
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div></div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
        <br>
        <div class="row"> 
          <div class="col-md-12 form-group"> 
            <button class="btn pull-right" type="submit" onclick="myresponse()">Send</button>
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
</div></div>
</div> 


<!-- Footer -->
  
<footer class="text-center" style="background-color: black">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
    <br><br>
    Get connected with us on social networks!
    <div class="container">
      
       <button class="facebook" style="height: 50;width:50;border: none; border-radius: 00 px"><i class="fa fa-facebook"><a href="https://www.facebook.com"> <img src="fb.png" height="30"width="30">  </i></a></button>

              <button class="twitter" style="border: none; border-radius: 00 px;height: 50;width:50"><i class="fa fa-twitter"><a href="https://www.twitter.com">  <img src="tw.png" height="30"width="30"> </i></a></button>



              <button class="google" style="height: 50;width:50;border: none; border-radius: 00 px"> <i class="fa fa-google-plus"><a href="https://www.instagram.com">  <img src="insta.png" height="30"width="30"> </i></a></button>

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

</div>
</a>
</footer>

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
</html>
  </body>
</html>