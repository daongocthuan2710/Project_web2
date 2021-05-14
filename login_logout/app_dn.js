// const sign_in_btn = document.querySelector("#sign-in-button");
// const sign_up_btn = document.querySelector("#sign-up-button");
// const container = document.querySelector('.container');
// const sign_in_form = document.getElementById("sign-in-form");
// const sign_up_form = document.getElementById("sign-up-form");

// // console.log(container);

// sign_up_btn.addEventListener('click', ()=> {
//     container.classList.add('sign-up-mode');

//     container.classList.remove('sign-in-mode');
//     // container.classList.add('sign-in-mode');
// });

// sign_in_btn.addEventListener('click', ()=> {


//     container.classList.add('sign-in-mode');
    
//     container.classList.remove('sign-up-mode');
 
    
// });

$(document).ready(function()
{ 
   var taikhoan=[];

	 $("#btn").click( function(event){
		event.preventDefault();
		var user=$("#user").val();
		var pass=$("#pass").val();

		$.ajax({
			type : 'POST', 
			url : '../taikhoan.php',
			dataType:'json',
			data:{ user: user, pass: pass },
			 success : function(data)  
					   {   
						
						taikhoan=data;
						// alert(taikhoan);
						  if(taikhoan==0){
							  alert('Sai tài khoản hoặc mật khẩu, mời nhập lại');
						  }
						  else if(taikhoan==2){
							alert('Đăng nhập vào trang admin thành công');
							window.location.href='../admin_prj_HK2/admin_index.php';
						  }
						  else{
							alert('Đăng nhập thành công');
							window.location.href='../index.php';
						  }
					   }
					   
			 });

	  });
		
  });

