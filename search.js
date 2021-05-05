let perPage = 20;
let currentPage = 1;
let start = 0;
let end = perPage;

function getCurrentPage(currentPage){
  start = (currentPage - 1) * perPage;
  end = currentPage * perPage;
}

function totalPage(item_array){ // tính tổng số trang của mảng item_array
  var Total = Math.ceil(item_array.length / perPage);
  return Total;
}

function listPage (Total_pages){ // xuất ra số trang
  let html ='';
  html += '<button id="nextLeft"><</button>';
  for (let i = 1; i<= Total_pages;i++){
    html += `<div id="page${i}">${i}</div>`;
  }
  html += '<button id="nextRight">></button>';
  document.getElementById('page').innerHTML = html;
}

function quaylaidautrang(){
  var chieucaoht = self.pageYOffset;
  // lấy chiều cao hiện tại của trang
  var set = chieucaoht;
  var run = setInterval(function(){
      chieucaoht = chieucaoht - 1*set;
      window.scrollTo(0,chieucaoht);    
      if(chieucaoht <= 0){
          clearInterval(run);
      }        
  },15)

}

function list_show(n){
    if(n==1){
      document.getElementById("list_show").style.display='block';
    }
    else{
      document.getElementById("list_show").style.display='none';
    }
}

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

function antrang(){
	document.getElementById('nextLeft').style.borderColor = 'gray';
	document.getElementById('nextLeft').style.backgroundColor = 'whitesmoke';
	document.getElementById('nextLeft').style.color = 'gray';
}
function hientrang(){
	document.getElementById('nextLeft').style.borderColor = 'black';
	document.getElementById('nextLeft').style.backgroundColor = 'white';
	document.getElementById('nextLeft').style.color = 'black';
}


function formatNumber(num) { // định dạng giá tiền
	return Number(num).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') +'₫';
}

function sanpham_search(mangsach){
  var html='';
  const contens = mangsach.map((item, index) => {
    if(index >= start && index < end){
      html+='<div class="item_search">';
        html+='<div class="top_item">';
          html+='<img src="'+item.HinhAnh+'" alt="'+item.HinhAnh+'">';
        html+='</div>';
        html+='<div class="bot_item">';
          html+='<div class="name_book">';
            html+='<a href="#" class="product_title" title="'+item.TenSach+'">';
              html+='"'+item.TenSach+'"';
            html+='</a>';
          html+='</div>';
          html+='<div class="price_book">'+formatNumber(item.DonGia)+'</div>';
          html+='<div class="div_themvaogio">THÊM VÀO GIỎ HÀNG</div>';
        html+='</div>';
      html+='</div>'; 
    }
  });
  document.getElementById('product_item').innerHTML = html;
  getCurrentPage(1);
}

function ChangePage(item_array){ // đổi trang

	const numberPage = document.querySelectorAll('#page div');
	const nextRight = document.getElementById('nextRight'); // thay đổi id theo mảng item_array
	const nextLeft = document.getElementById('nextLeft'); // thay đổi id theo mảng item_array
	for(let i=0; i<numberPage.length; i++){
		numberPage[i].addEventListener('click' , ()=>{
			document.getElementById(`page${i+1}`).style.backgroundColor = 'darkorange';
			document.getElementById(`page${i+1}`).style.color = 'white';
			document.getElementById(`page${i+1}`).style.borderColor = 'darkorange';

			for(let j=0;j<numberPage.length;j++){
				if(j!=i){
					document.getElementById(`page${j+1}`).style.backgroundColor = 'white';
					document.getElementById(`page${j+1}`).style.color = 'black';
					document.getElementById(`page${j+1}`).style.borderColor = 'black';
				}
			}
			if(i==(numberPage.length-1)){
				clickNextLeft2();
				clickNextRight1();
			}
			else{
				if(i==0){
					clickNextLeft1();
					clickNextRight2();
				}
				else{
					clickNextLeft2();
					clickNextRight2();
				}
			}
			const value = i + 1;
			currentPage=value;
			getCurrentPage(currentPage);
			sanpham_search(item_array);
			quaylaidautrang();
			
		})
	}


	nextRight.addEventListener('click', ()=> {
		clickNextLeft2();
		currentPage++;
		if(currentPage<=totalPage(item_array)){
			quaylaidautrang();
		}
		if(currentPage > totalPage(item_array)){
			currentPage = totalPage(item_array);
		}
		if(currentPage == totalPage(item_array)){
			clickNextRight1();
		}
		getCurrentPage(currentPage);
		sanpham_search(item_array);
		for(let i=1;i<=currentPage;i++){
			if(i==currentPage){
				document.getElementById(`page${i}`).style.backgroundColor = 'darkorange';
				document.getElementById(`page${i}`).style.borderColor = 'darkorange';
				document.getElementById(`page${i}`).style.color = 'white';
			}
			for(let j=1;j<=i;j++){
				if(j<i){
					document.getElementById(`page${j}`).style.backgroundColor = 'white';
					document.getElementById(`page${j}`).style.borderColor = 'black';
					document.getElementById(`page${j}`).style.color = 'black';
				}
			}
		}
	
	})

	nextLeft.addEventListener('click', ()=> {
		clickNextRight2();
		currentPage--;
		if(currentPage>=1){
			quaylaidautrang();
		}
		if(currentPage <= 1){
			currentPage = 1;
		}
		if(currentPage == 1){
			clickNextLeft1();

		}
		getCurrentPage(currentPage);
		sanpham_search(item_array);
		for(let i=totalPage(item_array);i>=currentPage;i--){
			if(i==currentPage){
				document.getElementById(`page${i}`).style.backgroundColor = 'darkorange';
				document.getElementById(`page${i}`).style.borderColor = 'darkorange';
				document.getElementById(`page${i}`).style.color = 'white';
			}
			for(let j=totalPage(item_array);j>=i;j--){
				if(j>i){
					document.getElementById(`page${j}`).style.backgroundColor = 'white';
					document.getElementById(`page${j}`).style.borderColor = 'black';
					document.getElementById(`page${j}`).style.color = 'black';
				}
			}
		}
	})	
}

function xoadau(str) {
    str = str.toLowerCase();
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    str = str.replace(/đ/g, "d");
    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g, " ");
    str = str.replace(/ + /g, " ");
    str = str.trim();
    return str;
} 

function tangdan(this_array, n) 
{
    for(var j=1;j<n;j++)
    {
        var key=this_array[j];
		var i=j-1;

        while(i>=0 && Number(this_array[i].DonGia) > Number(key.DonGia))
        {
            this_array[i+1]=this_array[i];
            i=i-1;
        }
        this_array[i+1]=key;
	}
	return this_array;
}

function giamdan(this_array, n) 
{
    for(var j=1;j<n;j++)
    {
        var key=this_array[j];
		var i=j-1;

        while(i>=0 && Number(this_array[i].DonGia) < Number(key.DonGia))
        {
            this_array[i+1]=this_array[i];
            i=i-1;
        }
        this_array[i+1]=key;
	}
	return this_array;
}


var mangsach=[];
$(document).ready(function()
{ 
  load_data();
//   load_datamenu();
  load_datatheloai();
  load_datatacgia();
  load_datanxb();

  function load_data()
   {
     $.ajax({
          type : 'POST', //Sử dụng kiểu gửi dữ liệu POST
          url : 'db_connect.php', //gửi dữ liệu sang trang data.php
          dataType:'json',
           success : function(data)  // Hàm thực thi khi nhận dữ liệu được từ server
                     { 
                      
                          $.each(data, function (key, item){
                            mangsach.push(item);
                            
                          });
                          listPage(totalPage(mangsach)); 
                          document.getElementById('page1').style.backgroundColor = 'darkorange';
                          document.getElementById('page1').style.color = 'white';
                          document.getElementById('page1').style.borderColor = 'darkorange';
                          clickNextLeft1();      

                          sanpham_search(mangsach);                 
                          ChangePage(mangsach);                       
                     }
                     
           });
           return false;
     };

	// function load_datamenu()
	//  {
	//    $.ajax({
	// 		type : 'POST',
	// 		url : 'menu.php',
	// 		dataType:'json',
	// 		 success : function(data)
	// 				   { 
	// 						html='<option id="all_menu" selected>&nbsp; Tất Cả</option>';
	// 						$.each(data, function (key, item){							//   mangtheloai.push(item); 
	// 							html+='<li>';
	// 								html+='<option id="'+item.IdMenu+'">&nbsp;'+item.TenMenu+'</option>';
	// 							html+='</li>';
	// 						}); 
	// 						$('#menu').html(html);                         
	// 				   }      
	// 		 });
	// 		 return false;
	//    };

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

function rutgon(mangsach_container){
	listPage(totalPage(mangsach_container)); 
	document.getElementById('page1').style.backgroundColor = 'darkorange';
	document.getElementById('page1').style.color = 'white';
	document.getElementById('page1').style.borderColor = 'darkorange';
	clickNextLeft1();      
	quaylaidautrang();
	sanpham_search(mangsach_container);                 
	ChangePage(mangsach_container); 
}

function search(array_sach,array_theloai,array_tacgia,array_nxb){
	var sach=[];
	if(array_theloai.length>0){
		for(let i=0;i<array_sach.length;i++){
			if(array_theloai.includes(array_sach[i].IdTheLoai)==true){
				sach.push(array_sach[i]);
			}
		}

	}

	if(array_tacgia.length>0){
		for(let j=0;j<array_sach.length;j++){
			if(array_tacgia.includes(array_sach[j].IdTacGia)==true){
				sach.push(array_sach[j]);
			}
		}

	}
	if(array_nxb.length>0){
		for(let j=0;j<array_sach.length;j++){
			if(array_nxb.includes(array_sach[j].IdNXB)==true){
				sach.push(array_sach[j]);
			}
		}

	}

	if(sach.length>0) return sach;
	else return array_sach;

}


 $(document).ready(function()
{ 
	var	mangsach=[];
	load_data();
	function load_data()
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
					  }						  
			});
			return false;
	  };

	  var mangsach_container=[];
	  var checkbox_TLlist=[];
	  var checkbox_TGlist=[];
	  var checkbox_NXBlist=[];
	  

	  $("#sapxep").on('change',function(event){	
		event.preventDefault();
		var sapxep=$("#sapxep").val();
		var mang1=[];
		var mang2=[];
		if(mangsach_container.length>0) mang1=mangsach_container;
		else mang1=mangsach;

		if(sapxep=='ngaunhien'){
			mang2=mang1;
		}

		else if(sapxep=="tangdan"){
			mang2=tangdan(mang1,mang1.length);
			console.log(mang2);
		}
		else{
			mang2=giamdan(mang1,mang1.length);
		}
		
		mangsach_container=search(mang2,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
		rutgon(mangsach_container);

	});

	$("#search_button").click(function(event){	
		event.preventDefault();
		var mang1=[];
		var mang2=[];
		mangsach_container=search(mangsach,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
		if(mangsach_container.length>0) mang1=mangsach_container;
		else mang1=mangsach;

		var timkiem = xoadau($("#search_item").val());
		if(timkiem==''){mang2=mang1}
		else{
			for(let i=0;i<mang1.length;i++)
			{
				if(mang1[i].TenSach.search(timkiem)!=-1){
					mang2.push(mang1[i])
				}
			}
		}
		
		mangsach_container=search(mang2,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
		rutgon(mangsach_container);

	});

	$("#timtheogia_input").on('change', function(event){
		
	event.preventDefault();
	var mang1=[];
	var mang2=[];
	var giatu = Number($("#giatu").val());
	var giaden = Number($("#giaden").val());

	if(mangsach_container.length>0){
		mang1=mangsach_container;
	}
	else{
		mang1=mangsach;
	}

	if(giatu!=0 && giaden!=0){
		for(let i=0;i<mang1.length;i++){
			if(Number(mang1[i].DonGia)>=giatu && Number(mang1[i].DonGia)<=giaden){
				mang2.push(mang1[i]);					
			}
			
		}
	}
	else if(giatu!=0 && giaden==0){
		for(let j=0;j<mang1.length;j++){
			if(Number(mang1[j].DonGia)>=giatu){
				mang2.push(mang1[j]);
			}
		}
	}
	else if(giatu==0 && giaden!=0){
		for(let k=0;k<mang1.length;k++){
			if(Number(mang1[k].DonGia)<=giaden){
				mang2.push(mang1[k]);
			}
		}
	}
	else{
		mang2=mang1;
	}
	mangsach_container=mang2;

	mangsach_container=search(mangsach_container,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
	rutgon(mangsach_container);

	});  

	$("#theloai").on('change', function(event){
		event.preventDefault();
		var checkbox_TL = $("#theloai input:checkbox:checked");
		checkbox_TL.map(function(){
		checkbox_TLlist.push(this.id);
		});
		var unchecked_TLlist=[];
		var uncheck_TL = $("#theloai input:checkbox:not(:checked)");
		uncheck_TL.map(function(){
			unchecked_TLlist.push(this.id);
			});

			for(let i=0;i<checkbox_TLlist.length;i++)
			{
				if(unchecked_TLlist.includes(checkbox_TLlist[i])==true)
				{

					const remove = checkbox_TLlist.splice(i, 1);
				}
			}

		mangsach_container=search(mangsach,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
		rutgon(mangsach_container);

	  });

	  $("#tacgia").on('change', function(event){
		event.preventDefault();
		var checkbox_TG= $("#tacgia input:checkbox:checked");
		checkbox_TG.map(function(){
		checkbox_TGlist.push(this.id);
		});

			var unchecked_TGlist=[];
			var uncheck_TG = $("#tacgia input:checkbox:not(:checked)");
			uncheck_TG.map(function(){
			unchecked_TGlist.push(this.id);
			});

			for(let i=0;i<checkbox_TGlist.length;i++)	
			{
				if(unchecked_TGlist.includes(checkbox_TGlist[i])==true)
				{

					const remove = checkbox_TGlist.splice(i, 1);
				}
			}

		mangsach_container=search(mangsach,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
		rutgon(mangsach_container);
	  });

	  $("#nxb").on('change', function(event){
		event.preventDefault();
		var checkbox_NXB= $("#nxb input:checkbox:checked");
		checkbox_NXB.map(function(){
		checkbox_NXBlist.push(this.id);
		});

		var unchecked_NXBlist=[];
		var uncheck_NXB = $("#nxb input:checkbox:not(:checked)");
		uncheck_NXB.map(function(){
		unchecked_NXBlist.push(this.id);
		});

		for(let i=0;i<checkbox_NXBlist.length;i++)	
		{
			if(unchecked_NXBlist.includes(checkbox_NXBlist[i])==true)
			{

				const remove = checkbox_NXBlist.splice(i, 1);
			}
		}



		mangsach_container=search(mangsach,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
		rutgon(mangsach_container);
	  });
	
	
 });

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
