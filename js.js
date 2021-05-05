
function list_show(n){
    if(n==1){
      document.getElementById("list_show").style.display='block';
    }
    else{
      document.getElementById("list_show").style.display='none';
    }
}

function formatNumber(num) { // định dạng giá tiền
	return Number(num).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') +'₫';
}



var index_div = 0;
function sanpham(id,n,item){
	var html = '';
  let dem=0;
  var i=index_div + n;
	while(dem<5){

    if(i<0){i=item.length-1}
    if(i==item.length){i=0} 
    html+='<div class="box item" id="'+item[i].IdSach+'">';
      html+='<div class="img_div">';
          html+='<img src="'+item[i].HinhAnh+'" alt="'+item[i].HinhAnh+'" />';
      html+='</div>';
      html+='<div class="info_div">';
        html+='<div class="name_book">';
          html+='<a href="https://nhasachphuongnam.com/vi/nhat-ky-cau-be-sieu-than-thien-tap-2-rowley-phieu-luu-ky.html" class="product_title" title="Nhật Ký Cậu Bé Siêu Thân Thiện - Tập 2: Rowley Phiêu Lưu Ký">';
            html+='"'+item[i].TenSach+'"';
            html+='</a>';
            html+='</div>';
        html+='<div class="price_book">'+formatNumber(item[i].DonGia)+'</div>';
      html+='</div>';
    html+='</div>';
    i++;
    dem++;
  };
  index_div=i;
	document.getElementById(id).innerHTML = html;
}

var mangsach=[];
$(document).ready(function()
{ 
  load_datasach();

  function load_datasach()
   {
     $.ajax({
          type : 'POST',
          url : 'db_connect.php',
          dataType:'json',
           success : function(data)
                     { 
                      
                          $.each(data, function (key, item){
                            mangsach.push(item); 
                          });
                          sanpham('spthinhhanh',0,mangsach);
                          sanpham('sachkhuyendoc',5,mangsach);
                          sanpham('theloai1',15,mangsach);
                          sanpham('theloai2',10,mangsach);
                          sanpham('theloai3',20,mangsach);
                          sanpham('theloai4',35,mangsach);
                          sanpham('theloai5',40,mangsach);
                          sanpham('theloai6',45,mangsach);                             
                     }      
           });
           return false;
     };
 });

 function next_product(id,n){
  sanpham(id,n,mangsach);
}

setInterval(changeSlide,4000);
var slideIndex = 0;


setInterval(next_product("spthinhhanh",-1), 3000);
setInterval(next_product('spkhuyendoc',-1), 3000);
setInterval(next_product('theloai1',-1), 3000);
setInterval(next_product('theloai2',-1), 3000);
setInterval(next_product('theloai3',-1), 3000);
setInterval(next_product('theloai4',-1), 3000);
setInterval(next_product('theloai5',-1), 3000);
seInterval(next_product('theloai6',-1), 3000);
// auto();
function changeSlide() {
	showSlides(slideIndex += 1);
}


function plusSlides(n) {
  showSlides(slideIndex += n);
  if(n==-1){
    document.getElementById('b').style.animationName='example';
  }
} 

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {

  var i;
  var slides = ["img/banner_thumb4.png", "img/banner3.jpg", "img/banner4.jpg", "img/banner5.jpg", "img/banner6 .jpg"];
  var dots = document.getElementsByClassName("dot");

  if (n > slides.length-1) {slideIndex = 0}    
  else if (n < 0) {slideIndex = slides.length-1}
  else {slideIndex = n}

  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  document.getElementById("img").src = slides[slideIndex];
  dots[slideIndex].className += " active";
}
