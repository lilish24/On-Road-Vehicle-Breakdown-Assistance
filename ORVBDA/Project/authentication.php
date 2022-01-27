<?php      
    include('connection.php');                            
    $userid = $_POST['userid'];  
    $password = $_POST['password'];  
        //to prevent from mysqli injection  
        $userid = stripcslashes($userid);  
        $password = stripcslashes($password);  
        $userid = mysqli_real_escape_string($con, $userid);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select  userid,password from userregister where userid = '$userid' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1)
        {  
            header("location:userside.php"); 
        }  
        else
        {  
            header("loaction:index.php");  
        } 
?>  