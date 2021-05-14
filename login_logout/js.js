


var mangTK=[];
$(document).ready(function()
{ 
  //  var submit = $("button[type='submit']");
  load_data();

  function load_data()
   {
     $.ajax({
          type : 'POST', //Sử dụng kiểu gửi dữ liệu POST
          url : 'connect.php', //gửi dữ liệu sang trang data.php
          dataType:'json',
          //  data : datas, //dữ liệu sẽ được gửi
           success : function(data)  // Hàm thực thi khi nhận dữ liệu được từ server
                     { 
                      
                      //  $('id').css('','');
                          $.each(data, function (key, item){
                            mangTK.push(item);
                            
                          });  
                        //  });
                        console.log(mangTK);
                        

                    }
            });
            return false;
    };
 });
 




//dang ky dang nhap
var nameL = document.getElementById("nameL");
var passL = document.getElementById("passL");
var nameS = document.getElementById("nameS");
var email = document.getElementById("email");
var usernameS = document.getElementById("usernameS");
var pass = document.getElementById("pass");
var re_pass = document.getElementById("re_pass");
var phone = document.getElementById('phone');



var userName = document.getElementById("nameLogin");
var password = document.getElementById("passLogin");

var Login = document.getElementById('login');
var inputField = document.querySelector('.input-field');

var userSignup = document.getElementById('userSignup')
var emailInput = document.getElementById('emailInput')
var phoneInput = document.getElementById('phoneInput')
var username = document.getElementById("username");
var passSignup = document.getElementById('passSignup')
var re_password = document.getElementById("re_password");
 
 var signupForm = document.querySelector('#DK_ThanhCong');
 var validationsList = [];
   
var MAX_PHONE = 11;
var MIN_PHONE = 9;

 var MAX_CHARS = 10;
 var MIN_CHARS = 6;


var arrContent = ['Người đọc quá nhiều và dùng tới bộ óc quá ít sẽ rơi vào thói quen suy nghĩ lười biếng.<br> – Albert Einstein –',

  'Một người không đọc sách chẳng hơn gì kẻ không biết đọc.<br> – Mark Twain –',
  
  'Hãy cẩn thận khi đọc sách về sức khỏe. Bạn có thể bỏ mạng vì một lỗi in ấn.<br> – Mark Twain –',
  
  'Thiên nhiên và sách thuộc về những đôi mắt đã thấy chúng.<br> – Ralph Waldo Emerson –',
  
  'Sách hay, cũng như bạn tốt, ít và được chọn lựa; chọn lựa càng nhiều, thưởng thức càng nhiều.<br> – Louisa May Alcott –',
  
  'Chúng ta hãy dịu dàng và tử tế nâng niu những phương tiện của tri thức. Chúng ta hãy dám đọc, nghĩ, nói và viết.<br> – John Adams –',
  
  'Đọc sách hay cũng giống như trò truyện với các bộ óc tuyệt vời nhất của những thế kỷ đã trôi qua.<br> – Rene Descartes –',
  
  'Một cuốn sách hay trên giá sách là một người bạn dù quay lưng lại nhưng vẫn là bạn tốt.<br> – Khuyết danh –',
  
  'Chính từ sách mà những người khôn ngoan tìm được sự an ủi khỏi những rắc rối của cuộc đời.<br> – Victor Hugo –',
  
  'Việc đọc rất quan trọng. Nếu bạn biết cách đọc, cả thế giới sẽ mở ra cho bạn.<br> – Barack Obama –',
  
  'Bạn càng đọc nhiều, bạn càng biết nhiều. Bạn càng học nhiều, bạn càng đi nhiều.<br> – Dr Seuss –',
  
  'Trong những cuốn sách ẩn chứa linh hồn của suốt chiều dài quá khứ.<br> – Thomas Carlyle –',
  
  'Bạn biết rằng bạn đã đọc một cuốn sách hay khi bạn giở đến trang cuối cùng và cảm thấy như mình vừa chia tay một người bạn.<br> – Khuyết danh –',
  
  'Chỉ trong sách, con người mới biết đến sự thật, tình yêu và cái đẹp hoàn hảo.<br> – George Bernard Shaw –',
  
  'Những gì sách dạy chúng ta cũng giống như lửa. Chúng ta lấy nó từ nhà hàng xóm, thắp nó trong nhà ta, đem nó truyền cho người khác, và nó trở thành tài sản của tất cả mọi người.<br> – Voltaire –',
  
  'Như một đứa trẻ đọc truyện, điều tồi tệ là khi bạn đọc đến hồi kết, và thế rồi xong. Ý tôi là thật đau khổ khi truyện không còn thêm nữa.<br> – Robert Creeley –',
  
  'Cuộc đời ta thay đổi theo hai cách: qua những người ta gặp và qua những cuốn sách ta đọc.<br> – Harvey MacKay –',
  
  'Không cần phải đốt sách để phá hủy một nền văn hóa. Chỉ cần buộc người ta ngừng đọc mà thôi.<br> – Mahatma Gandhi –',
  
  'Nghệ thuật đọc là lướt qua một cách khôn ngoan.<br> – Alexander Hamilton –',
  
  'Khi họ đốt sách thì chính là họ cũng đang đốt cả loài người.<br> – Heinrich Heine –',
  
  'Tôi càng đọc, tôi càng suy ngẫm; và tôi càng được nhiều, tôi càng có thể tin chắc mình không biết điều gì.<br> – Voltaire –',
  
  'Sách là nguồn của cải quý báu của thế giới và là di sản xứng đáng của các thế hệ và các quốc gia.<br> – Henry David Thoreau –']

  function nameValidator(value) {
    if (value === '') {
      return{
        field: 'username',
        message: 'Bạn chưa nhập họ và tên'
      }
    }	
    return false;
    }

   function userNameValidator(value) {
   if (value === '') {
     return{
       field: 'userSignup',
       message: 'Bạn chưa nhập tên đăng nhập'
     }
   }

   check = 0;
   const p = /^[a-zA-Z0-9](_(?!(\.|_))|\.(?!(_|\.))|[a-zA-Z0-9]){6,18}[a-zA-Z0-9]$/;
    if(!p.test(value)) {
      return{
        field: 'userSignup',
        message: 'Độ dài từ 6 - 18 ký tự, không chứa các ký tự đặc biệt'
      }
    }
     
     mangTK.forEach(function(item) {
       if(item.USERNAME == value) { 
         check = 1;
       }
     })
     if (check == 1) {
       return{
         field: 'userSignup',
         message: 'Tên đăng nhập đã tồn tại'
       }
     }
 
   return false;
   }

   function emailValidator(value) {
    if (value === '') {
      return{
        field: 'emailInput',
        message: 'Bạn chưa nhập email'
      }
    }

    const emailPattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

    if(!emailPattern.test(value)) {
      return{
        field: 'emailInput',
        message: 'Email không hợp lệ'
      }
    }
    return false;
   }

   function phoneValidator(value) {
    if (value === '') {
      return{
        field: 'phoneInput',
        message: 'Bạn chưa nhập số điện thoại'
      }
    }
  
    const vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
    if(!vnf_regex.test(value)) {
      return{
        field: 'phoneInput',
        message: 'Số điện thoại không tồn tại'
      }			
    }

    if (value.length < MIN_PHONE || value.length > MAX_PHONE) {
      return{
        field: 'phoneInput',
        message: 'Số điện thoại không đúng'
      }
    }
    return false;
    }
  
    function addressValidator(value) {
    if (value === '') {
      return{
        field: 'addressInput',
        message: 'Bạn chưa nhập địa chỉ'
      }
    }
    return false;
  }


   function passwordValidator(value) {
   if (value === '') {
     return{
       field: 'passSignup',
       message: 'Bạn chưa nhập mật khẩu'
     }
   }
   if (value.length < MIN_CHARS || value.length > MAX_CHARS) {
     return{
       field: 'passSignup',
       message: 'Mật khẩu phải từ 6 - 10 ký tự'
     }
   }
   return false;
   }
 
 function confirmPasswordValidator(value1, value2) {
   if((value2.length >= MIN_CHARS && value2.length <= MAX_CHARS) && value1 == '') {		
     return{
       field: 're_password',
       message: 'Vui lòng nhập lại mật khẩu'
     }
   }
   if ((value2.length >= MIN_CHARS && value2.length <= MAX_CHARS) && (value1 != value2)) {
     return{
       field: 're_password',
       message: 'Mật khẩu không đúng'
     }
   }
   return false;
   }
 
   function loginValidator(value1, value2) {
   if (value1 === '') {
     return{
       field: 'nameLogin',
       message: 'Bạn chưa nhập tên đăng nhập'
     }
   }
   var boolean = false;
   var valueMK = 0;
   var valueTK = 0;
   var accLogin = mangTK;
 

   //user
   for(var i=0;i<accLogin.length;i++)
   {
     if(accLogin[i].USERNAME==value1 && accLogin[i].PASSWORD==value2) 
     {

   
      boolean = true;
       valueMK = 1;
       valueTK = 1;	
       break;
     }
     if (accLogin[i].USERNAME == value1 &&  accLogin[i].passwords !== value2) {
       valueTK = 1;
     }
     if (accLogin[i].USERNAME == value1 && accLogin[i].passwords == value2) {
       valueMK = 1;
     }
   }
 
   
   if(boolean) {
   return false
   } else if(!boolean) {

   if (valueTK == 0) {
     return{
       field: 'nameLogin',
       message: 'Tên đăng nhập không tồn tại'
     }
   }
   else if (valueTK == 1 && value2 === '') {
     return{
       field: 'passLogin',
       message: 'Bạn chưa nhập mật khẩu'
     }
   }
   else if (valueMK == 0) {
     return{
       field: 'passLogin',
       message: 'Mật khẩu sai, vui lòng nhập lại'
     }
   }
   return false
 }
 }
 
 function resetDom() {
  nameL.classList.remove('form__invalid');
  passL.classList.remove('form__invalid');
  nameS.classList.remove('form__invalid');
  usernameS.classList.remove('form__invalid');
  pass.classList.remove('form__invalid');
  re_pass.classList.remove('form__invalid');
  phone.classList.remove('form__invalid');
  email.classList.remove('form__invalid');
 
   document.querySelectorAll('.errorMessage').forEach(function(errMsg) {
    errMsg.parentNode.removeChild(errMsg)
   })
 }
 
 function DOMRender(testResult) {
 const element = document.createElement('small');
 element.textContent = testResult.message;
 element.classList.add('errorMessage');
 
 switch(testResult.field) {
   case 'userSignup':
     nameS.classList.add('form__invalid');
     nameS.insertAdjacentElement('afterend', element);
     break;
  case 'username':
    usernameS.classList.add('form__invalid');
    usernameS.insertAdjacentElement('afterend', element);
    break;
   case 'passSignup':
     pass.classList.add('form__invalid');
     pass.insertAdjacentElement('afterend', element);
     break;
   case 're_password':
     re_pass.classList.add('form__invalid');
     re_pass.insertAdjacentElement('afterend', element);
     break;
   case 'nameLogin':
     nameL.classList.add('form__invalid');
     nameL.insertAdjacentElement('afterend', element);
     break;
   case 'passLogin':
     passL.classList.add('form__invalid');
     passL.insertAdjacentElement('afterend', element);
     break;
  case 'emailInput':
      email.classList.add('form__invalid');
      email.insertAdjacentElement('afterend', element);
      break;
  case 'phoneInput':
      phone.classList.add('form__invalid');
      phone.insertAdjacentElement('afterend', element);
      break;
   }
 }

 function resetInput() {
   userSignup.value = '';
   username.value = '';
   passSignup.value = '';
   re_password.value = '';
   userName.value = '';
   password.value = '';
   emailInput.value = '';
   phoneInput.value = '';
 }
 

 
//  signupForm.addEventListener('click', function(e){
$(document).ready(function(){
  $("#DK_ThanhCong").click(function(e) {
    e.preventDefault();
 
    resetDom();
  
    validationsList = [
      userNameValidator(userSignup.value),
      nameValidator(username.value),
      passwordValidator(passSignup.value),
      confirmPasswordValidator(re_password.value, passSignup.value),
      phoneValidator(phoneInput.value),
      emailValidator(emailInput.value),
    ]
  
    var filteredValidationList = validationsList.filter(function(item) {
      return item !== false;
      }) 
  
      if (filteredValidationList.length > 0) {
      filteredValidationList.forEach(function(testResult){
        DOMRender(testResult);
      })
      console.log(validationsList);
      } else {

     
        
      console.log('======== SUCCESS ========');
      console.log(number(mangTK));
      var i = number(mangTK) + 1;
      console.log(i);
      
      
      var temp = {
        IdTK: "KH"+ i,
        USERNAME: userSignup.value,
        PASSWORD: passSignup.value,
        MaQuyen: null,
        TrangThai: 0,
        TEN: ten(username.value),
        HO_DEM: ho_dem(username.value),
        SDT: phoneInput.value,
        email: emailInput.value,
        DiaChi: null,
      }

      mangTK.push(temp)
      console.log(mangTK);
      
      
      console.log({
        IdTK: "KH"+ i,
        USERNAME: userSignup.value,
        PASSWORD: passSignup.value,
        MaQuyen: null,
        TrangThai: 0,
        TEN: ten(username.value),
        HO_DEM: ho_dem(username.value),
        SDT: phoneInput.value,
        email: emailInput.value,
        DiaChi: null,
      });

      
      var user = $("#userSignup").val();
      var pass = $("#passSignup").val();
     
      

      console.log(user);
      
      $.ajax({
        type : 'POST', 
        url : 'data.php', // file php xử lý dữ liệu
        data:{ user: user,
               pass: pass,
               IdTK: "KH"+i,
               TEN : ten(username.value) ,
               HO_DEM: ho_dem(username.value),
               SDT: phoneInput.value,
               email: emailInput.value,
               DiaChi: null}, // gửi data từ ajax lên php
        success : function(data)  
               {    
  
               }
               
         });
  
          container.classList.add('sign-in-mode');
          container.classList.remove('sign-up-mode');
      customAlert('Bạn đã đăng ký thành công!','success');
      resetInput();
      return true
    }	
  })
})
   

//  var loginForm = document.getElementById('Login');
// var arrValidater = []
// $(document).ready(function(){
//   $("#login").click(function(e){
//     e.preventDefault();

//     resetDom();
  
//     if (loginValidator(userName.value, password.value) !== false) {
//       DOMRender(loginValidator(userName.value, password.value))
//     } else {
    
    
//     document.location="../index.php";
//     customAlert('Bạn đã đăng ký thành công!','success');
//     var user = userName.value;
//     var pass = password.value;

//     $.ajax({
//       type : 'POST', 
//       url : 'login.php', // file php xử lý dữ liệu
//       data:{ 
//             user: user,
//             pass: pass,
//             }, // gửi data từ ajax lên php
//       success : function(data)  
//             {    

//             }
            
//       });

//     // document.querySelector('.user').innerHTML = '<img src="img/iconuser.png" alt="user"/><p>'+username.valuea+'<p>';


//   // yId("click_login").innerHTML='<img src="image/2x/baseline_perm_identity_black_18dp.png" style="float:left; margin-top:25px"/>'+'<div class="username">'+name+'<div class="logout" onclick="logout();">Logout</div></div>';

//     resetInput();
//     return true;
//     }
    
//   })

// })


const sign_in_btn = document.querySelector("#sign-in-button");
const sign_up_btn = document.querySelector("#sign-up-button");
const container = document.querySelector('.container');
const sign_in_form = document.getElementById("sign-in-form");
const sign_up_form = document.getElementById("sign-up-form");
const contentLeft = document.getElementById('contentLeft');
const contentRight = document.getElementById('contentRight');


// console.log(container);

sign_up_btn.addEventListener('click', ()=> {
    container.classList.add('sign-up-mode');

    container.classList.remove('sign-in-mode');
    // container.classList.add('sign-in-mode');
    contentRight.innerHTML = arrContent[randomInt(0,arrContent.length)]
});

sign_in_btn.addEventListener('click', ()=> {


    container.classList.add('sign-in-mode');
    
    container.classList.remove('sign-up-mode');
    contentLeft.innerHTML = arrContent[randomInt(0,arrContent.length)]
    
});

function number(arr) {
  const p = /KH/;
  var arrKH = [];
  for(var i = 0; i < arr.length; i++) {
   if(p.test(arr[i].IdTK))
    arrKH.push(arr[i].IdTK)
  }
  return arrKH.length;
}

function ten(value) {
  const tenparrent = /[a-z]/gmi
  var arr = [];
  var arrTen = [];
  arr = value.split(' ');
  arr.forEach(item => {
      if(tenparrent.test(item)){
          arrTen.push(UpperCase(item))
      }
  });
  return arrTen[arrTen.length-1]
}


function ho_dem(value) {
  const tenparrent = /[a-z]/gmi
  var arr = [];
  var array = []
  var arrHo_dem = []
  arr = value.split(' ');
  arr.forEach(item => {
      if(tenparrent.test(item)){
          array.push(UpperCase(item))
      }
  });
  if(array.length == 1) {
      return null;
  } else {
      for(var i = 0; i<array.length-1; i++) {
          arrHo_dem.push(array[i]);
      }
      return arrHo_dem.join(' ');
  }
  
}

function UpperCase(string) 
{
  return string.charAt(0).toUpperCase() + string.slice(1);
}


function customAlert(message,type) {
	if (type=='success') {
		document.getElementById("customalert").style.backgroundColor = '#4CAF50';
	}
	if (type=='warning') {
		document.getElementById("customalert").style.backgroundColor = '#f44336';
	}
	document.getElementById("customalert").innerHTML = message;
	var x = document.getElementById("customalert");
	x.className = "show";
	setTimeout(function(){ x.className = x.classList.remove("show"); }, 3500);
}

function randomInt(min,max) {
  return Math.floor(Math.random() * (max-min)) + min;
}

console.log(arrContent[randomInt(0,arrContent.length)]);


$(document).ready(function()
{ 
   var taikhoan=[];

	 $("#login").click( function(event){
		event.preventDefault();
		var user=$("#nameLogin").val();
		var pass=$("#passLogin").val();

		$.ajax({
			type : 'POST', 
			url : '../taikhoan.php',
			dataType:'json',
			data:{ user: user, pass: pass },
			 success : function(data)  
					   {   
						
						taikhoan=data;
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