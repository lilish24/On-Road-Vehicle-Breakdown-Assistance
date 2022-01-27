<?php      
    include('connection.php');                          

    $userid = $_POST['userid']; 
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $email= $_POST['email'];
    $location= $_POST['location'];
    $password = $_POST['password'];  
    $confirmpassword =$_POST['confirmpassword'];
      
        //to prevent from mysqli injection  
        $userid = stripcslashes($userid);  
        $username  = stripcslashes($username);
        $mobile = stripcslashes($mobile);
        $email = stripcslashes($email);
        $location = stripcslashes($location);
        $password = stripcslashes($password); 
        $userid = mysqli_real_escape_string($con, $userid); 
        $username = mysqli_real_escape_string($con, $username);
        $mobile = mysqli_real_escape_string($con, $mobile);
        $email = mysqli_real_escape_string($con, $email);
         $location = mysqli_real_escape_string($con, $location);
        $password = mysqli_real_escape_string($con, $password);  
            
                    if($password    == $confirmpassword )
            {
                     $Select = "SELECT userid FROM mechregister WHERE userid = ? LIMIT 1";

                    $sql = "INSERT INTO mechregister(userid, username, mobile, email,location, password) values('$userid','$username', '$mobile','$email','$location','$password')"; 
                            if (mysqli_query($con, $sql))
                {
               echo'<script>alert("Congratulation,your account has been created. Please login in")</script>';
                }
                        else
            {
                echo'<script>alert("please try another id")</script>';
            }
        }
    else
        {
            echo'<script>alert("invalid password")</script>';
        }
    
  
?>  