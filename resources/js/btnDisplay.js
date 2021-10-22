$(document).ready(function () {
    /* Hiển thị nút khi rê chuột vào ghim tương ứng */
    var index = 0;
    var item;
    var btn = document.getElementsByClassName("btn-display");
    var g_item = document.getElementsByClassName("gallery-item");
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
    /* Ẩn nút link và nút Tùy chọn khi mở dropdown của nút Gửi */
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