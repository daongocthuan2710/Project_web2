window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "light1", // "light2", "dark1", "dark2"
        animationEnabled: false, // change to true		
        title:{
            text: "Basic Column Chart"
        },
        data: [
        {
            // Change type to "bar", "area", "spline", "pie",etc.
            type: "column",
            dataPoints: [
                { label: "tháng 1-2",  y: 3  },
                { label: "tháng 3-4", y: 8  },
                { label: "tháng 5-6", y: 0  },
                { label: "tháng 7-9",  y: 0  },
                { label: "tháng 10-12",  y: 1  }
            ]
        }
        ]
    });
    // var i = 0,j=0,k=0,l=0;
    
    //     if (i == 0) {
    //         i = 1;
    //         var elem1 = document.getElementById("load-number-manager");
    //         var width1 = 10;
    //         var id1 = setInterval(frame, 10);
    //         function frame() {
    //         if (width1 >= 8) {
    //             clearInterval(id1);
    //             i = 0;
    //         } else {    
    //             width1++;
                
    //             elem1.innerHTML = width1 ;
    //         }
    //         }
    //     }
    //     if (j == 0) {
    //         j = 1;
    //         var elem2 = document.getElementById("load-number-admin");
    //         var width2 = 10;
    //         var id2 = setInterval(frame, 10);
    //         function frame() {
    //         if (width2 >= 100) {
    //             clearInterval(id2);
    //             j = 0;
    //         } else {    
    //             width2++;
                
    //             elem2.innerHTML = width2 ;
    //         }
    //         }
    //     }
    //     if (k == 0) {
    //         k = 1;
    //         var elem3 = document.getElementById("load-number-product");
    //         var width3 = 10;
    //         var id3 = setInterval(frame, 10);
    //         function frame() {
    //         if (width3 >= 150) {
    //             clearInterval(id3);
    //             k = 0;
    //         } else {    
    //             width3++;
                
    //             elem3.innerHTML = width3 ;
    //         }
    //         }
    //     }
    //     if (l == 0) {
    //         l = 1;
    //         var elem4 = document.getElementById("load-number-sold");
    //         var width4 = 10;
    //         var id4 = setInterval(frame, 10);
    //         function frame() {
    //         if (width4 >= 235) {
    //             clearInterval(id4);
    //             l = 0;
    //         } else {    
    //             width4++;
                
    //             elem4.innerHTML = width4 ;
    //         }
    //         }
    //     }
        
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
