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

var index = 1;
changeImage = function () {
	var imgs = ["img/banner1.jpg", "img/banner2.jpg", "img/banner3.jpg", "img/banner_main.jpg"];
	document.getElementById("img").src = imgs[index];
	index++;
	if (index == 4) {
		index = 0;
	}
}
setInterval(changeImage, 2000);