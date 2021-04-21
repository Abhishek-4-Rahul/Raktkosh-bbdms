<?php
include 'includes/database.php';
if ($conn){
    if(isset($_POST['save']))
    {
        $First_Name=mysqli_real_escape_string($conn,$_POST['first_name']);
        $Last_Name=mysqli_real_escape_string($conn,$_POST['last_name']);
        $Email=mysqli_real_escape_string($conn,$_POST['email']);
        $Password=mysqli_real_escape_string($conn,$_POST['pass']);
        $CPassword=mysqli_real_escape_string($conn,$_POST['cpass']);
        
        $emailquery="select * from register where Email='$Email' ";
        $query =mysqli_query($conn,$emailquery);
        $emailcount=mysqli_num_rows($query);

        if($emailcount>0)
        {
            echo "Email already exist";
        }
        else
        {
            if($Password==$CPassword)
            {
               $insertquery="insert into register (First_Name,Last_Name,Email,Password) values('$First_Name','$Last_Name','$Email','$Password')";
               $iquery=mysqli_query($conn,$insertquery);
               header('location:index.php'); 

            }
            else
            {
                echo "Password does not match";
            }

        }
    }
}



 ?>
