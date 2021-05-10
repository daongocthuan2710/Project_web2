
var data = document.getElementById("data").value;

function decrease () {
    var bool = data <= 1 ;
    if(!bool) {
        data--;
        document.getElementById("data").value = data;
        console.log(data);
    }
    // else {
        
    // }
}

function increase () {
    data++;
    document.getElementById("data").value = data;
    console.log(data);
}

function content() {
    document.getElementById("comment_review").style.display = "none";
    document.getElementById("chitiet").style.display = "none";
    document.getElementById("h2").style.display = "block";    
    document.getElementById("h2").innerHTML = "<h2>Nội dung chi tiết của cuốn sách</h2>";
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


