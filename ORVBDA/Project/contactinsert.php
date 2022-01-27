 <?php
   include('connection.php');                          
    
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $comments = $_POST['comments'];
      
        //to prevent from mysqli injection   
        $name  = stripcslashes($name);
        $email = stripcslashes($email);
        $comments   = stripcslashes($comments);
        $name = mysqli_real_escape_string($con, $name);
        $email = mysqli_real_escape_string($con, $email);
        $comments = mysqli_real_escape_string($con, $comments);
                    $sql = "INSERT INTO contact(name,email,comments)values('$name','$email','$comments')"; 
                            if (mysqli_query($con, $sql))
                {
                        echo'<script>alert("thank you will contact you soon")</script>';
                }
                        else
                    {
                echo" sorry please try later";
                    }
?>  
