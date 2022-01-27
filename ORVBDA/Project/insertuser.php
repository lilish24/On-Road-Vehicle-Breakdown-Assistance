<?php      
    include('connection.php');                          

    $userid = $_POST['userid']; 
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $email= $_POST['email'];
    $password = $_POST['password'];  
    $confirmpassword =$_POST['confirmpassword'];
      
        //to prevent from mysqli injection  
        $userid = stripcslashes($userid);  
        $username  = stripcslashes($username);
        $mobile = stripcslashes($mobile);
        $email = stripcslashes($email);
        $password = stripcslashes($password); 
        $userid = mysqli_real_escape_string($con, $userid); 
        $username = mysqli_real_escape_string($con, $username);
        $mobile = mysqli_real_escape_string($con, $mobile);
        $email = mysqli_real_escape_string($con, $email);
        $password = mysqli_real_escape_string($con, $password);  
                   
				    if($password    == $confirmpassword )
            {
                     $Select = "SELECT userid FROM userregister WHERE userid = ? LIMIT 1";

                    $sql = "INSERT INTO userregister(userid, username, mobile, email, password) values('$userid','$username', '$mobile','$email','$password')"; 
                            if (mysqli_query($con, $sql))
                {
               echo'<script>alert("Congratulation,your account has been created. Please login in")</script>';
                }
                        else
            {
                echo'<script>alert("sorry, please try another userid")</script>';
            }
        }
    else
        {
            echo'<script>alert("please enter valid password")</script>';
        }
?>  