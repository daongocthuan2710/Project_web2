<div class="form-sign-in " id="form-edit-noti-acc">
       <div class="l-main-SignIn animate">
            <form action="" method="GET" name="FormEditAccount"  id="formEditOrCreateAcc">
            <h1 id="title-form-edit-acc">Sửa thông tin</h1>
                    <input type="text"  name="IdTK" id = "IdTK" placeholder="Id"  >
                    <div style="width: auto; height:15px;"><span id="noti-Id"></span></div>
                    
                    <input type="text"  name="USERNAME" id = "USERNAME" placeholder="tên tài khoản"  required >
                    
                    <div style="width: auto; height:15px;"><span id="noti-Name"></span></div>

                    <input type="text"  name="PASSWORD " id = "PASSWORD" placeholder="mật khẩu"  required >
                    <div style="width: auto; height:15px;"><span id="noti-PNum"></span></div>
                    
                    <select name="MaQuyen" id="MaQuyen">
                        <option value="" selected>Quyền</option>
                        <!-- <option value="1">trinh tham</option>
                                <option value="2">học tập</option> -->
                        <?php
                                require_once('../admin_prj_HK2/utils/connect_db.php');
                                ['findAllQuyen' => $types] = require '../admin_prj_HK2/entities/quyen.php';
                                $data = $types($conn);
                                for ($i=0; $i < count($data); $i++) { 
                                echo "<option value=\"".$data[$i]['MaQuyen']."\">".$data[$i]['TenQuyen']."</option>";
                                // if($data[$i]['MaQuyen'] == NULL){
                                //     echo " <option value=\"NULL\">khách hàng</option> ";
                                // }
                                }
                        ?>
                     </select>
                    <div style="width: auto; height:15px;"><span id="noti-Email"></span></div>
                    
                    <input type="text"  name="TrangThai" id = "TrangThai" placeholder="trạng thái" onkeyup="checkTT()"  required pattern="[01]">
                    <div style="width: auto; height:15px;"> <span style="color: #16a085;" id="noti-TT-Acc"></span></div>
                    <input type="button" id="signup-submit-acc"
                onclick="AddOrUpdateacc()" name=" signup-submit-acc"
                value="ĐỒNG Ý">
                    <a> <h1 id="buttom-close" onclick="document.getElementById('form-edit-noti-acc').style.display='none'">X</h1></a>
                    <input type="submit" name="submitacc" value="submitacc" id="submitacc"
                style="visibility: hidden; opacity: 0;" />
            </form>

            <form action="" method="POST" id="formActionaccount">
            <input type="hidden" name="Idacc" value="" id="Idacc">
            <input type="hidden" name="typeActionacc" value="" id="typeActionacc">
            <input type="submit" name="submit" value="Submit-acc" id="btnActionacc"
                style="visibility: hidden; opacity: 0;" />
        </form>

       </div>
    </div>
    <div id="action-result-acc"></div>
    <script>

function AddOrUpdateacc(){
    document.getElementById('submitacc').click();
}

$(document).ready(function() {
    //submit form
    $("#formActionaccount").submit(function(event) {
        event.preventDefault(); //prevent default action 
        $.post("PHP/accountManager.php", {
                typeActionacc: $("#typeActionacc").val(),
                Idacc: $("#Idacc").val(),
        }, function(data) {
            $("#action-result-acc").html(data);
            search();
        });
    });



    $("#formEditOrCreateAcc").submit(function(event) {
        event.preventDefault(); //pacctomerManagerrevent default action 
        $.post("PHP/accountManager.php", {
            IdTK: $("#IdTK").val(),
            USERNAME: $("#USERNAME").val(),
            PASSWORD: $("#PASSWORD").val(),
            MaQuyen: $("#MaQuyen").val(),
            TrangThai: $("#TrangThai").val(),
        }, function(data) {
            $("#action-result-acc").html(data);
            search();
        });
    
    });
});

</script>