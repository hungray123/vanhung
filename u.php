<?php


//ket noi database
$conn = new mysqli('localhost','root','','btl') or die($conn->error);

//Insert
    if(isset($_POST['dangky'])){
       
       
      
      $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        
      $sql = " INSERT INTO user (email,username,passwords) VALUES
             ('$email','$username','$password')";
        
        if ($conn->query($sql) === TRUE) {
         $_SESSION['message']="Record has been saved !";
         $_SESSION['msg_type']="Success";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        } 
      
    
}