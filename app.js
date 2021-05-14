
// var data = document.getElementById("data").value;

function decrease (n) {

	var data = Number(document.getElementById("data").value);
	
	data+=n;
	if(data<0) data=0;
	document.getElementById("data").value = data;

}


function add_cart(id){
	
	console.log(id);
	$(document).ready(function()
	{ 
		var taikhoan;
		var soluong= $('#data').val();
	  load_data();
	  function load_data()
	   {
		$.ajax({
			type : 'POST', 
			url : 'loc_taikhoan.php',
			dataType:'text',
			 success : function(data)  
					   {    
							taikhoan=data;
							if(taikhoan==0){

							}
							else{

							
								$.ajax({
									type : 'POST', 
									url : 'giohang.php',
									dataType:'text',
									data:{ manggiohang: id, taikhoan:taikhoan, soluong:soluong },
									success : function(data2)  
											{    
												console.log(data2);
												$.ajax({
													type : 'POST',
													url : 'sosp.php',
													data:{taikhoan:taikhoan},
													dataType:'text',
													success : function(data1)
																{ 
																	var y=''+data1+' sản phẩm';
																	$('#sosp').html(y);
																}
													});
													return false;
											}
											
									});
									alert("Bạn đã thêm "+soluong+ " sản phẩm");
									return false;
								}
					   }
					   
			 });
	   };
	           return false;
	     });
	}

function formatNumber(num) { // định dạng giá tiền
	return Number(num).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') +'₫';
}

// function increase () {
//     data++;
//     document.getElementById("data").value = Number(data);
//     console.log(data);
// }

function content() {
    document.getElementById("comment_review").style.display = "none";
    document.getElementById("chitiet").style.display = "none";
    document.getElementById("h2").style.display = "block";    
    document.getElementById("h2").innerHTML = '"<h2>'+html+'</h2>"';
}

function infomation() {
    // document.querySelector(".infomation_displayed").innerHTML = "";
    document.getElementById("comment_review").style.display = "none";
    document.getElementById("h2").style.display = "none";
    document.getElementById("chitiet").style.display = "block";
}

function comment_review(){
    document.getElementById("comment_review").style.display = "block";
    document.getElementById("h2").style.display = "none";
    document.getElementById("chitiet").style.display = "none";
}


var mangsach=[];
$(document).ready(function()
{ 
	// var mangsach=[];
	var mangdonhang=[];
	var mangspdonhang=[];
	var mangiddonhang=[];
  load_datasach();
  hienthi();
  load_giohang(mangsach);
  load_datatheloai();
  load_datatacgia();
  load_datanxb();

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
                          
                          listPage(totalPage(mangsach)); 
                          document.getElementById('page1').style.backgroundColor = 'darkorange';
                          document.getElementById('page1').style.color = 'white';
                          document.getElementById('page1').style.borderColor = 'darkorange';
                          clickNextLeft1();      
						  
                          sanpham_search(mangsach);                 
                          ChangePage(mangsach);  
						
                     }      
           });;
     };

	

     function load_datatheloai()
	 {
	   $.ajax({
			type : 'POST',
			url : 'theloai.php',
			dataType:'json',
			 success : function(data)
					   { 
							html='';
							$.each(data, function (key, item){							//   mangtheloai.push(item); 
								html+='<li>';
									html+='<input type="checkbox" id="'+item.IdTheLoai+'" name="'+item.TenTheLoai+'" value="'+item.TenTheLoai+'">';
									html+='<label>&nbsp;'+item.TenTheLoai+'</label>';
								html+='</li>';
							}); 
							$('#theloai').html(html);                         
					   }      
			 });
			 return false;
	   };

	   function load_datatacgia()
	   {
		 $.ajax({
			  type : 'POST',
			  url : 'tacgia.php',
			  dataType:'json',
			   success : function(data)
						 { 
							  html='';
							  $.each(data, function (key, item){							//   mangtheloai.push(item); 
								  html+='<li>';
									  html+='<input type="checkbox" id="'+item.IdTacGia+'" name="'+item.TenTacGia+'" value="'+item.TenTacGiai+'">';
									  html+='<label>&nbsp;'+item.TenTacGia+'</label>';
								  html+='</li>';
							  }); 
							  $('#tacgia').html(html);                         
						 }      
			   });
			   return false;
		 };

		function load_datanxb()
	   {
		 $.ajax({
			  type : 'POST',
			  url : 'nxb.php',
			  dataType:'json',
			   success : function(data)
						 { 
							  html='';
							  $.each(data, function (key, item){							//   mangtheloai.push(item); 
								  html+='<li>';
									  html+='<input type="checkbox" id="'+item.IdNXB+'" name="'+item.TenNXB+'" value="'+item.TenNXB+'">';
									  html+='<label>&nbsp;'+item.TenNXB+'</label>';
								  html+='</li>';
							  }); 
							  $('#nxb').html(html);                         
						 }      
			   });
			   return false;
		 };


		
 });
