window.onload = function () {
    var m12 = document.getElementById('m12').value;
    var m34 = document.getElementById('m34').value;
    var m56 = document.getElementById('m56').value;
    var m79 = document.getElementById('m79').value;
    var m1012 = document.getElementById('m1012').value;
 
    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "light1", // "light2", "dark1", "dark2"
        animationEnabled: false, // change to true		
        title:{
            text: "thống kê đơn hàng theo tháng "
        },
        data: [
        {
            // Change type to "bar", "area", "spline", "pie",etc.
            type: "column", 
            dataPoints: [
                { label: "tháng 1-2",  y: 3  },
                { label: "tháng 3-4", y: 12  },
                { label: "tháng 5-6", y: 0  },
                { label: "tháng 7-9",  y: 0  },
                { label: "tháng 10-12",  y: 0  }
            ]
        }
        ]
    });
    var n1 = document.getElementById('num1').value;
    var n2 = document.getElementById('num2').value;
    var n3 = document.getElementById('num3').value;
    var n4 = document.getElementById('num4').value;
    var i = 0,j=0,k=0,l=0;
    
        if (i == 0) {
            i = 1;
            var elem1 = document.getElementById("load-number-manager");
            var width1 = 0;
            var id1 = setInterval(frame, 1);
            function frame() {
            if (width1 >= n1) {
                clearInterval(id1);
                i = 0;
            } else {    
                width1++;
                
                elem1.innerHTML = width1 ;
            }
            }
        }
        if (j == 0) {
            j = 1;
            var elem2 = document.getElementById("load-number-admin");
            var width2 = 0;
            var id2 = setInterval(frame, 10);
            function frame() {
            if (width2 >= n2) {
                clearInterval(id2);
                j = 0;
            } else {    
                width2++;
                
                elem2.innerHTML = width2 ;
            }
            }
        }
        if (k == 0) {
            k = 1;
            var elem3 = document.getElementById("load-number-product");
            var width3 = 0;
            var id3 = setInterval(frame, 10);
            function frame() {
            if (width3 >= n3) {
                clearInterval(id3);
                k = 0;
            } else {    
                width3++;
                
                elem3.innerHTML = width3 ;
            }
            }
        }
        if (l == 0) {
            l = 1;
            var elem4 = document.getElementById("load-number-sold");
            var width4 = 0;
            var id4 = setInterval(frame, 10);
            function frame() {
            if (width4 >= n4) {
                clearInterval(id4);
                l = 0;
            } else {    
                width4++;
                
                elem4.innerHTML = width4 ;
            }
            }
        }
        
    chart.render();
    }
  
  
    window.onscroll = function() {scrollFunction()};
    // khai báo hàm scrollFunction
    function scrollFunction() {
        // Kiểm tra vị trí hiện tại của con trỏ so với nội dung trang
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            //nếu lớn hơn 20px thì hiện button
            document.getElementById("myBtnTop").style.display = "block";
        } else {
             //nếu nhỏ hơn 20px thì ẩn button
            document.getElementById("myBtnTop").style.display = "none";
        }
    }
    //gán sự kiện click cho button
    document.getElementById('myBtnTop').addEventListener("click", function(){
        //Nếu button được click thì nhảy về đầu trang
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    });
    function elementdrowdown() {
      document.getElementById("myDropdown-in-ele-prdt").classList.toggle("show-in-ele-prdt");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn-in-ele-prdt')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show-in-ele-prdt-in-ele-prdt')) {
            openDropdown.classList.remove('show-in-ele-prdt');
          }
        }
      }
    }
    function elementdrowdown1() {
      document.getElementById("myDropdown-in-ele-prdt").classList.toggle("show-in-ele-prdt");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn-in-ele-prdt')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show-in-ele-prdt-in-ele-prdt')) {
            openDropdown.classList.remove('show-in-ele-prdt');
          }
        }
      }
    }
    var modaldlteleprct = document.getElementById('form-accept-delete-product');
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modaldlteleprct) {
        modaldlteleprct.style.display = "none";
    }
  }
  function checkPNumber(){
    var msg,msg1;
    var pos = /((03|09|05|04|08|02|07)+([0-9]{8}))\b/g ;
    if((document.FormEditManager.SDTNV.value).match(pos) || document.FormEditManager.SDTNV.value.length == 0 ){
        msg = "";
    }
    else {
        msg = "isn't correct ( 0234567891 )";
    }
     document.getElementById('noti-PNum-Mng').innerText = msg;
     if((document.FormEditCus.SDTKH.value).match(pos) || document.FormEditCus.SDTKH.value.length == 0 ){
      msg1 = "";
  }
  else {
      msg1 = "isn't correct ( 0234567891 )";
  }
   document.getElementById('noti-PNum-Cus').innerText = msg1;
  }
  
  function checkName(){
    var msg,msg1;
    var msg2,msg3;
    var pos = /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+(([a-zA-ZZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ])?[a-zA-ZZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]*)*$/g ;
    if((document.FormEditManager.TenNV.value).match(pos) || document.FormEditManager.TenNV.value.length == 0){
        msg = "";
    }
    else {
        msg = "isn't correct (Quân)";
    }
    if((document.FormEditManager.HoDemNV.value).match(pos) || document.FormEditManager.HoDemNV.value.length == 0){
      msg1 = "";
  }
  else {
      msg1 = "isn't correct (Trần Minh)";
  }
     document.getElementById('noti-Name-Mng').innerText = msg;
     document.getElementById('noti-HoDem-Msg').innerText = msg1;
     if((document.FormEditCus.TenKH.value).match(pos) || document.FormEditCus.TenKH.value.length == 0){
      msg2 = "";
  }
  else {
      msg2 = "isn't correct (Quân)";
  }
  if((document.FormEditCus.HoDemKH.value).match(pos) || document.FormEditCus.HoDemKH.value.length == 0){
    msg3 = "";
  }
  else {
    msg3 = "isn't correct (Trần Minh)";
  }
   document.getElementById('noti-Name-Cus').innerText = msg2;
   document.getElementById('noti-HoDem-Cus').innerText = msg3;
  }
  
  function checkAddress(){
    var msg,msg1;
    var pos = /^[a-zA-Z0-9,/ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+(([a-zA-Z0-9,/ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ])?[a-zA-Z0-9,/ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]*)*$/g ;
    if((document.FormEditManager.DiaChiNV.value).match(pos) || document.FormEditManager.DiaChiNV.value.length == 0){
        msg = "";
    }
    else {
        msg = "isn't correct (28A làng tăng phú)";
    }
    
     document.getElementById('noti-Address-Mng').innerText = msg;
     if((document.FormEditCus.DiaChiKH.value).match(pos) || document.FormEditCus.DiaChiKH.value.length == 0){
      msg1 = "";
  }
  else {
      msg1 = "isn't correct (28A làng tăng phú)";
  }
  
   document.getElementById('noti-Address-Cus').innerText = msg1;
  }
  function checkEmail(){
    var msg,msg1;
    var pos = /^(([A-Za-z0-9])+@([a-zA-Z])+((?:\.[a-zA-Z0-9-]+){1,3}))$/g ;
    if((document.FormEditManager.EmailNV.value).match(pos) || document.FormEditManager.EmailNV.value.length == 0 ){
        msg = "";
    }
    else {
        msg = "isn't correct ( Abc@gmail.com )";
    }
     document.getElementById('noti-Email-Mng').innerText = msg;
     if((document.FormEditCus.EmailKH.value).match(pos) || document.FormEditCus.EmailKH.value.length == 0 ){
      msg = "";
  }
  else {
      msg1 = "isn't correct ( Abc@gmail.com )";
  }
   document.getElementById('noti-Email-Cus').innerText = msg1;
  }
  
  function checkPrice(){
      var msg;
      var pos = /\d{1,3}(?:[.,]\d{3})*(?:[.,]\d{2})?/g ;
      if((document.FormEditProduct.DonGia.value).match(pos) || document.FormEditProduct.DonGia.value.length == 0 ){
          msg = "";
      }
      else {
          msg = "isn't correct (1.000.000 )";
      }
       document.getElementById('noti-DonGia-pro').innerText = msg;
    }
    function checkTT(){
      var msg;
      if( document.FormEditAccount.TrangThai.value.length == 0 ){
          msg = "";
      }
      else if( document.FormEditAccount.TrangThai.value == 0 ){
          msg = "account is On!";
      }
      else if(document.FormEditAccount.TrangThai.value == 1){
          msg = "account is Off";
      }
      else {
          msg = "isn't correct ( 1 for 0n ::: 0 for Off)";
      }
       document.getElementById('noti-TT-Acc').innerText = msg;
    }