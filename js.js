function abc(obj){
    var x=obj.id; 
    if(x=='a')
    {
        document.getElementById('spthinhhanh').innerHTML='<div class="banner_thumb2"><img src="img/banner1.jpg"></div>';
    }
    else if(x=='b')
    {
        document.getElementById('spthinhhanh').innerHTML='<div class="banner_thumb2"><img src="img/banner2.jpg"></div>';
    }
    else if(x=='c')
    {
        document.getElementById('spthinhhanh').innerHTML='<div class="banner_thumb2"><img src="img/banner3.jpg"></div>';
    }
    else
    {
        document.getElementById('spthinhhanh').innerHTML='<div class="banner_thumb2"><img src="img/banner_main.jpg"></div>';
    }
}

//Ajax
// $(document).ready(function()
// { 
//   //  var submit = $("button[type='submit']");

//    window.onload=function()
//    {

//     //  var user = $("input[name='user']").val(); //lấy giá trị trong input user

//      //Kiểm tra xem trường đã được nhập hay chưa


//      var datas = $('form#form_input').serialize();
  
//      //Sử dụng phương thức Ajax.
//      $.ajax({
//            type : 'POST', //Sử dụng kiểu gửi dữ liệu POST
//            url : 'db_connect.php', //gửi dữ liệu sang trang data.php
//            data : datas, //dữ liệu sẽ được gửi
//            success : function(data)  // Hàm thực thi khi nhận dữ liệu được từ server
//                      { 
//                         if(data == 'false') 
//                         {
//                           alert('Không có người dùng');
//                         }else{
//                           // $('#spthinhhanh').html(data);
//                           // alert(data);
//                         }
//                      }
//            });
//            return false;
//      };
//  });

 function list_show(n){
  alert(n);
    // if(n==1){
    //   document.getElementById("list_show").style.display='block';
    // }
    // else{
    //   document.getElementById("list_show").style.display='none';
    // }
}

var item = [
  { id: 1  , image: "img/banner1.jpg"},
  { id: 2  , image: "img/banner2.jpg"},         
  { id: 3  , image: "img/banner3.jpg"},       
  { id: 4  , image: "img/banner4.jpg"},
  { id: 5  , image: "img/banner5.jpg"},
  { id: 6  , image: "img/banner6.jpg"},
];

var index_div = 0;
function sanpham(id,n,item){
	var html = '';
  let dem=0;
  var i=index_div + n;
	while(dem<5){

    if(i<0){i=item.length-1}
    else if(i>5){i=0} 

    html+='<div class="box item" id="'+item[i].id+'">';
      html+='<div class="img_div">';
          html+='<img src="'+item[i].image+'" alt="" />';
      html+='</div>';
      html+='<div class="info_div">';
        html+='<div class="name_book">';
          html+='<a href="https://nhasachphuongnam.com/vi/nhat-ky-cau-be-sieu-than-thien-tap-2-rowley-phieu-luu-ky.html" class="product_title" title="Nhật Ký Cậu Bé Siêu Thân Thiện - Tập 2: Rowley Phiêu Lưu Ký">';
            html+='Nhật Ký Cậu Bé Siêu Thân Thiện - Tập 2: R...';
            html+='</a>';
            html+='</div>';
        html+='<div class="price_book">Giá</div>';
      html+='</div>';
    html+='</div>';
    i++;
    dem++;
  };
  index_div=i;
	document.getElementById(id).innerHTML = html;
}
setInterval(changeSlide, 4000);

var slideIndex = 0;

function next_prduct(id,n){
  sanpham(id,n,item);
}

window.onload = function(){
  // console.log(12);
  sanpham('spthinhhanh',0,item);
  sanpham('sachkhuyendoc',0,item);
  sanpham('theloai1',0,item);
  sanpham('theloai2',0,item);
  sanpham('theloai3',0,item);
  sanpham('theloai4',0,item);
  sanpham('theloai5',0,item);
  sanpham('theloai6',0,item);
}
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
  var slides = ["img/banner2.jpg", "img/banner3.jpg", "img/banner4.jpg", "img/banner5.jpg", "img/banner6.jpg"];
  // var slides = document.getElementsByClassName("mySlides");
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
// showSlides(0);

// var item = [
//   { id: 1  , image: "banner1.jpg"},
// 	{ id: 2  , image: "banner2.jpg"},         
// 	{ id: 3  , image: "banner3.jpg"},       
// 	{ id: 4  , image: "banner4.jpg"},
// 	{ id: 5  , image: "banner5.jpg"},
// 	{ id: 6  , image: "banner6.jpg"},
// ];


// function next_prduct(id,n){
//   var item = [
//     { id: 1  , image: "img/banner1.jpg"},
//     { id: 2  , image: "img/banner2.jpg"},         
//     { id: 3  , image: "img/banner3.jpg"},       
//     { id: 4  , image: "img/banner4.jpg"},
//     { id: 5  , image: "img/banner5.jpg"},
//     { id: 6  , image: "img/banner6.jpg"},
//   ];
//   sanpham(id,n,item);
// }
// var index_div = 5;
// function sanpham(id,n,item){
// 	var html = '';
//   let dem=0;
//   var i=index_div + n;
// 	while(dem<6){
    
//     if(i==item.length) {i=0}

//     if(i<0){i=item.length-1}
//     html+='<div class="box item" id="'+item[i].id+'">';
//       html+='<div class="img_div">';
//           html+='<img src="'+item[i].image+'" alt="" />';
//       html+='</div>';
//       html+='<div class="info_div"></div>';
//     html+='</div>';
//     i++;
//     dem++;
//   };
//   index_div=i;
// 	document.getElementById(id).innerHTML = html;
// }

// function sanpham(this_array) { // phân trang
// 	html = '';
// 	const contens = this_array.map((item, index) => {
// 	if(index >= start && index < end){
// 	html += '<div class="item">';
// 		html += '<div class="item_top">';
// 			html += '<button type="button" id="'+item.id+'" class="btn_item" onclick="chitietsp(this);">Chi Tiết</button>';
// 			html += '<img src= ' + item.image + ' id="select'+ item.id +'">'; // ảnh chính trên div
// 		html += '</div>';

// 		html+='<div class="text">';	// giá và tên sản phẩm
// 			html+='<div class="text_title">'+item.Name+'</div>';
// 			html+='<div class="text_price">';

// 				html+='<div id="'+ item.Normal_Price_id +'" class="Normal_price"><p>'+Normal_Price+'</p></div>'; // giá thường
// 				html+='<div id="'+ item.Promotional_Price_id +'" class="Promotional_price"><p>'+Promotional_Price+'</p></div>'; //giá khuyến mãi
// 			html+='</div>';
// 		html+='</div>';
// 	html += '</div>'; 
// 	return html;
// 	}
// 	});
// 	document.getElementById('product').innerHTML = html;

// 	getCurrentPage(1);
// }
