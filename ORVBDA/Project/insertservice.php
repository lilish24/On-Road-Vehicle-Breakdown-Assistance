 <?php
 include('connection.php');                          
    $userid = $_POST['userid'];
    $username = $_POST['username']; 
    $mobile = $_POST['mobile'];
    $location = $_POST['location'];
    $choice =$_POST['choice'];
    $chk="";  
    foreach($choice as $chk1)  
       {  
          $chk.= $chk1.",";  
      }

            
       $sql = "INSERT INTO service(userid,username,mobile,location,choice)values('$userid','$username','$mobile','$location','$chk')"; 


                    
                            if (mysqli_query($con, $sql))
                {
                        echo'<script>alert("thank you for service")</script>';
                }
                        else
                    {
                echo'<script>alert("Please fill all field")</script>';
                    }
  
?>  

	</body>
	</html>
	