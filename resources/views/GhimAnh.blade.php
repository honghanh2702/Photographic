<!DOCTYPE html>
<html>
    <head>
        <title>Ghim ảnh</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/myStyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstdapcdn.com/bootstdap/4.5.2/js/bootstdap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light" onresize="resizeFunc()">
        <!-- Thanh điều hướng -->
        <nav class="container-fluid bg-light sticky-top">
            <!-- Nút logo -->
            <a href="TrangChu.html" class="btn btn-light rounded-circle float-left px-0">
                <i class="fas fa-bell"></i>
            </a>
            <!-- Ô tìm kiếm -->
            <form action="#" method="GET" class="form-inline ml-3 border-0 float-left">
                <input id="text" type="text" class="form-control bg-gray border-0 border-radius-4 pl-3 mr-3" placeholder="Tìm kiếm"> 
            </form>
            <!-- Nút thông báo -->
            <div class="dropdown nav-dropdown">
                <button href="#" class="btn btn-light button rounded-circle float-left px-0" data-toggle="dropdown">
                    <i class="fas fa-bell"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right radius-10 py-3 bg-light" style="width:410px;padding-right:1.95rem;"> 
                    <div style="width:100%;"><div class="radius-10 py-0 px-2 mx-3 list-item-1">
                        <div class="pt-1 pb-3 mx-auto"><b class="text-black">Thông báo</b></div>
                    </div></div> 
                    <!-- Danh sách thông báo -->
                    <div class="cursor-default"><div class="radius-10 py-0 px-2 mx-3 list-item-1 pt-2">
                        <div class="email-list" style="height:400px;">
                            <a href="#"><div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1 mx-3" style="display:block;">
                                <span>Bạn có 99 ý tưởng mới đang chờ!</span><br>
                                <span class="text-muted">1 tuần</span><br>
                                <div class="my-2 mr-3 notification-img">
                                    <img src="../image/D2bqT3aU4AIGaMd.jfif" alt="D2bqT3aU4AIGaMd.jfif" class="radius-10 cropped" style="width:100%;height:150px;">
                                </div>
                            </div></div></a>
                            <a href="#"><div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1 mx-3" style="display:block;">
                                <span>Bạn có 99 ý tưởng mới đang chờ!</span><br>
                                <span class="text-muted">1 tuần</span><br>
                                <div class="my-2 mr-3 notification-img">
                                    <img src="../image/D2bqT3aU4AIGaMd.jfif" alt="D2bqT3aU4AIGaMd.jfif" class="radius-10 cropped" style="width:100%;height:150px;">
                                </div>
                            </div></div></a>
                            <a href="#"><div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1 mx-3" style="display:block;">
                                <span>Bạn có 99 ý tưởng mới đang chờ!</span><br>
                                <span class="text-muted">1 tuần</span><br>
                                <div class="my-2 mr-3 notification-img">
                                    <img src="../image/D2bqT3aU4AIGaMd.jfif" alt="D2bqT3aU4AIGaMd.jfif" class="radius-10 cropped" style="width:100%;height:150px;">
                                </div>
                            </div></div></a>
                        </div>
                    </div></div>
                </div>
            </div>
            <!-- Nút hộp thư -->
            <div class="dropdown nav-dropdown">
                <button href="#" id="#" class="btn btn-light button rounded-circle float-left px-0" style="#" data-toggle="dropdown">
                    <i class="fas fa-comment-dots"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right radius-10 py-3 bg-light" style="width:410px;padding-right:1.95rem;"> 
                    <div style="width:100%;"><div class="radius-10 py-0 px-2 mx-3 list-item-1">
                        <div class="pt-1 pb-3 mx-auto"><b class="text-black">Hộp thư đến</b></div>
                        <!-- Nút Tùy chọn trong dropdown Hộp thư -->
                        <div class="dropdown option-dropdown" style="position:fixed;right:1rem;">
                            <button class="btn btn-light button rounded-circle px-0" style="margin:0;" data-toggle="dropdown">
                                <i class="fas fa-ellipsis-h"></i>
                                <div class="dropdown-menu dropdown-menu-right radius-10 py-3 bg-light" id="option-dropdown-menu" style="width:250px;padding-right:1.95rem;">    
                                    <!-- Đánh dấu tất cả là đã đọc -->                            
                                    <div><div class="radius-10 py-0 px-2 mx-3 list-item-1 hover">
                                        <div class="py-1"><b>Đánh dấu tất cả là đã đọc</b></div>
                                    </div></div>
                                </div>
                            </button>
                        </div>
                    </div></div> 
                     <!-- Tìm tên người nhận -->
                    <div><div class="radius-10 py-2 px-2 mx-3 list-item-1">
                        <input type="text" onkeyup="#" style="width:100%;height:40px;border-radius:20px;" class="form-control bg-gray border-0 border-radius-4 pl-3"  placeholder="Tìm kiếm theo tên hoặc email">
                    </div></div>
                    <!-- Danh sách người nhận -->
                    <div class="cursor-default"><div class="radius-10 py-0 px-2 mx-3 list-item-1 pt-2">
                        <div class="email-list" style="height:400px;">
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="../image/taeyeon.jpg" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>Xuân Trần</b></div>
                                    <div class="text-dark">rapunzelxuantran</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="../image/taeyeon.jpg" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>Xuân Trần</b></div>
                                    <div class="text-dark">rapunzelxuantran</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="../image/taeyeon.jpg" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>Xuân Trần</b></div>
                                    <div class="text-dark">rapunzelxuantran</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="../image/taeyeon.jpg" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>Xuân Trần</b></div>
                                    <div class="text-dark">rapunzelxuantran</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="../image/taeyeon.jpg" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>Xuân Trần</b></div>
                                    <div class="text-dark">rapunzelxuantran</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="../image/taeyeon.jpg" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>Xuân Trần</b></div>
                                    <div class="text-dark">rapunzelxuantran</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="../image/taeyeon.jpg" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>Xuân Trần</b></div>
                                    <div class="text-dark">rapunzelxuantran</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="../image/taeyeon.jpg" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>Xuân Trần</b></div>
                                    <div class="text-dark">rapunzelxuantran</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="../image/taeyeon.jpg" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>Xuân Trần</b></div>
                                    <div class="text-dark">rapunzelxuantran</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                        </div>
                    </div></div>                              
                </div>
            </div>
            <!-- Nút avatar -->
            <a href="BangTinCaNhan.html" id="avatar" class="btn rounded-circle float-left p-0 ml-2 mr-3" style="margin-top:13px;padding-top:0;">
                <img src="../image/taeyeon.jpg"  alt="taeyeon.jpg" class="rounded-circle m-0" style="#">
            </a>
            <!-- Nút dropdown -->
            <div class="dropdown float-left px-0 pt-3 bg-light">
                <button class="btn btn-light rounded-circle dropdown-toggle" type="button" data-toggle="dropdown"></button>
                <ul class="dropdown-menu dropdown-menu-right radius-10 py-3 bg-light" style="rigth:0;width:350px;">
                    <!-- Bảng tin cá nhân -->
                    <li class="mx-3"><a href="BangTinCaNhan.html"><div class="radius-10 py-1 list-item-1">
                        <div class="mr-3">
                            <img src="../image/taeyeon.jpg" alt="taeyeon.jpg" style="width:80px;height:80px;" class="rounded-circle">
                        </div>
                        <div style="width:250px;" class="pt-2">
                            <div class="mt-1"><b>Xuân Trần</b></div>
                            <div class="text-dark">Xem bảng tin cá nhân</div>
                        </div>
                    </div></a></li>
                    <li class="dropdown-divider mx-3"></li>
                    <!-- Trợ giúp và hỗ trợ -->
                    <li class="mx-3"><a href="HoTro.html"><div class="radius-10 py-0 list-item-1">
                        <div class="mr-1">
                            <div class="rounded-circle" id="button1"><i class="fa fa-question-circle"></i></div>
                        </div>
                        <div class="pt-2"><b>Trợ giúp & hỗ trợ</b></div>
                    </div></a></li>
                    <!-- Điều khoản và quyền riêng tư -->
                    <li class="mx-3"><a href="DieuKhoan.html"><div class="radius-10 py-0 list-item-1">
                        <div class="mr-1">
                            <div class="rounded-circle" id="button1" style="padding-left:9px;padding-top:7px;">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="pt-2"><b>Điều khoản & quyền riêng tư</b></div>
                    </div></a></li>
                    <!-- Đăng xuất -->
                    <li class="mx-3"><a href="DangNhap.html"><div class="radius-10 py-0 list-item-1">
                        <div class="mr-1">
                            <div class="rounded-circle" id="button1"><i class="fas fa-sign-out-alt"></i></div>
                        </div>
                        <div class="pt-2"><b>Đăng xuất</b></div>
                    </div></a></li>
                    <li class="dropdown-divider mx-3"></li>
                    <!-- Giới thiệu -->
                    <li class="mx-3"><a href="GioiThieu.html"><div class="radius-10 py-0 list-item-1">
                        <div class="mr-1">
                            <div class="rounded-circle" id="button1"><i class="fas fa-info-circle"></i></div>
                        </div>
                        <div class="pt-2"><b>Giới thiệu về chúng tôi</b></div>
                    </div></a></li>
                </ul>                
            </div>
        </nav>
        <!-- Phần thân -->
        <div class="container">
            <div class="radius-10 display-inline-flex">
                <div class="bg-danger">
                </div>
            </div>
        </div>
        <!-- Nút tpở về Trang chủ -->
        <button class="btn btn-light" id="back-button"><a href="TrangChu.html"><i class="fa fa-chevron-left"></i></a></button>
        <!-- Nút trợ giúp -->
        <button class="btn btn-light" id="help-button"><a href="TroGiup.html"><i class="fa fa-question"></i></a></button>
        <!-- Nút tạo ghim -->
        <button class="btn btn-light" id="add-button"><a href="TaoGhim.html"><i class="fas fa-plus"></i></a></button>
        <!-- Nút trở về đầu trang -->
        <button onclick="topFunction()" id="up-button" class="btn btn-light hidden"><i class="fas fa-angle-double-up"></i></button>
        <!-- Phần Javascript -->
        <script src="../js/myScript.js"></script>
    </body>
</html>