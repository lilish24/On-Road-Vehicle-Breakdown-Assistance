<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="loginstyle.css"> 
</head>

<body style="background-image:url('wall2.jpg'); background-repeat:  no-repeat;background-size:  120%">
<div id="myForm">
    
  <form  class="form-container" method="post"  action = "loginconnection.php" onsubmit = "validation()" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); float:right; margin-right:   5%;margin-top:  5%;margin-bottom:   5%; border:none;    " >
    <h1> Mechanic Login</h1>

    <label for="ID"><b>Mechanic Id</b></label>
    <input type="text" placeholder="Enter Licence ID" name="userid" id="userid" required>

    <label for="password"><b>Password</b></label>

    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <button type="submit" class="btn" name="btn" style="color: white;text-decoration: none;">Login</a></button>

    <button type="button" class="btn RegistrationForm" name=notregister><a href="regform.php" style="color: white;text-decoration: none;">Dont have Account?RegisterNow</a></button>

    <button type="button" class="btn cancel"><a href="home.php" style="color: white;text-decoration: none;">Close</a></button><br>

    <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
     
  </form>
</div>
</body>
</html>


        <script>  
            function validation()  
            {  
                var id=document.f1.userid.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  