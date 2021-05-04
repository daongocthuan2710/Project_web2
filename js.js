
//Ajax
// $(document).ready(function()
// { 
//   //  var submit = $("button[type='submit']");

//     $('#content').load(function()
//    {

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
//                           alert(123);
//                           // $('#spthinhhanh').html(data);
//                           alert(data);
//                         }
//                      }
//            });
//            return false;
//      });
//  });

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
  //  var submit = $("button[type='submit']");
  load_data();

  function load_data()
   {
     $.ajax({
          type : 'POST', //Sử dụng kiểu gửi dữ liệu POST
          url : 'db_connect.php', //gửi dữ liệu sang trang data.php
          dataType:'json',
          //  data : datas, //dữ liệu sẽ được gửi
           success : function(data)  // Hàm thực thi khi nhận dữ liệu được từ server
                     { 
                      
                      //  $('id').css('','');
                          $.each(data, function (key, item){
                            mangsach.push(item);
                            
                          });

                          console.log(mangsach);
                          sanpham('spthinhhanh',0,mangsach);
                          sanpham('sachkhuyendoc',9,mangsach);
                          sanpham('theloai1',0,mangsach);
                          sanpham('theloai2',5,mangsach);
                          sanpham('theloai3',15,mangsach);
                          sanpham('theloai4',50,mangsach);
                          sanpham('theloai5',90,mangsach);
                          // sanpham('theloai6',70,mangsach);
                          
                          // console.log(mangsach);
                          let longitem = mangsach.length;
                          let itemArr=[];
                          itemArr=mangsach;
                          let perPage = 20;
                          let currentPage = 1;
                          let start = 0;
                          let end = perPage;
                          // console.log(mangsach.length);
                          const maxpage = Math.ceil(mangsach.length / perPage);

                          function totalPage(item_array){ // tính tổng số trang của mảng item_array
                            var Total = Math.ceil(item_array.length / perPage);
                            // console.log(item_array.length);
                            // console.log(Total);
                            return Total;
                          }
                          function getCurrentPage(currentPage){
                            start = (currentPage - 1) * perPage;
                            end = currentPage * perPage;
                          }

                          function listPage (Total_pages){ // xuất ra số trang
                            // console.log(Total_pages);
                            let html ='';
                            html += '<button id="nextLeft"><</button>';
                            for (let i = 1; i<= Total_pages;i++){
                              html += `<div id="page${i}">${i}</div>`;
                            }
                            html += '<button id="nextRight">></button>';
                            // console.log(html);
                            document.getElementById('page').innerHTML = html;
                          }
                          listPage(totalPage(mangsach));
                                                    
                                                    
                     }
                     
           });
           return false;
     };
 });
 console.log(mangsach.length);

 function next_product(id,n){
  sanpham(id,n,mangsach);
}
console.log(mangsach.length);
// PHÂN TRANG TÌM KIẾM
let longitem = mangsach.length;
let itemArr=[];
itemArr=mangsach;
let perPage = 20;
let currentPage = 1;
let start = 0;
let end = perPage;
const maxpage = Math.ceil(mangsach.length / perPage);

function totalPage(item_array){ // tính tổng số trang của mảng item_array
	var Total = Math.ceil(item_array.length / perPage);
  // console.log(item_array.length);
  // console.log(Total);
	return Total;
}
function getCurrentPage(currentPage){
	start = (currentPage - 1) * perPage;
	end = currentPage * perPage;
}

function listPage (Total_pages){ // xuất ra số trang
  console.log(Total_pages);
	let html ='';
	html += '<button id="nextLeft"><</button>';
	for (let i = 1; i<= Total_pages;i++){
		html += `<div id="page${i}">${i}</div>`;
	}
	html += '<button id="nextRight">></button>';
  console.log(html);
	document.getElementById('page').innerHTML = html;
}
listPage(totalPage(mangsach));


function clickNextRight1(){
	document.getElementById('nextRight').style.borderColor = 'gray';
	document.getElementById('nextRight').style.backgroundColor = 'whitesmoke';
	document.getElementById('nextRight').style.color = 'gray';
}
function clickNextRight2(){
	document.getElementById('nextRight').style.borderColor = 'black';
	document.getElementById('nextRight').style.backgroundColor = 'white';
	document.getElementById('nextRight').style.color = 'black';
}
function clickNextLeft1(){
	document.getElementById('nextLeft').style.borderColor = 'gray';
	document.getElementById('nextLeft').style.backgroundColor = 'whitesmoke';
	document.getElementById('nextLeft').style.color = 'gray';
}
function clickNextLeft2(){
	document.getElementById('nextLeft').style.borderColor = 'black';
	document.getElementById('nextLeft').style.backgroundColor = 'white';
	document.getElementById('nextLeft').style.color = 'black';
}
function sanpham_search(mangsach){
  const contens = mangsach.map((item, index) => {
    if(index >= start && index < end){
      var html='';
      html+='<div class="item_search">';
        html+='<div class="top_item">';
          html+='<img src="'+item.HinhAnh+'" alt="'+item.HinhAnh+'">';
        html+='</div>';
        html+='<div class="bot_item">';
          html+='<div class="name_book">';
            html+='<a href="#" class="product_title" title="Nhật Ký Cậu Bé Siêu Thân Thiện - Tập 2: Rowley Phiêu Lưu Ký">';
              html+='"'+item.TenSach+'"';
            html+='</a>';
          html+='</div>';
          html+='<div class="price_book">'+item.DonGia+'</div>';
          html+='<div class="div_themvaogio">THÊM VÀO GIỎ HÀNG</div>';
        html+='</div>';
      html+='</div>';
    }
  });
  document.getElementById('product_item').innerHTML = html;
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
