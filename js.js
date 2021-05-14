
function move(){
	// var chieucaoht = self.pageYOffset;
	// // lấy chiều cao hiện tại của trang
	// var set = 500;
	// var run = setInterval(function(){
	// 	chieucaoht = chieucaoht - 1*set;
	// 	window.scrollTo(0,chieucaoht);    
	// 	if(chieucaoht <= 500){
	// 		clearInterval(run);
	// 	}        
	// },15)
}

function bin(id){
	var result = confirm("Bạn có chắn chắn muốn hủy đơn hàng này không?");
			if (result == true){
				$.ajax({
					type : 'POST', 
					url : 'xoahoadon.php',
					data : {id:id},
					 success : function(data) 
							   { 
								alert(data);
								location.reload();    
							   }						  
					 });
			}
			else{

			}
}


function date(){
				$.ajax({
					type : 'POST', 
					url : 'date.php',
					data : {id:id},
					 success : function(data) 
							   { 
								alert(data);
								location.reload();    
							   }						  
					 });
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
          html+='<a href="index_ct.php?id='+item[i].IdSach+'"><img src="'+item[i].HinhAnh+'" alt="'+item[i].HinhAnh+'" /></a>';
      html+='</div>';
      html+='<div class="info_div">';
        html+='<div class="name_book">';
          html+='<a href="index_ct.php?id='+item[i].IdSach+'" class="product_title" title="'+item[i].TenSach+'">';
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

var index_div2 = 0;
function sanpham_theoTL(id,n,item,idtl){
	var html = '';
	let dem=0;
	var i=index_div2 + n;
	while(dem<5){

		if(i<0){i=item.length-1}
		if(i==item.length){i=0} 
		html+='<div class="box item" id="'+item[i].IdSach+'">';
		html+='<div class="img_div">';
			html+='<a href="index_ct.php?id='+item[i].IdSach+'"><img src="'+item[i].HinhAnh+'" alt="'+item[i].HinhAnh+'" /></a>';
		html+='</div>';
		html+='<div class="info_div">';
			html+='<div class="name_book">';
			html+='<a href="index_ct.php?id='+item[i].IdSach+'" class="product_title" title="'+item[i].TenSach+'">';
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

	var theloai=new Array();
	theloai[0]=new Array(20001,20002,20003);
	theloai[1]=new Array(20006,20007,20008,20009);
	theloai[2]=new Array(20004,20005,20010,20011);
	theloai[3]=new Array(10001);
	theloai[4]=new Array(10002);
	theloai[5]=new Array(10003);

	document.getElementById(idtl).style.backgroundColor='#99c4c0'; 
						   for(let n=0;n<theloai.length;n++){  
							  if(theloai[n].includes(idtl)==true){
								  for(let m=0;m<theloai[n].length;m++)
									{
										if(theloai[n][m]!=idtl){
											document.getElementById(theloai[n][m]).style.backgroundColor='rgb(248, 91, 0)'; 
										}
									} 
							  }
}
}

var index_div3 = 0;
function sanphambc(id,n,item,value){
	
	var html = '';
  var dem=0;
  var x=value;
//   console.log(value);
  var i=index_div3 + n;
	while(dem<x){
		if(i<0){i=item.length-1}
		if(i==item.length){i=0} 
		html+='<div class="box item" id="'+item[i].IdSach+'">';
		html+='<div class="img_div">';
			html+='<a href="index_ct.php?id='+item[i].IdSach+'"><img src="'+item[i].HinhAnh+'" alt="'+item[i].HinhAnh+'" /></a>';
		html+='</div>';
		html+='<div class="info_div">';
			html+='<div class="name_book">';
			html+='<a href="index_ct.php?id='+item[i].IdSach+'" class="product_title" title="'+item[i].TenSach+'">';
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

function SP_TL(id){
	var theloai=new Array();
		theloai[0]=new Array(20001,20002,20003);
		theloai[1]=new Array(20006,20007,20008,20009);
		theloai[2]=new Array(20004,20005,20010,20011);
		theloai[3]=new Array(10001,0);
		theloai[4]=new Array(10002,0);
		theloai[5]=new Array(10003,0);
	var mangsach=[];
	$.ajax({
		type : 'POST',
		url : 'xulytheloai.php',
		data:{id:id},
		dataType:'json',
		 success : function(data)
				   { 
					
						$.each(data, function (key, item){
						  mangsach.push(item); 
						});
						for(let i=0;i<theloai.length;i++){
							if(theloai[i].includes(id)==true){
								var x='theloai'+(i+1)+'';
								sanpham_theoTL(x,0,mangsach,id);
							}
						}

					  
				   }      
		 });
}
// function sanphamgiohang(item){
// 	var html = '';
//     for(let i=0;i<4;i++){
//         html+='<div id="img_'+item.IdSach+'">';
//             html+='<img src="'+item.HinhAnh+'">';
//             html+='<span id="tensp">Men Like Gods (Collins Classics)</span>';
//             html+='<span id="dongia">53,000 đ</span>';
//             html+='<input type="number" name="soluong" id="soluong" value="1" min="0">';
//             html+='<span id="tonggia">53,000 đ</span>';
//         html+='</div>';
//     }

//     document.getElementById('spcart').innerHTML=html;

// }

var manggiohang=[];
function add_cart(id){
	var x='';
	x=id.substr(5);
	manggiohang.push(x);	
	// console.log(x);
	$(document).ready(function()
	{ 
		var taikhoan;
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

							$.ajax({
								type : 'POST', 
								url : 'giohang.php',
								dataType:'text',
								data:{ manggiohang: x, taikhoan:taikhoan, soluong:1 },
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
								return false;

					   }
					   
			 });
	   };
	           return false;
	     });
	}


function hienthi(){
  var url = window.location.href;
  var id = url.split('?');
  var t= id[1];
  if(t=='giohang'){
    document.getElementById('content_bannermain').style.display='none';
    document.getElementById('content').style.display='none';
    document.getElementById('content1').style.display='none';
    document.getElementById('main_search').style.display='none';
	document.getElementById('content_lsdonhang').style.display='none';
    document.getElementById('content_giohang').style.display='block';
    document.getElementById('title_html').innerHTML = 'Giỏ Hàng';
  }
  else if(t=='timkiem'){
    document.getElementById('content_bannermain').style.display='none';
    document.getElementById('content').style.display='none';
    document.getElementById('content1').style.display='none';
    document.getElementById('content_giohang').style.display='none';
	document.getElementById('content_lsdonhang').style.display='none';
    document.getElementById('main_search').style.display='block';
    document.getElementById('title_html').innerHTML = 'Tìm Kiếm';

  }
  else if(t=='lsdonhang'){
	document.getElementById('content_bannermain').style.display='none';
    document.getElementById('content').style.display='none';
    document.getElementById('content1').style.display='none';
    document.getElementById('content_giohang').style.display='none';
    document.getElementById('main_search').style.display='none';
	document.getElementById('content_lsdonhang').style.display='block';
    document.getElementById('title_html').innerHTML = 'Lịch Sử Đơn Hàng';
  }
}

// TÌM KIẾM 

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

function listPage(Total_pages){ // xuất ra số trang
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
  },25)

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
			if(numberPage==1){
				document.getElementById('nextLeft').style.display='none';
				document.getElementById('nextRight').style.display='none';
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

function formatNumber(num) { // định dạng giá tiền
	return Number(num).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') +'₫';
}

function sanpham_search(mangsach){
	var html='';
	const contens = mangsach.map((item, index) => {
	  if(index >= start && index < end){
		html+='<div class="item_search">';
		  html+='<div class="top_item">';
			html+='<a href="index_ct.php?id='+item.IdSach+'"><img src="'+item.HinhAnh+'" alt="'+item.HinhAnh+'"></a>';
		  html+='</div>';
		  html+='<div class="bot_item">';
			html+='<div class="name_book_search">';
			  html+='<a href="index_ct.php?id='+item.IdSach+'" class="product_title" title="'+item.TenSach+'">';
				html+='"'+item.TenSach+'"';
			  html+='</a>';
			html+='</div>';
			html+='<div class="price_book_search">'+formatNumber(item.DonGia)+'</div>';
			html+='<div class="div_themvaogio" id="cart_'+item.IdSach+'" onclick="add_cart(this.id)">THÊM VÀO GIỎ HÀNG</div>';
		  html+='</div>';
		html+='</div>'; 
	  }
	});
	document.getElementById('product_item').innerHTML = html;
	getCurrentPage(1);
}

function sanpham_lichsu(mangsach){
	var html='';
	const contens = mangsach.map((item, index) => {
	  if(index >= start && index < end){
		html+='<div class="item_search">';
		  html+='<div class="top_item">';
			html+='<a href="index_ct.php?id='+item.IdSach+'"><img src="'+item.HinhAnh+'" alt="'+item.HinhAnh+'"></a>';
		  html+='</div>';
		  html+='<div class="bot_item">';
			html+='<div class="name_book_search">';
			  html+='<a href="index_ct.php?id='+item.IdSach+'" class="product_title" title="'+item.TenSach+'">';
				html+='"'+item.TenSach+'"';
			  html+='</a>';
			html+='</div>';
			html+='<div class="price_book_search">'+formatNumber(item.DonGia)+'</div>';
			html+='<div class="div_themvaogio" id="cart_'+item.IdSach+'" onclick="add_cart(this.id)">THÊM VÀO GIỎ HÀNG</div>';
		  html+='</div>';
		html+='</div>'; 
	  }
	});
	document.getElementById('product_item').innerHTML = html;
	getCurrentPage(1);
}

function rutgon(mangsach_container){
	if(mangsach_container.length<1){
		var s='<div style="font-size:20px; color:rgb(151, 143, 143);font-family: Arial,Helvetica,sans-serif;">Không tìm thấy sản phẩm</div>';
		document.getElementById('product_item').innerHTML=s;
		document.getElementById('page').innerHTML="";
	}
	else{
		listPage(totalPage(mangsach_container)); 
		document.getElementById('page1').style.backgroundColor = 'darkorange';
		document.getElementById('page1').style.color = 'white';
		document.getElementById('page1').style.borderColor = 'darkorange';
		clickNextLeft1();      
		quaylaidautrang();
		sanpham_search(mangsach_container);                 
		ChangePage(mangsach_container); 
	}
}

function search(array_sach,array_theloai,array_tacgia,array_nxb){
	console.log("array_sach:"+array_sach.length);
	console.log("array_theloai:"+array_theloai.length);
	var sach=array_sach.slice();
	var	theloai=array_theloai.slice();
	var	tacgia=array_tacgia.slice();
	var	nxb=array_nxb.slice();

	if(theloai.length>0){
		for(let i=0;i<sach.length;i++){
			if(theloai.includes(sach[i].IdTheLoai)==false){
				sach.splice(i, 1);
				i=0;
				
			}
		}
		console.log("sach-theloai:"+sach.length);
	}
	else{

	}

	if(tacgia.length>0){
		for(let j=0;j<sach.length;j++){
			if(tacgia.includes(sach[j].IdTacGia)==false){
				sach.splice(j, 1);
				j=0;
			}
		}
		console.log("sach-tacgia:"+sach.length);
	}


	if(nxb.length>0){
		for(let k=0;k<sach.length;k++){
			if(nxb.includes(sach[k].IdNXB)==false){
				sach.splice(k, 1);
				k=0;
			}
		}
		console.log("sach-nxb:"+sach.length);
	}

	console.log(sach.length);
	if(sach.length>0)
			return sach;

		else{
			document.getElementById('product_item').innerHTML="Không Tìm Thấy Sản Phẩm";
			return array_sach;
		} 

}

function anloc(value){
	if(value=='sapxep'){
		if(document.getElementById('sapxep').style.display=='block'){
			document.getElementById('sapxep').style.display='none';
			document.getElementById('sapxep_v').innerHTML='^';
		}
		else{
			document.getElementById('sapxep').style.display='block';
			document.getElementById('sapxep_v').innerHTML='v';
		}
	}
	else if(value=='theloai'){
		if(document.getElementById('theloai').style.display=='block'){
			document.getElementById('theloai').style.display='none';
			document.getElementById('theloai_v').innerHTML='^';
		}
		else{
			document.getElementById('theloai').style.display='block';
			document.getElementById('theloai_v').innerHTML='v';
		}
	}
	else if(value=='tacgia'){
		if(document.getElementById('tacgia').style.display=='block'){
			document.getElementById('tacgia').style.display='none';
			document.getElementById('tacgia_v').innerHTML='^';
		}
		else{
			document.getElementById('tacgia').style.display='block';
			document.getElementById('tacgia_v').innerHTML='v';
		}
	}
	else if(value=='nxb'){
		if(document.getElementById('nxb').style.display=='block'){
			document.getElementById('nxb').style.display='none';
			document.getElementById('nxb_v').innerHTML='^';
		}
		else{
			document.getElementById('nxb').style.display='block';
			document.getElementById('nxb_v').innerHTML='v';
		}
	}
	else if(value=='gia'){
		if(document.getElementById('timtheogia_input').style.display=='inline-flex'){
			document.getElementById('timtheogia_input').style.display='none';
			document.getElementById('gia_v').innerHTML='^';
		}
		else{
			document.getElementById('timtheogia_input').style.display='inline-flex';
			document.getElementById('gia_v').innerHTML='v';
		}
	}
}

function xoatungsp(id){
	var taikhoan;
	xoaspgiohang();
	function xoaspgiohang(){
		$.ajax({
			type : 'POST', 
			url : 'loc_taikhoan.php',
			success : function(data) 
					{ 
						taikhoan=data;
							$.ajax({
								type : 'POST', 
								url : 'xoagiohang.php',
								data:{id:id, taikhoan:taikhoan},
								success : function(data) 
										{ 
												
												location.reload();      
										}						  
								});
								return false;
						
					}						  
			});
	};
}

function changesl(id){
	var x = id.split('_');
	var t= x[1];
	var value=document.getElementById(id).value;
	$.ajax({
		type : 'POST', 
		url : 'setslgiohang.php',
		data:{id:t, value:value},
		 success : function(data) 
				   { 
						location.reload(); 
				   }						  
		 });
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
	load_user();
	addtaikhoan_user();
	load_giohang(mangsach);
	load_datatheloai();
	load_datatacgia();
	load_menu();
	load_datanxb(); 
	load_lichsugiohang();

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
						//   console.log(mangsach.length);
                          sanpham('sachkhuyendoc',5,mangsach);  
						  SP_TL(20001);
						  SP_TL(20008);
						  SP_TL(20004);
						  SP_TL(10001);
						  SP_TL(10002);
						  SP_TL(10003);
                          
                          listPage(totalPage(mangsach)); 
                          document.getElementById('page1').style.backgroundColor = 'darkorange';
                          document.getElementById('page1').style.color = 'white';
                          document.getElementById('page1').style.borderColor = 'darkorange';
                          clickNextLeft1();      
						  
                          sanpham_search(mangsach);                 
                          ChangePage(mangsach);  

						  var value=$('#banchay').val();
						  var mangbanchay=[];
						  $.ajax({
							type : 'POST',
							url : 'banchay.php',
							data:{value:value},
							dataType:'json',
							 success : function(data)
									   { 
										
											$.each(data, function (key, item){
												mangbanchay.push(item); 
											});
											sanphambc('spthinhhanh',0,mangbanchay,value);

										  
									   }      
							 });
						
                     }      
           });
    };

	function load_giohang(mangsach){
		var taikhoan;
		$.ajax({
			type : 'POST', 
			url : 'loc_taikhoan.php',
			 success : function(data) 
					   { 
							taikhoan=data;
							$.ajax({
								type : 'POST', 
								url : 'donhang.php',
								data:{taikhoan:taikhoan},
								dataType:'json',
								 success : function(data1) 
										   { 
												$.each(data1, function (key, item){
												  mangdonhang.push(item);
												  mangiddonhang.push(item.IdDonHang);		 
												});  
												var mangtest=[];
												$.ajax({
												 type : 'POST',
												 url : 'db_connect.php',
												 dataType:'json',
												  success : function(data2)
															{ 
															 
																 $.each(data2, function (key, item){
																	 mangtest.push(item); 
																 });		
															 
																 for(let i=0;i<mangsach.length;i++){
																	 if(mangiddonhang.includes(mangsach[i].IdSach)){
																		 mangspdonhang.push(mangsach[i].IdSach);
																	 }
																}
																var html = '';
																var tongchiphi=0;
																for(let i=0;i<mangdonhang.length;i++){
																	for(let j=0;j<mangsach.length;j++){
																		if(mangsach[j].IdSach==mangdonhang[i].IdDonHang){
																			 html+='<div class="col-md-12 col-sm-12 row thuoctinhgiohang">';
																				 html+='<span class="col-md-2 col-sm-3 img_giohang">';
																					 html+='<a href="index_ct.php?id='+mangsach[j].IdSach+'"><img src="'+mangsach[j].HinhAnh+'"></a>';
																				 html+='</span>';
																				 html+='<span class="col-md-7 col-sm-6">';
																					 html+='<div class="ten_giohang">'+mangsach[j].TenSach+'</div>';
																				 html+='</span>';
																				 html+='<span class="col-md-1 col-sm-1 giohang2 ">'+formatNumber(mangsach[j].DonGia)+'</span>';
																				 html+='<span class="col-md-1 col-sm-1 row giohang2">';
																					 html+='<div class="col-md-8 col-sm-8 giohang3">';
																					 html+='<input type="number" name="soluong" id="soluong_'+mangsach[j].IdSach+'" onchange="changesl(this.id)" value='+mangdonhang[i].SoLuong+' min="0">';
																					 html+='</div>';
																					 html+='<div class="col-md-4 col-sm-4" class="soluong">';
																					 html+='</div>';    
																				 html+='</span>';
																				 html+='<span class="col-md-1 col-sm-1 giohang2" id="tonggia">';
																					 html+='<div class="col-md-12 col-sm-12 giohang2">'+formatNumber(Number(mangsach[j].DonGia)*mangdonhang[i].SoLuong)+'</div>';
																					 html+='<div class="col-md-12 col-sm-12 close_sp" onclick="xoatungsp('+mangsach[j].IdSach+')">x</div>';
																				 html+='</span>';
																			 html+='</div>';
																			 html+='<hr width="100%" size="3" align="center" color="black" style="margin-top:10px;"/>';
					 
																			 tongchiphi+=Number(mangsach[j].DonGia)*mangdonhang[i].SoLuong;
																		}
																	}
																}
															 //    console.log(mangdonhang.length);
															 //    console.log(mangsach.length);
															 var x=''+mangdonhang.length+' sản phẩm';
																if(mangdonhang.length==0){
																 $('#spcart').html('<h2>Bạn chưa chọn sản phẩm<h2>');
																}
																else{
																 $('#sosp').html(x);
																 $('#spcart').html(html);
																 $('#tongchiphi').html(formatNumber(tongchiphi));
																}								  
															}      
												  }); 
											   
							   
										   }	
																 
								 });
					   }						  
			 });

			return false;

	};

	function load_lichsugiohang(){
		var taikhoan;
		$.ajax({
			type : 'POST', 
			url : 'loc_taikhoan.php',
			 success : function(data) 
					   { 
							taikhoan=data;
							$.ajax({
								type : 'POST', 
								url : 'hoadon.php',
								data:{taikhoan:taikhoan},
								dataType:'json',
								 success : function(data1) 
										   { 
												var manghoadon=[];
												var manghoadon=[];
												var mangcthoadon=[];
												$.each(data1, function (key, item){
												  manghoadon.push(item);	 
												});  

												$.ajax({
													type : 'POST',
													url : 'cthoadon.php',
													dataType:'json',
													 success : function(data2)
															   { 
																
																	$.each(data2, function (key, item){
																		mangcthoadon.push(item); 
																	});	

																	var mangtest=[];

																	$.ajax({
																	type : 'POST',
																	url : 'db_connect.php',
																	dataType:'json',
																	success : function(data3)
																				{ 
																				
																					$.each(data3, function (key, item){
																						mangtest.push(item); 
																					});		
																				
																					var html = '';
																					for(let i=0;i<manghoadon.length;i++){
																										html+='<div class="col-md-12 col-sm-12 row thuoctinhlsdonhang">';
																											html+='<div class="col-md-6 col-sm-8 row thuoctinhlsdonhang_sp">';
																						for(let j=0; j<mangcthoadon.length;j++){
																										
																							if(mangcthoadon[j].IdHoaDon==manghoadon[i].IdHoaDon)
																							{
																								for(let k=0; k<mangtest.length;k++){
																									if(mangtest[k].IdSach==mangcthoadon[j].IdSach){
																												html+='<div class="col-md-12 col-sm-12 row thuoctinhlsdonhang">';   
																													html+='<span class="col-md-2 col-sm-3 img_donhang">';																													
																														html+='<a href="index_ct.php?id='+mangsach[k].IdSach+'"><img src="'+mangsach[k].HinhAnh+'"></a>';
																														html+='</span>';
																														html+='<span class="col-md-5 col-sm-6">';
																														html+='<div class="ten_giohang">'+mangtest[k].TenSach+'</div>';
																														html+='</span>';
																													html+='<span class="col-md-2 col-sm-2 lsdonhang2">'+formatNumber(mangtest[k].DonGia)+'</span>';
																													html+='<span class="col-md-1 col-sm-2 lsdonhang2">'+mangcthoadon[j].SLBan+'</span>';
																													html+='<span class="col-md-2 col-sm-1 lsdonhang2">'+formatNumber(Number(mangcthoadon[j].DonGia)*mangcthoadon[j].SLBan)+'</span>';
																					
																												html+='</div>';
																				
																												html+='<hr width="100%" size="3" align="center" color="black" style="margin-top:10px;"/>';																										
																				
																											
																									}																																													
																								}
																							}

																						}
																					
																											html+='</div>';
																										
																											html+='<div class="col-md-1 col-sm-1 row thuoctinhlsdonhang_sp">&nbsp;</div>';
																													
																											html+='<div class="col-md-5 col-sm-4 row thuoctinhlsdonhang">';
																				
																												html+='<div class="col-md col-sm-12 row lsdonhang1">';
																													html+='<span class="col-md-12 col-sm  row">'+formatNumber(manghoadon[i].TongTien)+'</span>';
																												html+='</div>';
																												html+='<div class="col-md col-sm-12 row lsdonhang1">';
																													html+='<span class="col-md-12 col-sm ">'+manghoadon[i].NgayMua+'</span>';
																												html+='</div>';
																												html+='<div class="col-md col-sm-12  row lsdonhang1">';
																												if(manghoadon[i].TrangThai==0){
																													html+='<span class="col-md-12 col-sm  row">Chờ xác nhận</span>';	
																												}
																												else{
																													html+='<span class="col-md-12 col-sm  row">Đã xử lý</span>';	
																												}
																												html+='</div>';
																												html+='<div class="col-md col-sm-12  row lsdonhang1">';
																												if(manghoadon[i].TrangThai==0){
																													html+='<span class="col-md-12 col-sm  row bin" id="'+manghoadon[i].IdHoaDon+'" onclick="bin(this.id)"><img src="img/bin.png"></span>';	
																												}
																												else{
																													html+='<span class="col-md-12 col-sm  row">&nbsp;</span>';	
																												}
																												html+='</div>';
																											html+='</div>';
																				
																										html+='</div>';
																										html+='<hr width="100%" size="4" align="center" color="black" style="margin-top:10px;"/>';
																						}
																				//    console.log(html);
																				//    console.log(mangsach.length);
																					if(manghoadon.length==0){
																					$('#lsdh').html('<h2>Bạn chưa có đơn hàng nào!<h2>');
																					}
																					else{
																					$('#lsdh').html(html);
																					$('#tongsoctsp').html(manghoadon.length+" đơn hàng");
																					}	
																					$.ajax({
																						type : 'POST', 
																						url : 'tongtienhoadon.php',
																						data:{taikhoan:taikhoan},
																						 success : function(data) 
																								   { 
																									$('#ttlsgh').html("Đã Thanh Toán: "+formatNumber(Number(data)));
																								   }						  
																						 });							  
																				}      
																	});
																	return false;
																								  
															   }      
													 }); 
													 
											
											   
							   
										   }	
																 
								 });
					   }						  
			 });

			return false;
		
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
	function load_menu()
	{
	  $.ajax({
		   type : 'POST',
		   url : 'menu.php',
		   dataType:'json',
			success : function(data)
					  { 
						   html='';
						   $.each(data, function (key, item){							//   mangtheloai.push(item); 
							   html+='<li class="menu_list" id="'+item.IdMenu+'" onclick="move()">';
							   		html+=''+item.TenMenu+'';
							   html+='</li>';
						   }); 
						   $('#showmenu').html(html);                         
					  }      
			});
			return false;
 };

	function load_user(){
		var taikhoan=[];
		$.ajax({
			type : 'POST', 
			url : 'tai_taikhoan.php',	
			dataType:'json',
			success : function(data1) 
					   { 
						   	var html='';
							taikhoan=data1;
							if(taikhoan==0){
								html+='<li><img src="img/iconuser.png" alt="user"></li>';
								html+='<li class="dangnhaptk"><a href="login_logout/login_logout.php">Đăng Nhập</a></li>';
								
							}
							else{
								html+='<li><img src="img/iconuser.png" alt="user"></li>';
								html+='<li>'+taikhoan.HO_DEM+" "+taikhoan.TEN+'</li>';
								$('#dangxuat').html('Đăng Xuất');
							};
							$('#dangnhap').html(html);
					   }				  
			 });
	}

	function addtaikhoan_user(){
		var taikhoan=[];
		$.ajax({
			type : 'POST', 
			url : 'addtaikhoan_user.php',	
			dataType:'json',
			success : function(data1) 
					   { 

					   }				  
			 });
	}


	$("#dangxuat").click( function(event){
		event.preventDefault();
			$.ajax({
				type : 'POST', 
				url : 'dangxuat.php',
				 success : function(data) 
						   { 
							alert('Đăng Xuất Thành Công');
							window.location.href='index.php';
						   }						  
				 });
				 
	});

	$("#timtheongay").on('change',function load_lichsugiohang(){
		var taikhoan;
		var ngaytu=$('#ngaytu').val();
		var ngayden=$('#ngayden').val();
		var limit=$('#limit').val();
		$.ajax({
			type : 'POST', 
			url : 'loc_taikhoan.php',
			 success : function(data) 
					   { 
							taikhoan=data;
							$.ajax({
								type : 'POST', 
								url : 'date.php',
								data:{taikhoan:taikhoan,
									ngaytu:ngaytu,
									ngayden:ngayden,
									limit:limit},
								dataType:'json',
								 success : function(data1) 
										   { 
												var manghoadon=[];
												var manghoadon=[];
												var mangcthoadon=[];
												$.each(data1, function (key, item){
												  manghoadon.push(item);	 
												});  

												$.ajax({
													type : 'POST',
													url : 'cthoadon.php',
													dataType:'json',
													 success : function(data2)
															   { 
																
																	$.each(data2, function (key, item){
																		mangcthoadon.push(item); 
																	});	

																	var mangtest=[];

																	$.ajax({
																	type : 'POST',
																	url : 'db_connect.php',
																	dataType:'json',
																	success : function(data3)
																				{ 
																				
																					$.each(data3, function (key, item){
																						mangtest.push(item); 
																					});		
																				
																					var html = '';
																					for(let i=0;i<manghoadon.length;i++){
																										html+='<div class="col-md-12 col-sm-12 row thuoctinhlsdonhang">';
																											html+='<div class="col-md-6 col-sm-8 row thuoctinhlsdonhang_sp">';
																						for(let j=0; j<mangcthoadon.length;j++){
																										
																							if(mangcthoadon[j].IdHoaDon==manghoadon[i].IdHoaDon)
																							{
																								for(let k=0; k<mangtest.length;k++){
																									if(mangtest[k].IdSach==mangcthoadon[j].IdSach){
																												html+='<div class="col-md-12 col-sm-12 row thuoctinhlsdonhang">';   
																													html+='<span class="col-md-2 col-sm-3 img_donhang">';																													
																														html+='<a href="index_ct.php?id='+mangsach[k].IdSach+'"><img src="'+mangsach[k].HinhAnh+'"></a>';
																														html+='</span>';
																														html+='<span class="col-md-5 col-sm-6">';
																														html+='<div class="ten_giohang">'+mangtest[k].TenSach+'</div>';
																														html+='</span>';
																													html+='<span class="col-md-2 col-sm-2 lsdonhang2">'+formatNumber(mangtest[k].DonGia)+'</span>';
																													html+='<span class="col-md-1 col-sm-2 lsdonhang2">'+mangcthoadon[j].SLBan+'</span>';
																													html+='<span class="col-md-2 col-sm-1 lsdonhang2">'+formatNumber(Number(mangcthoadon[j].DonGia)*mangcthoadon[j].SLBan)+'</span>';
																					
																												html+='</div>';
																				
																												html+='<hr width="100%" size="3" align="center" color="black" style="margin-top:10px;"/>';																										
																				
																											
																									}																																													
																								}
																							}

																						}
																					
																											html+='</div>';
																										
																											html+='<div class="col-md-1 col-sm-1 row thuoctinhlsdonhang_sp">&nbsp;</div>';
																													
																											html+='<div class="col-md-5 col-sm-4 row thuoctinhlsdonhang">';
																				
																												html+='<div class="col-md col-sm-12 row lsdonhang1">';
																													html+='<span class="col-md-12 col-sm  row">'+formatNumber(manghoadon[i].TongTien)+'</span>';
																												html+='</div>';
																												html+='<div class="col-md col-sm-12 row lsdonhang1">';
																													html+='<span class="col-md-12 col-sm ">'+manghoadon[i].NgayMua+'</span>';
																												html+='</div>';
																												html+='<div class="col-md col-sm-12  row lsdonhang1">';
																												if(manghoadon[i].TrangThai==0){
																													html+='<span class="col-md-12 col-sm  row">Chờ xác nhận</span>';	
																												}
																												else{
																													html+='<span class="col-md-12 col-sm  row">Đã xử lý</span>';	
																												}
																												html+='</div>';
																												html+='<div class="col-md col-sm-12  row lsdonhang1">';
																												if(manghoadon[i].TrangThai==0){
																													html+='<span class="col-md-12 col-sm  row bin" id="'+manghoadon[i].IdHoaDon+'" onclick="bin(this.id)"><img src="img/bin.png"></span>';	
																												}
																												else{
																													html+='<span class="col-md-12 col-sm  row">&nbsp;</span>';	
																												}
																												html+='</div>';
																											html+='</div>';
																				
																										html+='</div>';
																										html+='<hr width="100%" size="4" align="center" color="black" style="margin-top:10px;"/>';
																						}
																				//    console.log(html);
																				//    console.log(mangsach.length);
																					if(manghoadon.length==0){
																					$('#lsdh').html('<h2>Bạn chưa có đơn hàng nào!<h2>');
																					}
																					else{
																					$('#lsdh').html(html);
																					$('#tongsoctsp').html(manghoadon.length+" đơn hàng");
																					}	
																					$.ajax({
																						type : 'POST', 
																						url : 'tongtienhoadon.php',
																						data:{taikhoan:taikhoan},
																						 success : function(data) 
																								   { 
																									$('#ttlsgh').html("Đã Thanh Toán: "+formatNumber(Number(data)));
																								   }						  
																						 });							  
																				}      
																	});
																	return false;
																								  
															   }      
													 }); 
													 
											
											   
							   
										   }	
																 
								 });
					   }						  
			 });

			return false;
		
	});


	$("#banchay").on('change', function(event){
		event.preventDefault();
		var value=$('#banchay').val();
		console.log(value);
		var mangbanchay=[];
		$.ajax({
		  type : 'POST',
		  url : 'banchay.php',
		  data:{value:value},
		  dataType:'json',
		   success : function(data)
					 { 
					  
						  $.each(data, function (key, item){
							  mangbanchay.push(item); 
						  });
						  sanphambc('spthinhhanh',0,mangbanchay,value);
	
						
					 }      
		   });
				 
	});

	$("#xoagiohang").click( function(event){
			event.preventDefault();
			var result = confirm("Bạn có muốn xóa giỏ hàng?");
			if (result == true) {
				var taikhoan;
				xoagiohang();
				function xoagiohang(){
					$.ajax({
						type : 'POST', 
						url : 'loc_taikhoan.php',
							success : function(data) 
									{ 
										taikhoan=data;
										$.ajax({
											type : 'POST', 
											url : 'xoagiohang.php',
											data:{id:0, taikhoan:taikhoan},
											success : function(data) 
													{ 
														console.log(data);
														alert("Xóa giỏ hàng thành công."); 
														$('#tongchiphi').html('0đ');
													
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
													}						  
											});

									}						  
						  });
							 
					 
					 return false;
			}
			if(taikhoan!=0){
			document.getElementById('spcart').innerHTML='<div style="font-size:20px; color:rgb(151, 143, 143);font-family: Arial,Helvetica,sans-serif;">Chưa có sản phẩm trong giỏ</div>';
			}
		} else {
	
			}
	});

	$('#thanhtoan').click( function(event){
			event.preventDefault();
			var result = confirm("Bạn có đồng ý thanh toán giỏ hàng không?");
			if (result == true) {
				var taikhoan;
				xoagiohang();
				function xoagiohang(){

					$.ajax({
						type : 'POST', 
						url : 'loc_taikhoan2.php',
						 success : function(data) 
								   { 
									   taikhoan=data;
									   if(taikhoan==2){
											var result1 = confirm("Bạn cần đăng nhập để thanh toán");
											if (result1 == true){
												window.location.href='login_logout/login_logout.php';
											}
											else{}
									   }
									   else if(taikhoan==1){
											alert("Không thể sử dụng tài khoản quản lý bán hàng để mua hàng")
									   }
									   else{
											$.ajax({
												type : 'POST', 
												url : 'kiemtratonkho.php',
												dataType:'text',
												data:{taikhoan:taikhoan},
												success : function(data) 
														{ 
															if(data!=0){
																alert(data);
															}
															else{
																$.ajax({
																	type : 'POST', 
																	url : 'xoagiohang.php',
																	data:{id:1, taikhoan:taikhoan},
																	success : function(data) 
																			{ 
																				alert("Thanh toán thành công.");  
																				$('#tongchiphi').html('0đ'); 
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
																							
																							$('#spcart').html('<div style="font-size:20px; color:rgb(151, 143, 143);font-family: Arial,Helvetica,sans-serif;">Chưa có sản phẩm trong giỏ</div>');
																			}						  
																});
															}   
														}						  
											});
									   }

								   }						  
						 });
					
					 
					 
					 return false;
			}
		 } else {
	
			}
	});
	
 });

function next_product(id,n){
  sanpham(id,n,mangsach);
}

function click_banchay(n){
	var value=$('#banchay').val();
	console.log(value);
	var mangbanchay=[];
	$.ajax({
	  type : 'POST',
	  url : 'banchay.php',
	  data:{value:value},
	  dataType:'json',
	   success : function(data)
				 { 
				  
					  $.each(data, function (key, item){
						  mangbanchay.push(item); 
					  });
					  console.log(mangbanchay);
					  sanphambc('spthinhhanh',n,mangbanchay,value);

					
				 }      
	   });
  }

setInterval(changeSlide,4000);
var slideIndex = 0;

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
		mangsach_container=search(mangsach,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
		if(mangsach_container.length>0) mang1=mangsach_container.slice();
		else mang1=mangsach.slice();

		if(sapxep=='ngaunhien'){
			mang2=mang1.slice();
		}

		else if(sapxep=="tangdan"){
			mang2=tangdan(mang1,mang1.length);

		}
		else{
			mang2=giamdan(mang1,mang1.length);
		}
		
		mangsach_container=search(mang2,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
		rutgon(mangsach_container);

	});

	$("#search_item").on('change',function(event){	
		event.preventDefault();
		var mang1=[];
		var mang2=[];
		mangsach_container=search(mangsach,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
		if(mangsach_container.length>0) mang1=mangsach_container.slice();
		else mang1=mangsach.slice();

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

		mangsach_container=search(mangsach,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
		if(mangsach_container.length>0){
			mang1=mangsach_container.slice();
		}
		else{
			mang1=mangsach.slice();
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
			// console.log("manggia:"+mangsach.length);
		}
		mangsach_container=mang2;
		console.log("gia:"+mangsach.length);
		mangsach_container=search(mangsach_container,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
		rutgon(mangsach_container);

	});  

	$("#theloai").on('change', function(event){
		event.preventDefault();
		var checkbox_TL = $("#theloai input:checkbox:checked");
		checkbox_TLlist=[];
		checkbox_TL.map(function(){
		checkbox_TLlist.push(this.id);
		});
		console.log(checkbox_TLlist);
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
			// console.log("theloai:"+mangsach.length);
		mangsach_container=search(mangsach,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
		
		rutgon(mangsach_container);

	  });

	  $("#tacgia").on('change', function(event){
		event.preventDefault();
		var checkbox_TG= $("#tacgia input:checkbox:checked");
		checkbox_TGlist=[];
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
			// console.log("tacgia:"+mangsach.length);
		mangsach_container=search(mangsach,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
		rutgon(mangsach_container);
	  });

	  $("#nxb").on('change', function(event){
		event.preventDefault();
		checkbox_NXBlist=[];
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

		// console.log("nxb:"+mangsach.length);

		mangsach_container=search(mangsach,checkbox_TLlist,checkbox_TGlist,checkbox_NXBlist);
		rutgon(mangsach_container);
	  });
	 
	
	
 });



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

// setInterval(click_banchay, 7000,1);
setInterval(next_product, 6000,"sachkhuyendoc",1);
setInterval(next_product, 5000,"theloai1",1);
setInterval(next_product, 6000,"theloai2",1);
setInterval(next_product, 7000,"theloai3",1);
setInterval(next_product, 6000,"theloai4",1);
setInterval(next_product, 5000,"theloai5",1);
setInterval(next_product, 7000,"theloai6",1);