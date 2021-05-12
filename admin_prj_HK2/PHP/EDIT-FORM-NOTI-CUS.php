<div class="form-sign-in " id="form-edit-noti-cus">
       <div class="l-main-SignIn animate">
            <form action="" method="GET" name="FormEditCus"  id="formEditOrCreateCus">
            <h1 id="title-form-edit-cus">Sửa thông tin</h1>
                    <input type="text"  name="IdKH" id = "IdKH" placeholder="Id"  disabled>
                    <div style="width: auto; height:15px;"><span id="noti-Id"></span></div>
                    
                    <input type="text"  name="TenKH" id = "TenKH" placeholder="Tên" onkeyup="checkName()" required pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+(([a-zA-ZZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ])?[a-zA-ZZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]*)*$">
                    
                    <div style="width: auto; height:15px;"><span id="noti-Name-Cus"></span></div>
                    <input type="text"  name="HoDemKH" id = "HoDemKH" placeholder="Họ đệm" onkeyup="checkName()" required pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+(([a-zA-ZZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ])?[a-zA-ZZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]*)*$"> 
                    <div style="width: auto; height:15px;"><span id="noti-HoDem-Cus"></span></div>

                    <input type="text"  name="SDTKH " id = "SDTKH" placeholder="Số điện thoại" onkeyup="checkPNumber()"  required pattern="((03|09|05|04|08|02|07)+([0-9]{8}))\b">
                    <div style="width: auto; height:15px;"><span id="noti-PNum-Cus"></span></div>
                    
                    <input type="text"  name="EmailKH" id = "EmailKH" placeholder="Email" onkeyup="checkEmail()"  required      pattern="^(([A-Za-z0-9])+@([a-zA-Z])+((?:\.[a-zA-Z0-9-]+){1,3}))$"   >
                    <div style="width: auto; height:15px;"><span id="noti-Email-Cus"></span></div>
                    
                    <input type="text"  name="DiaChiKH" id = "DiaChiKH" placeholder="Địa chỉ" onkeyup="checkAddress()" required pattern="^[a-zA-Z0-9,/ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+(([a-zA-Z0-9,/ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ])?[a-zA-Z0-9,/ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]*)*$">
                    <div style="width: auto; height:15px;"> <span style="color: #16a085;" id="noti-Address-Cus"></span></div>
                    <input type="button" id="signup-submit-cus"
                onclick="AddOrUpdateCus()" name=" signup-submit-cus"
                value="ĐỒNG Ý">
                    <a> <h1 id="buttom-close" onclick="document.getElementById('form-edit-noti-cus').style.display='none'">X</h1></a>
                    <input type="submit" name="submitCus" value="submitCus" id="submitCus"
                style="visibility: hidden; opacity: 0;" />
            </form>

            <form action="" method="POST" id="formActionCustomer">
            <input type="hidden" name="IdCus" value="" id="IdCus">
            <input type="hidden" name="typeActionCus" value="" id="typeActionCus">
            <input type="submit" name="submit" value="Submit-Cus" id="btnActionCus"
                style="visibility: hidden; opacity: 0;" />
        </form>

       </div>
    </div>
    <div id="action-result-Cus"></div>
    <script>

function AddOrUpdateCus(){
    document.getElementById('submitCus').click();
}

$(document).ready(function() {
    //submit form
    $("#formActionCustomer").submit(function(event) {
        event.preventDefault(); //prevent default action 
        $.post("PHP/customerManager.php", {
                typeActionCus: $("#typeActionCus").val(),
                IdCus: $("#IdCus").val(),
        }, function(data) {
            $("#action-result-Cus").html(data);
            search();
        });
    });



    $("#formEditOrCreateCus").submit(function(event) {
        event.preventDefault(); //pcustomerManagerrevent default action 
        $.post("PHP/customerManager.php", {
                IdKH: $("#IdKH").val(),
                TenKH: $("#TenKH").val(),
                HoDemKH: $("#HoDemKH").val(),
                SDTKH: $("#SDTKH").val(),
                EmailKH: $("#EmailKH").val(),
                DiaChiKH: $("#DiaChiKH").val(),
        }, function(data) {
            $("#action-result-Cus").html(data);
            search();
        });
    
    });
});

</script>