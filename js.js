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
$(document).ready(function()
{ 
   //khai báo biến submit form lấy đối tượng nút submit
   var submit = $("button[type='submit']");

   //khi nút submit được click
   submit.click(function()
   {
     //khai báo các biến dữ liệu gửi lên server
     var user = $("input[name='user']").val(); //lấy giá trị trong input user

     //Kiểm tra xem trường đã được nhập hay chưa
     if(user == ''){
       alert('Vui lòng nhập Tên người dùng');
       return false;
     }

     //Lấy toàn bộ dữ liệu trong Form
     var datas = $('form#form_input').serialize();
   
     //Sử dụng phương thức Ajax.
     $.ajax({
           type : 'POST', //Sử dụng kiểu gửi dữ liệu POST
           url : 'data.php', //gửi dữ liệu sang trang data.php
           data : datas, //dữ liệu sẽ được gửi
           success : function(data)  // Hàm thực thi khi nhận dữ liệu được từ server
                     { 
                        if(data == 'false') 
                        {
                          alert('Không có người dùng');
                        }else{
                          $('#spthinhhanh').html(data); //dữ liệu HTML trả về sẽ được chèn vào trong thẻ có id content
                        }
                     }
           });
           return false;
     });
 });


setInterval(changeSlide, 4000);

var slideIndex = 0;
showSlides(slideIndex);

function changeSlide() {
	showSlides(slideIndex += 1);
}


function plusSlides(n) {
  showSlides(slideIndex += n);
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
