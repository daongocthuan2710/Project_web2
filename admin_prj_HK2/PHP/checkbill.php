<div id="form-check-bill" class="form-acpt-dlt-prct">
    <form class="ctn-form-acpt-dlt-prct animate-form-accept-delete-product" action="/action_page.php" method="post"
        id="checkBillForm">
        <h3 id="title-check-bill">kiểm tra đơn hàng</h3>
        <button type="button" onclick="document.getElementById('form-check-bill').style.display='none'"
            class="cancelbtn-dlt-ele-prct ">Cancel</button>

        <label class="switch-check-bill" id="btnConfirmAccept">
            <input type="checkbox" id="checkbill" checked onclick='changeStatus();'>
            <span class="slider round"></span>
        </label>

    </form>
    </form>
    <form action="" method="POST" id="formActioncheck">
        <input type="hidden" name="IdCheck" value="" id="IdCheck">
        <input type="hidden" name="statusBill" value="" id="statusBill">
        <input type="submit" name="submit" value="Submit-Check" id="btnActionCheck"
            style="visibility: hidden; opacity: 0;" />
    </form>
</div>
<div id="action-result-Check"></div>
<script>
function setBill(id, status) {
    document.getElementById('checkbill').checked = (status == 0) ? false : true;
    // var checkbox = document.getElementById('checkbill');
    document.getElementById('form-check-bill').style.display = 'block';
    //     document.getElementById('checkbill').onclick = function() {
    //         if(checkbox.checked == false){
        $("#IdCheck").val(id);   
    //     if(checkbox.checked == true){
    //         document.getElementById('Idcheck').value = id;
    // }
}

function changeStatus() {
    var statusBill = (document.getElementById('checkbill').checked == true) ? 1 : 0;
    document.getElementById('statusBill').value = statusBill;
    document.getElementById('btnActionCheck').click();
}

$(document).ready(function() {
    //submit form
    $("#formActioncheck").submit(function(event) {
        event.preventDefault(); //prevent default action 
        $.post("PHP/checkManager.php", {
            statusBill: $("#statusBill").val(),
            IdCheck: $("#IdCheck").val(),
        }, function(data) {
            $("#action-result-Check").html(data);
            searchBill()
            document.getElementById('form-check-bill').style.display='none';
        });
    });



    $("#checkBillForm").submit(function(event) {
        event.preventDefault(); //pacctomerManagerrevent default action 
        $.post("PHP/checkManager.php", {
            checkbill: $("#checkbill").val(),
        }, function(data) {
            $("#action-result-Check").html(data);
            search();
        });

    });
});
</script>