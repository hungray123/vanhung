<?php
 include(ROOT_PATH . "/app/database/db.php");
 include(ROOT_PATH . "/app/helpers/validateUsers.php");

    $errors=array();
    $username='';
    $email='';
    $password='';
    $passwordConf='';
    $table='user';

    function LoginUser($user){
        //login user
     $_SESSION['id']=$user['id'];
     $_SESSION['username']=$user['username'];
     $_SESSION['admin']=$user['admin'];
     $_SESSION['message']='ddang nhap thanh cong';
     $_SESSION['type']='thanhcong';
    
     if($_SESSION['admin']){
        header('location:'. BASE_URL. '/index.php');
     }else{
        header('location:'. BASE_URL. '/index.php');
     }
     exit();

    }
if(isset($_POST['dangky'])){

 

    $errors=validateUsers($_POST);
   
    
    if(count($errors)===0){
        unset($_POST['dangky'],$_POST['pswd']);
    $_POST['admin'] =0;

    $_POST['password']= password_hash($_POST['password'] ,PASSWORD_DEFAULT);

     $user_id=create($table,$_POST);
     $user=selectOne($table,['id'=>$user_id]);

     LoginUser($user);
     

    }else{
     $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $passwordConf=$_POST['pswd'];
        
    }
    
}

if(isset($_POST['dangnhap'])){
    $errors=validateLogin($_POST);
    if(count($errors)===0){
        $user=selectOne($table,['username'=>$_POST['username']]);
        if($user && password_verify($_POST['password'], $user['password'])){
            LoginUser($user);

        }else{
            array_push( $errors, "sai tk hoac mat khau");
        }
    }
}


// session_start();
// //ket noi database
// $conn = new mysqli('localhost','root','','btl') or die($conn->error);
// $email='';
// $username='';
// $password='';
// //dangky
//     if(isset($_POST['dangky'])){
      
//       $email=$_POST['email'];
//       $username=$_POST['username'];
//       $password=$_POST['password'];
//       $pswd=$_POST['pswd'];

//       $sql = "SELECT * FROM user WHERE email = '$email' ";
//       $result = mysqli_query($conn, $sql);

//       if($_POST['email']==""){
//         $_SESSION['hoh']="email empty !";
//         $email=$_POST['email'];
      
//       }
//       elseif($_POST['username']==""){
//         $_SESSION['hoh']="user empty !";
//         $username=$_POST['username'];

//       }elseif($_POST['password']==""){
//         $_SESSION['hoh']="pass empty !";
//         $password=$_POST['password'];
//       }

//       elseif($_POST['password']!=$_POST['pswd']){
//         $_SESSION['hoh']="do not match !";
//       }
//       // Kiểm tra username hoặc email có bị trùng hay không
//        elseif (mysqli_num_rows($result) > 0){
//         $_SESSION['hoh']="trung email !";
        
//        }

//       else{


//         unset($_POST['pswd']);
//         unset($_POST['dangky']);
       
//       $sql = " INSERT INTO user (email,username,passwords) VALUES
//              ('$email','$username','$password' )";
        
//         if ($conn->query($sql) === TRUE) {
//          $_SESSION['message']="Record has been saved !";
//          $_SESSION['msg_type']="Success";
//          echo "Dang ky thanh cong";

//         } else {
//           echo "Error: " . $sql . "<br>" . $conn->error;
//         } 
//         header('location:' . BASE_URL . '/index.php');
       
//       }    
// }
// if(isset($_POST['dangnhap'])){

//   //  $username=addslashes($_POST['username']);
//   //  $password=addslashes($_POST['password']);

//    unset($_POST['btn btn-primary']);
//    $username=$_POST['username'];
//    $password=$_POST['password'];

//    if($_POST['username']==" "){
//     $_SESSION['hoh']="user empty !";
//    }
//    elseif($_POST['password']==" "){
//     $_SESSION['hoh']="pass empty !";
//    }

//     // mã hóa pasword
//     //$password = md5($password)
    
//     $result =$conn->query("SELECT * FROM user") or die($conn->error);
      
      
//       while($row=$result->fetch_assoc()){


//         if($username != $row['username']) {
          
//           $_SESSION['hoh']="ten dang nhap khong ton tai !"; 
//         }
       
       
//        //So sánh 2 mật khẩu có trùng khớp hay không
//        elseif ($password !=$row['passwords']) {
   
//          $_SESSION['hoh']="mat khau kong dung";
          
//        }else{
   
//          //Lưu tên đăng nhập
//          $_SESSION['username'] = $username;
//          //echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công. <a href='login.php'>Thoát</a>";
//          header('location: index.php');
//        }



      
//       }
     
      
        

// }
