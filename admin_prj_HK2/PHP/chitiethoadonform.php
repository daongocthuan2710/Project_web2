<div class="form-sign-in " id="form-cthd">
    <div class="l-main-SignIn animate" id="form-ct-inner">
        <a>
            <h1 id="buttom-close" onclick="document.getElementById('form-cthd').style.display='none'">X</h1>
        </a>
        <div id="result-cthd">
            <div class="col" id="col-cthd">
                <div class="information-col">
                    <p class="id-manager">ID sách :</p>
                    <p class="username-manager">Số lượng :</p>
                    <p class="pw-manager">Đơn giá :</p>
                    <p class="quyen-manager">Ghi chú :</p>
                </div>
            </div>
        </div>
        <form action="" method="POST" id="formActionCTHD">
            <input type="hidden" name="IdCTHD" value="" id="IdCTHD">
            <input type="hidden" name="typeActionCTHD" value="" id="typeActionCTHD">
            <input type="submit" name="submit" value="Submit-CTHD" id="btnActionCTHD"
                style="visibility: hidden; opacity: 0;" />
        </form>
    </div>
</div>

<script>

function showCTHD(id) {
    document.getElementById('IdCTHD').value= id;
    document.getElementById('typeActionCTHD').value="findCT";
    document.getElementById('btnActionCTHD').click();
}

$(document).ready(function() {
    //submit form
    $("#formActionCTHD").submit(function(event) {
        event.preventDefault(); //prevent default action 
        $.post("PHP/ctManager.php", {
            typeActionCTHD: $("#typeActionCTHD").val(),
            IdCTHD: $("#IdCTHD").val(),
        }, function(data) {
            $("#result-cthd").html(data);
            // search();
        });
    });

});
</script>