<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
          <h1><a class="navbar-brand" href="#"><i class="fas fa-cat"></i> TLUzoom</a></h1>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation"></button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <!-- <li class="nav-item active">
                      <a class="nav-link" href="#"><i class="fas fa-home"></i> Trang Chủ <span class="sr-only">(current)</span></a>
                  </li> -->
                 
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle nav-item"style="color: white!important;"  href="#" id="dropdownId" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"><i class="fas fa-book"></i> Bài Viết</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                          <a class="dropdown-item" href="#"><i class="fas fa-newspaper"></i> Bài Viết Mới</a>
                          <a class="dropdown-item" href="#"><i class="fab fa-hotjar"></i> Bài Viết Hot</a>
                          <a class="dropdown-item" href="post.php"><i class="fas fa-file-upload"></i> Đăng Bài</a>
                      </div>                 
                  </li>
                 
                  <li class="nav-item">
                      <a class="nav-link" style="color: white!important;" href="logins.php"><i class="fas fa-address-card"></i> Thành Viên</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" style="color: white!important;" href="logins.php"><i class="fas fa-address-card"></i> Từ Khóa</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" style="color: white!important;" href="logins.php"><i class="fas fa-address-card"></i> Tạo Bài Viết</a>
                  </li>
                  <!-- <form class="form-inline my-2 my-lg-0">
              
                  <input class="form-control mr-sm-2" type="text" placeholder="Nhập">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Tìm Kiếm</button>
              </form> -->
                 
              </ul>
              
              <form class="form-inline my-2 my-lg-0">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                
                 
              <?php
                                    if(isset($_SESSION['id'])): ?>
                  <li class="nav-item">
                      <a class="nav-link" style="color: white!important;" href="logins.php"><i class="fas fa-address-card"></i><?php echo  $_SESSION['username'];?></a>
                  </li>
                  <?php else: ?>
                    <li class="nav-item">
                      <a class="nav-link" style="color: white!important;" href="logins.php"><i class="fas fa-address-card"></i> Đăng Nhập</a>
                  </li>
                  <?php endif; ?>

              </ul>
                  <!-- <input class="form-control mr-sm-2" type="text" placeholder="Nhập">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Tìm Kiếm</button> -->
              </form>
          </div>
      </nav>