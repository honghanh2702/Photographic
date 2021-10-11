//
//  Script cho Trang chủ
//

/* Thay đổi chiều dài thành phần của Ô tìm kiếm*/
function resizeFunc() {
    let x = window.innerWidth;
    document.getElementById("text").style.width = (x-306)+"px";
}
/* Chế độ hiển thị nút trở về đầu trang */
function scrollFunction() {
    let btn = document.getElementById("up-button");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}
/* Hàm trở về đầu trang */
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

//
//  Script mở rộng cho trang Đăng nhập
//

