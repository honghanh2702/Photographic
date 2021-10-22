<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/myStyle.css">
        <link rel="stylesheet" href="/css/gallery.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="/script/myScript.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstdapcdn.com/bootstdap/4.5.2/js/bootstdap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <style>
                #hanh img {
                    width: 100%;
                    min-height: 200px;
                    border-radius: 15px;
                    margin-bottom: 20px;
                }
            </style>
    </head>
    <body class="bg-light" onresize="resizeFunc()">
        <!-- Thanh điều hướng -->
        <nav class="container-fluid bg-light sticky-top">
            <!-- Nút logo -->
            <a href="main" id="#" class="btn btn-light rounded-circle float-left px-0" style="#">
                <i class="fas fa-home"></i>
            </a>
            <!-- Ô tìm kiếm -->
            <form action="#" method="GET" class="form-inline ml-3 border-0 float-left">
                <input id="text" type="text" class="form-control bg-gray border-0 border-radius-4 pl-3 search" placeholder="Tìm kiếm">
            </form>
            <!-- Nút thông báo -->
            <a href="#" id="#" class="btn btn-light rounded-circle float-left ml-3 px-0" style="#">
                <i class="fas fa-bell"></i>
            </a>
            <!-- Nút hộp thư -->
            <a href="#" id="#" class="btn btn-light rounded-circle float-left px-0" style="#">
                <i class="fas fa-comment-dots"></i>
            </a>
            <!-- Nút avatar -->
            <a href="BangTinCaNhan.html" id="avatar" class="btn rounded-circle float-left p-0 ml-2 mr-3" style="margin-top:13px;padding-top:0;">
                <img src="{{ session()->get('users')->img; }}"  alt="taeyeon.jpg" class="rounded-circle m-0" style="#">
            </a>
            <!-- Nút dropdown -->
            <div class="dropdown float-left px-0 pt-3 bg-light">
                <button class="btn btn-light rounded-circle dropdown-toggle" type="button" data-toggle="dropdown"></button>
                <ul class="dropdown-menu dropdown-menu-right radius-10 py-3 bg-light" style="rigth:0;width:350px;">
                    <!-- Bảng tin cá nhân -->
                    <li class="mx-3"><a href="BangTinCaNhan.html"><div class="radius-10 py-1 list-item-1">
                        <div class="mr-3">
                            <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="width:80px;height:80px;" class="rounded-circle">
                        </div>
                        <div style="width:250px;" class="pt-2">
                            <div class="mt-1"><b>{{session()->get('users')->name;}}</b></div>
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
                    <li class="mx-3"><a href="{{ route('DangNhap') }}"><div class="radius-10 py-0 list-item-1">
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
        <div class="container-fluid">
            <div class="row" id="hanh">
                <div class="col-md-2" id="col1">
                </div>
                <div class="col-md-2" id="col2">

                </div>
                <div class="col-md-2" id="col3">

                </div>
                <div class="col-md-2" id="col4">

                </div>
                <div  class="col-md-2" id="col5">

                </div>
                <div class="col-md-2" id="col6">

                </div>
            </div>
        </div>
        <!-- Nút trợ giúp -->
        <button class="btn help-button btn-light"><a href="TroGiup.html"><i class="fa fa-question"></i></a></button>
        <!-- Nút tạo ghim -->
        <button class="btn add-button btn-light"><a href="TaoGhim.html"><i class="fas fa-plus"></i></a></button>
        <!-- Nút trở về đầu trang -->
        <button onclick="topFunction()" id="up-button" class="btn btn-light" style="display:none;"><i class="fas fa-angle-double-up"></i></button>
        <script>
            /* Thiết lập chiều dài Ô tìm kiếm sau khi load trang */
            var x = window.innerWidth;
            document.getElementById("text").style.width = (x-306)+"px";
        </script>
        <script>
            /* Hiển thị nút trở về đầu trang khi scroll xuống 20px */
            // window.onscroll = function() {
            //     scrollFunction()
            // };
        </script>
        <script>
            /* Thiết lập các thông số cho từng ảnh trong grid ảnh */
            var gallery = document.querySelector('#gallery');
            var getVal = function (elem, style) { return parseInt(window.getComputedStyle(elem).getPropertyValue(style)); };
            var getHeight = function (item) { return item.querySelector('.content').getBoundingClientRect().height; };
            var resizeAll = function () {
                var altura = getVal(gallery, 'grid-auto-rows');
                var gap = getVal(gallery, 'grid-row-gap');
                gallery.querySelectorAll('.gallery-item').forEach(function (item) {
                    var el = item;
                    el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
                });
            };
            gallery.querySelectorAll('img').forEach(function (item) {
                item.classList.add('byebye');
                if (item.complete) {
                    console.log(item.src);
                } else {
                    item.addEventListener('load', function () {
                        var altura = getVal(gallery, 'grid-auto-rows');
                        var gap = getVal(gallery, 'grid-row-gap');
                        var gitem = item.parentElement.parentElement;
                        gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
                        item.classList.remove('byebye');
                    });
                }
            });
            window.addEventListener('resize', resizeAll);
            window.addEventListener('load', resizeAll);
            /* gallery.querySelectorAll('.gallery-item').forEach(function (item) {
                item.addEventListener('click', function () {
                    item.classList.toggle('full');
                });
            }); */
        </script>
        <script type="text/javascript">
            /* Hiển thị nút khi rê chuột vào ghim tương ứng */
            $(document).ready(function () {
                var index = 0;
                var item;
                var btn = document.getElementsByClassName("btn-display");
                var g_item = document.getElementsByClassName("gallery-item");
                var send_dropdown = document.getElementsByClassName("send-dropdown");
                var link_btn = document.getElementsByClassName("link-button");
                $('.gallery-item').hover(function () {
                    index = $('.gallery-item').index(this);
                    document.getElementsByClassName("bright-70")[index].style.filter = "brightness(70%)";
                    item = document.getElementsByClassName("gallery-item")[index];
                    let width = window.innerWidth;
                    if (width>=602) {
                        btn[index*4].style.display = "block";
                        btn[index*4+1].style.display = "block";
                        btn[index*4+2].style.display = "block";
                        btn[index*4+3].style.display = "block";
                        g_item[index].style.zIndex = "1";
                    }
                    console.log(index);
                }, function () {
                    document.getElementsByClassName("bright-70")[index].style.filter = "brightness(100%)";
                    let width = window.innerWidth;
                    if (width>=602) {
                        btn[index*4].style.display = "none";
                        btn[index*4+1].style.display = "none";
                        btn[index*4+2].style.display = "none";
                        btn[index*4+3].style.display = "none";
                        g_item[index].style.zIndex = "0";
                    }
                });
                $('.send-dropdown').on('show.bs.dropdown', function(){
                    btn[index*4+1].style.display = "none";
                    btn[index*4+3].style.display = "none";
                });
                $('.send-dropdown').on('shown.bs.dropdown', function(){
                    btn[index*4+1].style.display = "none";
                    btn[index*4+3].style.display = "none";
                });
                $('.send-dropdown').on('hide.bs.dropdown', function(e){
                    btn[index*4+1].style.display = "block";
                    btn[index*4+3].style.display = "block";
                });
                $('.send-dropdown').on('hidden.bs.dropdown', function(){
                    btn[index*4+1].style.display = "block";
                    btn[index*4+3].style.display = "block";
                });
            });
        </script>
        <script>
            /* Giữ cho dropdown của nút Gửi luôn bật khi click vào phần bên trong của dropdown-menu */
            $('.send-dropdown .dropdown-menu').on('click', function(event){
                event.stopPropagation();
            });
        </script>
            <script>
                var skip = 1;
                var termSearch = ""
                $(document).ready(function() {
                    for (i = 1; i <= 20; i++) {
                        $("#col" + (i % 7)).append('<img src="/img/' + (i % 10) + '.jpg" alt="">'); //jqappend

                    }
                    $(".search").change(function (e) {
                        e.preventDefault();
                        console.log(e.target.value);
                        for (let index = 1; index < 8; index++){
                            $("#col" + (index % 7)).html("");
                        }
                        termSearch = String(e.target.value)
                        skip = 1;
                        $.ajax({
                                type: "GET",
                                url: "/test",
                                data: {page:skip,termSearch:termSearch},
                                dataType: "text",
                                success: function (response) {
                                    // console.log(response);
                                    var res = JSON.parse(response)
                                    $.each(res.data, function (indexInArray, item) {
                                        // console.log(item);
                                        var rheight = Math.floor(Math.random() * 300) + 200;
                                        var content = `<img style="height:${rheight}px;" loading="lazy" src="/${item.url}" alt="">`
                                        $("#col"+(indexInArray % 7)).append(content);
                                    });
                                    skip+=1;


                                }
                            });
                    });
                    $(window).scroll(function() {

                        // for (i = 1; i <= 20; i++) {
                        //     console.log(i % 10)
                        //     $("#col" + (i % 7)).append('<img src="/img/' + (i % 10) + '.jpg" alt="">');

                        // }
                        var height = $(window).scrollTop();
                        var screen = $(document).height();
                        // console.log(screen,height);
                        // $.ajax({
                        //         type: "GET",
                        //         url: "/test",
                        //         data: {page:skip},
                        //         dataType: "text",
                        //         success: function (response) {
                        //             console.log(response);
                        //         }
                        //     });
                        if(height+500>screen*0.6){
                            $.ajax({
                                type: "GET",
                                url: "/test",
                                data: {page:skip,termSearch:termSearch},
                                dataType: "text",
                                success: function (response) {
                                    // console.log(response);
                                    var res = JSON.parse(response)
                                    console.log(res.data.length);
                                    $.each(res.data, function (indexInArray, item) {
                                        // console.log(item);
                                        var rheight = Math.floor(Math.random() * 250) + 200;
                                        var content = `<img style="height:${rheight}px;" loading="lazy" src="/${item.url}" alt="">`
                                        $("#col"+(indexInArray % 7)).append(content);
                                    });
                                    skip+=1;


                                }
                            });
                        }

                    });
                });
            </script>

    </body>
</html>
