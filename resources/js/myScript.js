/* Thiết lập chiều dài Ô tìm kiếm sau khi load trang */
var x = window.innerWidth;
if($("#text").length) document.getElementById("text").style.width = (x-306)+"px";
if($("#text1").length) {
    if (x>576) {
        document.getElementById("text1").style.width = (x-476)+"px";
        if (!($('#input-group').hasClass('input-group'))) $('#input-group').addClass('input-group');
    }
    else {
        document.getElementById("text1").style.width = (x-306)+"px";
        if ($('#input-group').hasClass('input-group')) $('#input-group').removeClass('input-group');
    }
}
/* Hiển thị nút trở về đầu trang khi scroll xuống 20px */
window.onscroll = function() {
    scrollFunction();
};
/* Thay đổi chiều dài thành phần của Ô tìm kiếm*/
function resizeFunc() {
    let x = window.innerWidth;
    if($("#text").length) document.getElementById("text").style.width = (x-306)+"px";
    if($("#text1").length) {
        if (x>576) {
            document.getElementById("text1").style.width = (x-476)+"px";
            if (!($('#input-group').hasClass('input-group'))) $('#input-group').addClass('input-group');
        }
        else {
            document.getElementById("text1").style.width = (x-306)+"px";
            if ($('#input-group').hasClass('input-group')) $('#input-group').removeClass('input-group');
        }
    }
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
/* Hàm check textbox tên bảng đã nhập vào chưa */
function checkTableName() {
    let input = document.getElementById("name");
    let text = input.value;
    if (text == "") {
        return false;
    }
    return true;
}
