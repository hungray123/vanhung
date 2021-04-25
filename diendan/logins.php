<?php include('path.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Đăng Nhập</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--CSS-->
    <link rel="stylesheet" href="style_diendan.css">
    <!--AWE SOME-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="mycard">
          
              <div class="row">
                  <div class="col-md-6">
                      <div class="myLeftCtn">
          <form action="index.php">
          <div class="myLeftCtn">
            <h2>TLUzoom</h2>
            <h4>Đăng Nhập</h4>
         </div>
         <div class="form-group">
         <?php  include( ROOT_PATH . "/app/helpers/formErrors.php") ; ?>   
    <label for="uname"><i class="fas fa-user"></i> Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
  </div>
  <div class="form-group">
    <label for="pwd"><i class="fas fa-unlock-alt"></i> Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> Duy Trì Đăng Nhập.
    </label>
  </div>
  <button type="submit" name="dangnhap" class="btn btn-outline-success my-2 my-sm-0">Đăng Nhập</button>
  <h6></h6>
  <div class="resgin">
  
  <h6> or <a href="Resgin.php" class="">        Đăng ký </a></h6>
  </div>
           </div>
           </div>
           <div class="col-md-6">
               <div class="myRightCtn">
                   <div class="box"><header>Xin Chào,</header>
                   <p>Chào Mừng Các Bạn Đến Với Diễn Đàn Của TLU</p>
                </div>
               </div>
           </div>
           </div>
          </div>
          
      </div>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>