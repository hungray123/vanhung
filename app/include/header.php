<div class="navigation">
       <div class="header">
                <div class="logo-text">
                    <a href="">ĐẠI HỌC THỦY LỢI - TLU</a>
                </div>
                    <div class="search">
                        <input  placeholder="Search.." type="text"><a href=""><i class="fas fa-search"></i></a>
                            <div class="userlogin">
                                <ul>
                                
                              
                                <?php
                                    if(isset($_SESSION['id'])): ?>

                                    <li><a href="login.php" class="loginsub"><i class="fas fa-sign-in-alt"></i><?php echo  $_SESSION['username'];?></a>

                                <ul class="login-submenu">
                                     

                                                                                
                                             <?php if($_SESSION['admin']): ?>

                                            <li><a href="#" class="logout">MANAGER</a></li>

                                             <?php endif; ?>

                                         <li><a href="<?php echo  BASE_URL . '/logout.php' ?>" class="logout">Thoat</a></li>
                                       </ul>

                              
                              </li>
                              
                              <?php else: ?>

                                    <li><a href="login.php"><i class="fas fa-sign-in-alt"></i>Dang nhap</a>
                                  </li>
                                    <?php endif; ?>


                                    <li class="nn"><a >Ngôn ngữ</a></li>
                                    <li class="icon-language">
                                        <a href=""><img src="image/vn.png" alt=""></a>
                                        <a href=""><img src="image/e.png" alt=""></a>
                                
                                    </li>
                                </ul>
                            </div>
                    </div>
       </div>