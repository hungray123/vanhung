<?php include('path.php');
include(ROOT_PATH . "/app/database/db.php"); ?>

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
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
         <?php  include('app/include/header.php')?>
         
       <div class="banner">
           <div class="banner-logo">
            <img src="image/h.jpg" alt="">
           </div>
           
       </div>
      <i class="fas fa-bars  menu-toggles"></i>
      <div class="mleft"></div>
       <div class="menu-list">
          

           <ul class="navs">
               <li class="menuItems"><a href="">TRANG CHỦ</a>
                 
              
              </li>
               <li class="menuItems"><a href="gioithieu.php"> GIỚI THIỆU</a>
              
               <ul class=menu-sub>
                   <li ><a href="">Logo Khoa</a></li>
                   <li ><a href="">Lời chào mừng</a></li>
                   <li ><a href="post.php">Tổ chức</a></li>
                   <li ><a href="">Hợp tác liên kết</a></li>
                 </ul>
              </li>
               <li class="menuItems"><a href="">NGHIÊN CỨU KHOA HỌC</a>
               <ul class=menu-sub>
                   <li ><a href="">Các đề tài,dự án</a></li>
                   <li ><a href="">Thông tin seminar</a></li>
                   <li ><a href="">Công trình công bố</a></li>
                   <li ><a href="">Các phòng thí nghiệm</a></li>
                 </ul>
              
              </li>
               <li class="menuItems"><a href="">ĐẠO TẠO</a>
               <ul class=menu-sub>
                   <li ><a href="">Đào tạo đại học</a></li>
                   <li ><a href="">Đào tạo sau đại học</a></li>
                   <li ><a href="">Chuẩn đầu ra</a></li>
                   <li ><a href="">Định hướng ngành nghề</a></li>
                   <li ><a href="">Mô hình đào tạo</a></li>
                   <li ><a href="">Đề cương môn học</a></li>
                 </ul>
              
              </li>
               <li class="menuItems"><a href="">Sinh Viên</a>

               <ul class=menu-sub>
                   <li ><a href="">Tài liệu sinh viên</a></li>
                   <li ><a href="">Tổ  tư vẫn học tập</a></li>
                   <li ><a href="">Biểu mẫu DATN</a></li>
                   <li ><a href="">Luận văn tốt nghiệp</a></li>
                   
                 </ul>
              </li>

               <li class="menuItems"><a href="">TIN TỨC</a>
               <ul class=menu-sub>
                   <li ><a href="">Sự Kiện</a></li>
                   <li ><a href="">CSE trên báo</a></li>
                   
                   
                 </ul>

              </li>
               <li class="menuItems"><a href=""> THÔNG BÁO</a></li>
               <li class="menuItems"><a href=""> LIÊN HỆ</a></li>
           </ul>
       </div>
      
   </div>
   
  
   <!--Container-->
   
   <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="image/p1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/p2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="image/p3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
        
    
    
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 pd">
              <div class="new-hot">
                    <div class="img" >
                      <img src="image/cntt.jpg"  style="width: 100%;height: 250px;border: 1px solid green;">
                  </div>
                  <div class="info">
                      <h2 >Bảo vệ đồ án tốt nghiệp Khóa 57,khoa CNTT đợt tháng 7, năm học 2019-2020.</h2>
                      <p>Bảo vệ đồ án tốt nghiệp Khóa 57 khoa CNTT đợt tháng 7, năm học 2019-2020.
                          Địa điểm: Room 3, 4 nhà K1</p>
                  </div>
                  <button class="btn btn-primary  " type="button">Xem Ngay</button>
              </div>

              </div>
               
            <div class="col-xs-12 col-sm-6 col-md-4 pd">
                <!--
                <ul>
                    <li>
                        <div class="list-img">
                            <img src="" alt="">
                            <p></p>
                        </div>
                    </li>
                    <li>
                        <div class="list-img">
                            <img src="" alt="">
                            <p></p>
                        </div>
                    </li>
                    <li>
                        <div class="list-img">
                            <img src="" alt="">
                            <p></p>
                        </div>
                    </li>
                </ul>
            -->
            <ul class="list-group">
            <li class="list-group-item "><div class="list-img" > <img src="image/k62.jpg" alt=""></div>
              <div class="list-info">
               <a href=""> <p class="bar-list-p">Chương trình “Chào Tân sinh viên Khóa 62” - Khoa CNTT</p></a>
              </div>
            </li>
                
            <li class="list-group-item "><div class="list-img" > <img src="image/chuoi.jpg" alt=""></div>
                <div class="list-info">
                <a href=""> <p class="bar-list-p">Chương trình CNTT - Việt Nhật</p></a>
                </div>
              </li>
              <li class="list-group-item "><div class="list-img" > <img src="image/nnss.jpg" alt=""></div>
                <div class="list-info">
                 <a href=""> <p class="bar-list-p">Công bố Quyết định thành lập Đảng bộ bộ phận CNTT</p></a>
                </div>
              </li>
              <li class="list-group-item "><div class="list-img" > <img src="image/tts.jpg" alt=""></div>
                <div class="list-info">
                  <a href=""><p class="bar-list-p">Giới thiệu Trung tâm tin học </p></a>
                </div>
              </li>
              <li class="list-group-item "><div class="list-img" > <img src="image/kn.jpg" alt=""></div>
                <div class="list-info">
                 <a href=""> <p class="bar-list-p">Cuộc thi “Sinh viên với ý tưởng khởi nghiệp” năm 2020 </p></a>
                </div>
              </li>
              <li class="list-group-item "><div class="list-img" > <img src="image/cntt.jpg" alt=""></div>
                <div class="list-info">
                 <a href=""> <p class="bar-list-p">Bảo vệ đồ án tốt nghiệp Khóa 60 CNTT </p></a>
                </div>
              </li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 pd">
              <div class="panel">

                <div class="panel-heading">
                  <div class="panel-title">
                    <a href="">Thông Báo</a>
                  </div>
                </div>
                  <div class="panel-body" >
                    <div class="section " >
                      <ul class="section-menu">
                        <li class="panel-section"><a class="title-doc"href=""><i class="fas fa-angle-double-right"></i> Kế hoạch sinh hoạt công dân – sinh viên đầu khóa K62 - Đại học hệ chính quy (cơ sở Phố Hiến)</a></li>
                        <li  class="panel-section"><a  class="title-doc" href=""> <i class="fas fa-angle-double-right"></i>Trường Đại học Thủy lợi hỗ trợ sinh viên có gia đình bị ảnh hưởng do thiên tai</a></li>
                        
                        <li  class="panel-section"><a  class="title-doc" href=""><i class="fas fa-angle-double-right"></i> Cuộc thi “Sinh viên với ý tưởng khởi nghiệp” năm 2020</a></li>
                        
                        <li  class="panel-section"><a  class="title-doc" href=""><i class="fas fa-angle-double-right"></i>
                          Thông báo Học bổng Thạc sỹ, Tiến sỹ tại Đại học Quốc gia Formosa, Đài Loan năm 2021</a></li>
                        <li  class="panel-section"><a class="title-doc" href=""> <i class="fas fa-angle-double-right"></i>
                          Quyết định về mức thu học phí áp dụng cho năm học 2020-2021 đối với một số bậc, hệ</a></li>
                          <nav aria-label="Page navigation example" >
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                  <span class="sr-only">Previous</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                      
                      </ul>
              </div>
              
                    
                  </div>
                </div>
              </div>
                  <div class="row">
                  
                      <div class="col-sm-9">
                        <div class="main">
                          <div class="heding-title-new">
                            <h2  style=" font-size:1.25rem; padding-top: 12px;  ">CÁC THÔNG TIN CHUNG</h2>
                          </div>
                          <div class="post1">
                            <img src="image/dd.jpg" class="post-image">
                            <div class="post-revirew">
                              <h2 ><a href="">
                                Kết quả của đội tuyển Olympic Tin học sinh viên tại kỳ thi toàn quốc lần thứ 28</a></h2>
                              <i class="far fa-user"> TLU</i>
                              &nbsp;
                              <i class="far carlendar">Mar 18, 2020</i>
                              <p class="preview-text"> Olympic Tin học sinh viên Việt Nam là sáng kiến của hội tin học Việt Nam, Hội sinh viên Việt Nam và Bộ giáo dục và đào tạo nhằm động viên phong trào học tập tin học và khuyến khích các tài năng tin học trẻ.</p>
                              <a href="" class="btn btn-primary">Xem Thêm</a>
                            </div>
                          </div>

                          <div class="post1">
                            <img src="image/ttd.jpg" class="post-image">
                            <div class="post-revirew">
                              <h2 ><a href="">Đội tuyển Olympic Tin học toàn quốc ra quân</a></h2>
                              <i class="far fa-user"> TLU</i>
                              &nbsp;
                              <i class="far carlendar">Mar 10, 2020</i>
                              <p class="preview-text"> (TLU) – “Với thời gian ôn luyện gấp rút trong 2 tháng cùng việc xét chọn kỹ lưỡng qua các bài kiểm tra, đội tuyển Olympic Tin học toàn quốc của Trường Đại học Thủy lợi đã tìm ra 6 gương mặt xuất sắc nhất”...</p>
                              <a href=""  class="btn btn-primary">Xem Thêm</a>
                            </div>
                          </div>

                          <div class="post1">
                            <img src="image/J.jpg" class="post-image">
                            <div class="post-revirew">
                              <h2 ><a href="">Sinh viên Khoa CNTT giao lưu với công ty Qualica Nhật Bản</a></h2>
                              <i class="far fa-user"> TLU</i>
                              &nbsp;
                              <i class="far carlendar">Mar 11, 2020</i>
                              <p class="preview-text">(TLU) – Chiều ngày 23/04/2018, tại Trường Đại học Thủy lợi diễn ra buổi giao lưu giữa sinh viên Khoa CNTT với các lãnh đạo và nhân viên của
                                 công ty Qualica đang làm việc ở Nhật Bản...</p>
                              <a href="" class="btn btn-primary">Xem Thêm</a>
                            </div>
                          </div>
                          <div class="post1">
                            <img src="image/444.jpg" class="post-image">
                            <div class="post-revirew">
                              <h2 ><a href="">Công bố quyết định của Hiệu trưởng Bổ nhiệm viên chức quản lý cấp bộ môn khoa CNTT</a></h2>
                              <i class="far fa-user"> TLU</i>
                              &nbsp;
                              <i class="far carlendar">Mar 10, 2020</i>
                              <p class="preview-text"> Trong những ngày đầu tháng 1 năm 2019, thừa ủy quyền của Hiệu trưởng trường Đại học Thủy Lợi, Đảng ủy..</p>
                              <a href="" class="btn btn-primary">Xem Thêm</a>
                            </div>
                          </div>
      
                          </div>
                      </div>
                      <div class="col-sm-3" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
                        <ul class="list-group">
                          <li class="list-group-item active" style="height: 50px;"><h5 style="padding: 10px; font-size: 1.15rem;"><i class="fab fa-staylinked"></i> CÁC LIÊN KẾT</h5></li>
                          <li class="list-group-item "><img src="image/covid.jpg" style="width:99%; height: 70px;"alt=""></li>
                          <li class="list-group-item "><img src="image/s3.jpg" style="width:99%"alt=""></li>
                          <li class="list-group-item "><img src="image/s4.jpg" style="width:99%"alt=""></li>
                          <li class="list-group-item "><img src="" alt=""></li>
                          <li class="list-group-item active"><img src="image/s1.jpg" style="width:99%" alt=""></li>
                          <li class="list-group-item active"><img src="image/s2.jpg" style="width:99%; height: 70px;"alt=""></li>
                          <li class="list-group-item active"><img src="image/s3.jpg" style="width:99%"alt=""></li>
                          <li class="list-group-item active"><img src="image/s4.jpg" style="width:99%"alt=""></li>
                          <li class="list-group-item active"><img src="" alt=""></li>
                          <li class="list-group-item active"><img src="image/s1.jpg" style="width:99%" alt=""></li>
                          <li class="list-group-item active"><img src="image/s2.jpg" style="width:99%; height: 70px;"alt=""></li>
                          <li class="list-group-item active"><img src="image/s3.jpg" style="width:99%" alt=""></li>
                         
                          
                        </ul>
                      </div>
                  
                  
                   
                
            
              
             
                
   </div>
   
        </div>
        
        
   </div>
   <!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3" style="font-family: tahoma;">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">KHOA CNTT</h6>
        <p>Địa chỉ: nhà C1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội. Điện thoại: (+84)-024 3 5632211. Email: vpkcntt@tlu.edu.vn.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Mở Rộng</h6>
        <p>
          <a class="hlink" href="#!">Giới thiệu</a>
        </p>
        <p>
          <a class="hlink" href="#!">Hợp tác liên kết</a>
        </p>
        <p>
          <a  class="hlink" href="#!">Mô hình đào tạo</a>
        </p>
        <p>
          <a  class="hlink" href="#!">Lời chào mừng</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Chuyên Ngành</h6>
        <p>
          <a class="hlink" href="#!">Công nghệ phần mềm</a>
        </p>
        <p>
          <a  class="hlink" href="#!">Hệ thống thông tin</a>
        </p>
        <p>
          <a  class="hlink" href="#!">Khoa học máy tính</a>
        </p>
        <p>
          <a  class="hlink" href="#!">Kỹ thuật máy tính </a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> Khoa CNTT</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> CNTT_TLU@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="https://mdbootstrap.com/">
            Khoa Công nghệ thông tin - Đại học Thủy lợi
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
  <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
</footer>
<!-- Footer -->
  
<!--
<div class="container">
    <div class="daytime"></div>
    <div class="main">
        <div class="left">
            <div class="title-news"><h5 class="news-h">Thông tin chung</h5></div>
            <div class="list-news">
                <ul class="left-ul">
                    <li ><a href="">TIN TỨC -SỰ KIỆN</a></li>
                    <li><a href="">THI -TUYỂN SINH</a></li>
                    <li><a href="">ĐỐI NGOẠI</a></li>
                    <li><a href="">THÔNG BÁO MỚI</a></li>
                    <li><a href="">ĐÀO TẠO</a></li>
                </ul>
                <div class="title-news"><h5 class="news-h">Thi- Tuyển sinh</h5></div>
                <ul class="left-ul">
                    <li ><a href="">Các văn bản hương dẫn</a></li>
                    </ul>
                    <div class="title-news"><h5 class="news-h">ĐÀO TẠO</h5></div>

            <ul  class="left-ul">
                    <li ><a href="">Đào tạo đại học</a></li>
                    <li ><a href="">Đào tạo sau đại học</a></li>
                    </ul>
            </div>
            
        </div>
        <div class="center">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="image/p1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="image/p2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="image/p3.jpg" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="image/p4.jpg" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="image/p5.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            <div class="news-home">
                <div class="news-homeItems">
                   <div class="photo">
                       <img src="image/p5.jpg" alt="">
                   </div>
                   <div class="title-homeItems">
                      <p>Nhữn sinh viên ưu tú của năm 2020</p>
                   </div>
                </div>
                <div class="news-homeItems">
                   <div class="photo">
                       <img src="image/p1.jpg" alt="">
                   </div>
                   <div class="title-homeItems">
                      <p>Nhữn sinh viên ưu tú của năm 2020</p>
                   </div>
                </div>
                <div class="news-homeItems">
                    <div class="photo">
                        <img src="image/p3.jpg" alt="">
                    </div>
                    <div class="title-homeItems">
                       <p>Nhữn sinh viên ưu tú của năm 2020</p>
                    </div>
                 </div>
                 <div class="news-homeItems">
                    <div class="photo">
                        <img src="image/p4.jpg" alt="">
                    </div>
                    <div class="title-homeItems">
                       <p>Nhữn sinh viên ưu tú của năm 2020</p>
                    </div>
                 </div>
            </div>
            <div class="main-news">
                <div class="los">
                    <div class="title-news1"><h5>Thông Báo</h5></div>
                    <div class="list-news1">
                        <ul>
                            <li><a href=""><span class="glyphicon glyphicon-time">16/10/2020</span> item 1</a></li>
                            <li><a href="">item2</a></li>
                            <li><a href="">item2</a></li>
                            <li><a href="">item2</a></li>
                            <li><a href="">item2</a></li>
                        </ul>
                    </div>
                </div>
                <div class="role"></div>
            </div>
        </div>
        <div class="right"></div>
    </div>
</div>
-->
     <!-- Jquery-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
    <!-- slick-carousel-->

   <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <!--Custom JS -->
  <script src="js/scripts.js"></script>

</body>
</html>