<?php include('path.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <!--jQuery và Popper.js -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <!-- Bootstrap4-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
<style>
  body{
    background-image: url('image/TL1.jpg') ;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
    background-repeat: no-repeat;
    background-size: 100%;
  }
</style>
<!-- CSS -->
<link rel="stylesheet" href="css/style.css">
    <title>Đăng Nhập</title>
</head>
<body>
<?php  require_once 'app/controller/users.php'; ?>

<div class="navigation" style="border:none !important;">
       <div class="header" >
                <div class="logo-text">
                    <a href="index.php">ĐẠI HỌC THỦY LỢI - TLU</a>
                </div>
                    <div class="search">
                        <input  placeholder="Search.." type="text"><a href=""><i class="fas fa-search"></i></a>
                            <div class="userlogin">
                                <ul>
                                    <li><a href="login.php"><i class="fas fa-sign-in-alt"></i>Đăng Nhập</a></li>
                                    <li class="nn"><a >Ngôn ngữ</a></li>
                                    <li class="icon-language">
                                        <a href=""><img src="image/vn.png" alt=""></a>
                                        <a href=""><img src="image/e.png" alt=""></a>
                                
                                    </li>
                                </ul>
                            </div>
                    </div>
       </div>
	 

    <!--Page Login-->
    <div class="container login">
        <h2>Đăng Nhập</h2>
       

<?php  include( ROOT_PATH . "/app/helpers/formErrors.php") ; ?>   

        <form action="login.php" method="POST">
          <div class="form-group">
            <label for="text">username:</label>
            <input type="text" class="form-control" alt="nhập ten"  id="email" placeholder="Nhập ten" name="username">
          </div>
          <div class="form-group">
            <label for="pwd">Mật khẩu:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="password">
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember"> Nhớ
            </label>
          </div>
         
          <div class="container signin">
          <button type="submit" name="dangnhap" class="btn btn-primary">Đăng Nhập</button>
            <p>Or <a href="register.php">Đăng ký</a></p>
          </div>
        </form>
      </div>
      
      
	
	<!--Content-->
	
	
	
		
		
	<!--//Content-->
	
	
	
	<!-- Jquery-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
     <!-- slick-carousel-->

	<script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<!--Custom JS -->
	<script  src="js/scripts.js"></script>
</body>
</html>