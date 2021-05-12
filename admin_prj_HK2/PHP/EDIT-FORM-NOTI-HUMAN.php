<div class="form-sign-in " id="form-edit-noti-humman">
       <div class="l-main-SignIn animate">
            <form action="" method="GET" name="FormEditManager"  id="formEditOrCreateMng">
            <h1 id="title-form-edit-mng">Sửa thông tin</h1>
                    <input type="text"  name="IdNV" id = "IdNV" placeholder="Id"  disabled>
                    <div style="width: auto; height:15px;"><span id="noti-Id"></span></div>
                    
                    <input type="text"  name="TenNV" id = "TenNV" placeholder="Tên" onkeyup="checkName()"  required pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+(([a-zA-ZZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ])?[a-zA-ZZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]*)*$">
                    
                    <div style="width: auto; height:15px;"><span id="noti-Name-Mng"></span></div>
                    <input type="text"  name="HoDemNV" id = "HoDemNV" placeholder="Họ đệm " onkeyup="checkName()" required pattern="^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+(([a-zA-ZZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ])?[a-zA-ZZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]*)*$"> 
                    <div style="width: auto; height:15px;"><span id="noti-HoDem-Msg"></span></div>

                    <input type="text"  name="SDTNV" id = "SDTNV" placeholder="Số điện thoại" onkeyup="checkPNumber()"  required pattern="((03|09|05|04|08|02|07)+([0-9]{8}))\b">
                    <div style="width: auto; height:15px;"><span id="noti-PNum-Mng"></span></div>
                    
                    <input type="text"  name="EmailNV" id = "EmailNV" placeholder="Email" onkeyup="checkEmail()"  required  pattern="^(([A-Za-z0-9])+@([a-zA-Z])+((?:\.[a-zA-Z0-9-]+){1,3}))$"       >
                    <div style="width: auto; height:15px;"><span id="noti-Email-Mng"></span></div>
                    
                    <input type="text"  name="DiaChiNV" id = "DiaChiNV" placeholder="Địa chỉ" onkeyup="checkAddress()" pattern="^[a-zA-Z0-9,/ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+(([a-zA-Z0-9,/ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ])?[a-zA-Z0-9,/ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]*)*$"  required>
                    <div style="width: auto; height:15px;"> <span id="noti-Address-Mng"></span></div>
                    <input type="button" id="signup-submit-mng"
                onclick="AddOrUpdateMng()" name=" signup-submit-mng"
                value="ĐỒNG Ý">
                    <a> <h1 id="buttom-close" onclick="document.getElementById('form-edit-noti-humman').style.display='none'">X</h1></a>
                    <input type="submit" name="submitMng" value="submitMng" id="submitMng"
                style="visibility: hidden; opacity: 0;" />
            </form>

            <form action="" method="POST" id="formActionManager">
            <input type="hidden" name="IdMng" value="" id="IdMng">
            <input type="hidden" name="typeActionMng" value="" id="typeActionMng">
            <input type="submit" name="submit" value="Submit-Mng" id="btnActionMng"
                style="visibility: hidden; opacity: 0;" />
        </form>

       </div>
    </div>
    <div id="action-result-mng"></div>
    <script>

function AddOrUpdateMng(){
    document.getElementById('submitMng').click();
}

$(document).ready(function() {
    //submit form
    $("#formActionManager").submit(function(event) {
        event.preventDefault(); //prevent default action 
        $.post("PHP/adminManager.php", {
                typeActionMng: $("#typeActionMng").val(),
                IdMng: $("#IdMng").val(),
        }, function(data) {
            $("#action-result-mng").html(data);
            search();
        });
    });



    $("#formEditOrCreateMng").submit(function(event) {
        event.preventDefault(); //prevent default action 
        $.post("PHP/adminManager.php", {
                IdNV: $("#IdNV").val(),
                TenNV: $("#TenNV").val(),
                HoDemNV: $("#HoDemNV").val(),
                SDTNV: $("#SDTNV").val(),
                EmailNV: $("#EmailNV").val(),
                DiaChiNV: $("#DiaChiNV").val(),
        }, function(data) {
            $("#action-result-mng").html(data);
            search();
        });
    
    });
});

</script>