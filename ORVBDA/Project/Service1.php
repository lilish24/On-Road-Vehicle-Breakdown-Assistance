<!DOCTYPE HTML>
<html lang="en">
	<head>
		<h1 class="text-center">Service Form</h1>
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

	  	form {
             background-color: lightgrey;
             width: 600px;
             border: 15px solid green;
             padding: 50px;
             margin: auto;
             

}
     </style>

	 </head>
<body>
	<form action="insertservice.php" method="post"/>
 <center>User&nbsp&nbsp&nbsp&nbspID:<input type="text-center" ID="UserID" name="userid" size=auto required></center><br/>
 <center>Mechanic Name:<input type="text-center" name="username"size=auto required></center><br/>
  <center>MobileNo:<input type="text-center"name="mobile"size=auto required></center>
  <br/>
  
 <center>
 
  <label for="Location">Location:</label>
  <select name="location" id="location">
    <option value="select Location">Select Location</option>
   	<option value="pune">Pune</option>
    <option value="pimpri">Pimpri</option>
    <option value="chinchwad">Chinchwad</option>
    
  </select>
  <br><br>
</center>
  <Label>Price List</Label>
      </div>
    </div>
    
	<input type="checkbox" name="choice[]" value="Engine Oil 3.2ltr,price:1600Rs "/>Engine Oil 3.2ltr,price:1600Rs <br/>
	<input type="checkbox" name="choice[]" value="Oil Filter,price:350Rs"/>Oil Filter,price:350Rs<br/>
	<input type="checkbox" name="choice[]" value="Cabin Ac Filter,price:350Rs"/>Cabin Ac Filter,price:350Rs<br/>
	<input type="checkbox" name="choice[]" value="Air Filter,price:350Rs"/>Air Filter,price:350Rs <br/>
	<input type="checkbox" name="choice[]" value="Collant Replacement Filter,price:850Rs"/>Collant Replacement Filter,price:850Rs<br/>
	<input type="checkbox" name="choice[]" value="Break Fuild Topup/500ml-DOT3 Break Fluid,price:360Rs"/>Break Fuild Topup/500ml-DOT3 Break Fluid,price:360Rs<br/>
	<input type="checkbox" name="choice[]" value="Great Transmissin oil-2.5ltr,price:1000Rs"/>Great Transmissin oil-2.5ltr,price:1000Rs <br/>
	<input type="checkbox" name="choice[]" value="Disel Fuel Filter,price:1600Rs"/>Disel Fuel Filter,price:1600Rs<br/> 
	<input type="checkbox" name="choice[]" value="Wheel Alignment,Wheel Balancing,Tyre Rotation,price:900Rs"/>Wheel Alignment,Wheel Balancing,Tyre Rotation,price:900Rs<br/>
	<input type="checkbox" name="choice[]" value="Egr Valve Cleaning And Inter Cooler Cleaning,Price:3000Rs "/>Egr Valve Cleaning And Inter Cooler Cleaning,Price:3000Rs <br/>
	<input type="checkbox" name="choice[]" value="Throtal Body Cleaning,price:250Rs"/>Throtal Body Cleaning,price:250Rs<br/>
	<input type="checkbox" name="choice[]" value="Ac Disinfectant,price:750Rs"/>Ac Disinfectant,price:750Rs<br/>
	<center><button class="bottom" type="submit" onclick="">Submit</button></center>
</form>
<br>
</form>