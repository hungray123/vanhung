<?php include('path.php');
include(ROOT_PATH . "/app/database/db.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Forum</title>
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
      <!--navbar-->

    <?php include('app/include/headerDiendan.php');?>
      <nav class="breadcrumb">
          <h6 class="breadcrumb-item acive"><i class="fab fa-artstation"></i> Diễn Đàn TLU</h6>
      </nav>
      <div class="container"></div>
      <div class="row">
          <div class="col-12 col-xl-9">
              <h2 class="h4 category mb-0 p-4 rounded text-light">1.CSE Forum</h2>
              <table class="table table-striped table-bordered table-responsive">
                  <thead class="thead-light">
                      <tr>
                          <th scope="col" class="forum-col">Forum</th>
                          <th scope="col"> Topic </th>
                          <th scope="col"> Post </th>
                          <th scope="col" class="last-post-col">Last Post</th>
                          <th scope="col" class="like"><i class="far fa-thumbs-up"></i></th>
                      </tr>
                  </thead>
                  <tbody>
                  <tr>
                          <td>
                              <h3 class="h5 mb-0"><a href="#">Sự Kiện CSE Forum </a></h3>
                          </td>
                          <td>
                              <div>9</div>
                          </td>
                          <td>30</td>
                          <td>
                              <h4 class=" h6 mb-0"0><a href="#"></a></h4>
                              <div>By <a href="#">Nguyễn Thu Thảo</a></div>
                              <div>03/11/2020 , 13:48</div>
                          </td>
                          <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>1</div>
                             
                              
                          </td>
                          <tr>
                              <td>
                                  <h3 class="h5 mb-0"><a href="#">Góp ý-Kiến nghị cho CSE forum </a></h3>
                              </td>
                              <td>
                                  <div>8</div>
                              </td>
                              <td>30</td>
                              <td>
                                  <h4 class="h6 mb-0"><a href="#"></a></h4>
                                  <div><a href="#"></a></div>
                                  <div> 20/11/2020,19:30</div>
                              </td>
                              <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>3</div>
                             
                              
                          </td>
                          </tr>
                          <tr>
                              <td>
                                  <h3 class="h5 mb-0"><a href="#">Phòng truyền thông CSE </a></h3>
                                  <p class="">    TUYỂN CỘNG TÁC VIÊN CLB TRUYỀN THÔNG:Vào ngày 26-8 đến hết ngày 30-8, Câu lạc bộ Truyền thông Media chúng mình có tổ chức đặt bàn tuyển...</p>
                              </td>
                              <td>
                                  <div>8</div>
                              </td>
                              <td>30</td>
                              <td>
                                  <h4 class="h6 mb-0"><a href="#"></a></h4>
                                  <div>By <a href="#">Lê Tuấn Anh</a></div>
                                  <div> 20/11/2020,19:30</div>
                              </td>
                              <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>9</div>
                             
                              
                          </td>
                          </tr>
                          
                  </tbody>
              </table>
              <h2 class="h4 category mb-0 p-4 rounded text-light">2.Đồng hành mùa thi</h2>
              <table class="table table-striped table-bordered table-responsive">
                  <thead class="thead-light">
                      <tr>
                          <th scope="col" class="forum-col">Forum</th>
                          <th scope="col"> Topic </th>
                          <th scope="col"> Post </th>
                          <th scope="col" class="last-post-col">Last Post</th>
                          <th scope="col" class="like"><i class="far fa-thumbs-up"></i></th>
                      </tr>
                  </thead>
                  <tbody>
                  <tr>
                          <td>
                              <h3 class="h5 mb-0"><a href="#">Thông tin tuyển sinh </a></h3>
                              <p class="mb-0"></p>
                          </td>
                          <td>
                              <div>9</div>
                          </td>
                          <td>30</td>
                          <td>
                              <h4 class=" h6 mb-0"0><a href="#"></a></h4>
                              <div><a href="#"></a></div>
                              <div></div>
                          </td>
                          <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>1</div>
                             
                              
                          </td>
                          <tr>
                              <td>
                                  <h3 class="h5 mb-0"><a href="#">Chia sẻ kinh nghiệm </a></h3>
                                  <p class="mb-0">Các nỗ lực của công ty như; bố trí không gian văn phòng mở, trang trí nhiều màu sắc, có tiện ích giải trí … để khuyến khích các nhân viên thoải mái...</p>
                              </td>
                              <td>
                                  <div>8</div>
                              </td>
                              <td>30</td>
                              <td>
                                  <h4 class="h6 mb-0"><a href="#"></a></h4>
                                  <div>By <a href="#">Phạm Khánh Ngọc</a></div>
                                  <div> 20/11/2020,19:30</div>
                              </td>
                              <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>3</div>
                             
                              
                          </td>
                          </tr>
                          <tr>
                              <td>
                                  <h3 class="h5 mb-0"><a href="#">Phòng truyền thông CSE </a></h3>
                                  <p class="mb-0"></p>
                              </td>
                              <td>
                                  <div>8</div>
                              </td>
                              <td>30</td>
                              <td>
                                  <h4 class="h6 mb-0"><a href="#"></a></h4>
                                  <div>By <a href="#">Đặng Ngọc Anh</a></div>
                                  <div> 20/11/2020,20:30</div>
                              </td>
                              <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>9</div>
                             
                              
                          </td>
                          </tr>
                          
                  </tbody>
              </table>
              <h2 class="h4 category mb-0 p-4 rounded text-light">3.Hành Lang lớp Học</h2>
              <table class="table table-striped table-bordered table-responsive">
                  <thead class="thead-light">
                      <tr>
                          <th scope="col" class="forum-col">Forum</th>
                          <th scope="col"> Topic </th>
                          <th scope="col"> Post </th>
                          <th scope="col" class="last-post-col">Last Post</th>
                          <th scope="col" class="like"><i class="far fa-thumbs-up"></i></th>
                      </tr>
                  </thead>
                  <tbody>
                  <tr>
                          <td>
                              <h3 class="h5 mb-0"><a href="#">Trên Giảng Đường</a></h3>
                              <p class="mb-0">Bất kỳ cuốn sách là thú vị, thông tin và hấp dẫn. Đọc mở ra những thế giới mới, làm cho công việc tưởng tượng và cải thiện tư duy tượng hình cuốn...</p>
                          </td>
                          <td>
                              <div>9</div>
                          </td>
                          <td>30</td>
                          <td>
                              <h4 class=" h6 mb-0"0><a href="#"></a></h4>
                              <div>By <a href="#">Phạm Hữu Đạt</a></div>
                              <div>03/11/2020 , 17:48</div>
                          </td>
                          <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>1</div>
                             
                              
                          </td>
                          <tr>
                              <td>
                                  <h3 class="h5 mb-0"><a href="#">Ngoài giảng đường</a></h3>
                                  <p class="mb-0">Bài học đầu tiên khi bước vào đời không phải nhỏ, đó là không nên làm việc gì khi mình chưa tìm hiểu kỹ. Nhưng bù lại, không đứa sinh viên năm thứ nhất ngoại tỉnh nào có thể rành rẽ những con hẻm Sài Gòn như những nhà "phát hành sách báo chuyên nghiệp" của chúng tôi...</p>
                              </td>
                              <td>
                                  <div>8</div>
                              </td>
                              <td>30</td>
                              <td>
                                  <h4 class="h6 mb-0"><a href="#"></a></h4>
                                  <div>By <a href="#">Phạm Hùng Cường</a></div>
                                  <div> 11/11/2020,19:30</div>
                              </td>
                              <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>3</div>   
                          </td>
                          </tr>
                  </tbody>
              </table>
              <h2 class="h4 category mb-0 p-4 rounded text-light">3.Đào tạo - Hướng nghiệp</h2>
              <table class="table table-striped table-bordered table-responsive">
                  <thead class="thead-light">
                      <tr>
                          <th scope="col" class="forum-col">Forum</th>
                          <th scope="col"> Topic </th>
                          <th scope="col"> Post </th>
                          <th scope="col" class="last-post-col">Last Post</th>
                          <th scope="col" class="like"><i class="far fa-thumbs-up"></i></th>
                      </tr>
                  </thead>
                  <tbody>
                  <tr>
                          <td>
                              <h3 class="h5 mb-0"><a href="#">Chia sẻ tài liệu tiếng việt</a></h3>
                              <p class="mb-0"></p>
                          </td>
                          <td>
                              <div>9</div>
                          </td>
                          <td>30</td>
                          <td>
                              <h4 class=" h6 mb-0"0><a href="#"></a></h4>
                              <div><a href="#"></a></div>
                              <div></div>
                          </td>
                          <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>1</div>
                             
                              
                          </td>
                          <tr>
                              <td>
                                  <h3 class="h5 mb-0"><a href="#">Chương trình CNTT quốc tế</a></h3>
                                  <p class="mb-0"></p>
                              </td>
                              <td>
                                  <div>8</div>
                              </td>
                              <td>30</td>
                              <td>
                                  <h4 class="h6 mb-0"><a href="#"></a></h4>
                                  <div><a href="#"></a></div>
                                  <div></div>
                              </td>
                              <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>3</div>
                             
                              
                          </td>
                          </tr>
                          <tr>
                              <td>
                                  <h3 class="h5 mb-0"><a href="#">Chia sẻ tài liệu bằng tiếng anh</a></h3>
                                  <p class="mb-0">The computer 6 A computer is a machine with an intricate network of electronic circuits that operate switches or magnetize tiny metal cores. The I switches, like the cores, are capable of being in one of two possible I states</p>
                              </td>
                              <td>
                                  <div>8</div>
                              </td>
                              <td>30</td>
                              <td>
                                  <h4 class="h6 mb-0"><a href="#"></a></h4>
                                  <div>By <a href="#">Phạm Đức Duy</a></div>
                                  <div> 30/11/2020,01:30</div>
                              </td>
                              <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>9</div>
                             
                              
                          </td>
                          </tr>
                          
                  </tbody>
              </table>
              <h2 class="h4 category mb-0 p-4 rounded text-light">5.Các thế hệ sinh viên</h2>
              <table class="table table-striped table-bordered table-responsive">
                  <thead class="thead-light">
                      <tr>
                          <th scope="col" class="forum-col">Forum</th>
                          <th scope="col"> Topic </th>
                          <th scope="col"> Post </th>
                          <th scope="col" class="last-post-col">Last Post</th>
                          <th scope="col" class="like"><i class="far fa-thumbs-up"></i></th>
                      </tr>
                  </thead>
                  <tbody>
                  <tr>
                          <td>
                              <h3 class="h5 mb-0"><a href="#">K59</a></h3>
                              <p class="mb-0"></p>
                          </td>
                          <td>
                              <div>9</div>
                          </td>
                          <td>30</td>
                          <td>
                              <h4 class=" h6 mb-0"><a href="#"></a></h4>
                              <div><a href="#"></a></div>
                              <div></div>
                          </td>
                          <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>1</div>
                             
                              
                          </td>
                          <tr>
                              <td>
                                  <h3  class="h5 mb-0"><a href="#">K60</a></h3>
                                  <p class="mb-0"></p>
                              </td>
                              <td>
                                  <div>8</div>
                              </td>
                              <td>30</td>
                              <td>
                                  <h4 class="h6 mb-0"><a href="#"></a></h4>
                                  <div><a href="#"></a></div>
                                  <div></div>
                              </td>
                              <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>3</div>
                             
                              
                          </td>
                          </tr>
                          <tr>
                              <td>
                                  <h3 class="h5 mb-0"><a href="#">K61</a></h3>
                                  <p class="mb-0"></p>
                              </td>
                              <td>
                                  <div>8</div>
                              </td>
                              <td>30</td>
                              <td>
                                  <h4 class="h6 mb-0"><a href="#"></a></h4>
                                  <div><a href="#"></a></div>
                                  <div></div>
                              </td>
                              <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>9</div>
                             
                              
                          </td>
                          </tr>
                          <tr>
                              <td>
                                  <h3 class="h5 mb-0"><a href="#">k62</a></h3>
                                  <p class="mb-0">Trường Đại học Thuỷ lợi là trường đại học công lập có sứ mệnh đào tạo nguồn nhân lực chất lượng cao, nghiên cứu khoa học, phát triển và chuyển giao công nghệ tiên tiến trong các ngành khoa học, kỹ thuật, kinh tế và quản lý, đặc biệt trong lĩnh vực thuỷ lợi...</p>
                              </td>
                              <td>
                                  <div>8</div>
                              </td>
                              <td>30</td>
                              <td>
                                  <h4 class="h6 mb-0"><a href="#"></a></h4>
                                  <div><a href="#"></a></div>
                                  <div></div>
                              </td>
                              <td>
                              <h5 class="h5 mb-0"><a href="#"><i class="far fa-thumbs-up"></i></a></h5>
                              <div>9</div>
                             
                              
                          </td>
                          </tr>
                          
                  </tbody>
              </table>
              
          </div>
          <!--Phải-->
          <div class="row">
             <div class="col-12 col-sm-6 col-xl-12">
                 <div class="card mb-3 mb-sm-0 mb-xl-3">
                     <div class="card-body">
                         <h2 class="h4 card-title">Quản Trị Viên</h2>
                         <ul class="list-noStyle mb-0">
                             <li><i class="fas fa-user"></i><a href="#">Lê Uyên Thư</a></li>
                             <li><i class="fas fa-user"></i><a href="#">Lê Huỳnh Hoài An</a></li>
                             <li><i class="fas fa-user"></i><a href="#">Lê Ngọc Lan Chi</a></li>
                             <li><i class="fas fa-user"></i><a href="#">Lê Uyển Nhi</a></li>
                         </ul>
                     </div>
                     <div class="card-footer">
                         <dl class="row mb-0">
                             <dt class="col-8">Total: </dt>
                             <dd class="col-4">20</dd>
                         </dl>
                         <dl class="row mb-0">
                             <dt class="col-8">Member:</dt>
                             <dd class="col-4 mb-0">10</dd>
                         </dl>
                         <dl class="row mb-0">
                             <dt class="col-8">Guests:</dt>
                             <dd class="col-4 mb-0">6</dd>
                         </dl>
                     </div>
                 </div>
             </div>
             <div class="col-12 col-sm-6 col-xl-12">
                 <div class="card">
                     <div class="card-body">
                         <h2 class="h4 card-title">Thống Kê</h2>
                         <dl class="row mb-0">
                             <dt class="col-8">Tổng Thể</dt>
                             <dd class="col-4 mb-0">20</dd>
                         </dl>
                         <dl class="row mb-0">
                             <dt class="col-8">Nội Dung</dt>
                             <dd class="col-4 mb-0">100</dd>
                         </dl>
                     </div>
                 </div>
             </div>
          </div>
          <footer class="small bg-info">
                 <div class="container">
                     <ul class="list-inline mb-0">
                         <li class="list-inline-item text-light">&copy;
                                TLUniversity
                         </li>
                         <li class="list-inline-item"><a href="#" class="text-light">Khoa Công Nghệ Thông Tin</a></li>
                     </ul>
                 </div>
             </footer>
      </div>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>