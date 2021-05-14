<div class="form-sign-in " id="form-edit-product">
    <div class="l-main-SignIn animate">
        <form action="" method="GET" name="FormEditProduct" method="POST" id="formEditOrCreate"
            enctype="multipart/form-data">
            <h1 id="title-form-edit">Sửa thông tin</h1>
            <input type="text" id="Idsach" name="Idsach" placeholder="Id Sách" disabled>
            <div style="width: auto; height:15px;"><span id="noti-IdSach"></span></div>

            <input type="text" id="TenSach" name="TenSach" placeholder="Tên Sách" required>

            <div style="width: auto; height:15px;"><span id="noti-TenSach"></span></div>
            <input type="text" id="DonGia" name="DonGia" placeholder="Đơn giá" onkeyup="checkPrice()" required pattern="^(([0-9]*)+(.)+[0-9])$">
            <div style="width: auto; height:15px;"><span id="noti-DonGia-pro"></span></div>

            <!-- <input type="text" id="TheLoai" name="TheLoai " placeholder="Thể Loại" required> -->
            <select name="type-product-edit" id="TheLoai">
                <option value="" selected>Thể loại</option>
                <!-- <option value="1">trinh tham</option>
                        <option value="2">học tập</option> -->
                <?php
                        require_once('../admin_prj_HK2/utils/connect_db.php');
                        ['findAllTypes' => $types] = require '../admin_prj_HK2/entities/loai.php';
                        $data = $types($conn);
                        for ($i=0; $i < count($data); $i++) { 
                        echo "<option value=\"".$data[$i]['IdTheLoai']."\">".$data[$i]['TenTheLoai']."</option>";
                        }
                        ?>
            </select>

            <input type="text" id="NoiDungABC" name="NoiDungABC" placeholder="Nội Dung" required>
            <!-- <textarea rows="4" id="NoiDung"  cols="50" name="NoiDung"></textarea> -->
            <div style="width: auto; height:15px;"><span id="noti-NoiDung"></span></div>

            <input type="file" id="HinhAnh" name="HinhAnh" placeholder="Hình Ảnh" class="file-img-ip">
             <label for="HinhAnh" class="file-img-lb">choose a file</label>

            <select name="NXB-product-edit" id="NXB">
                <option value="" selected>Nhà xuất bản</option>
                <!-- <option value="1">du phong</option>
                        <option value="2">nguyen phong</option>  -->

                <?php
                        require_once('../admin_prj_HK2/utils/connect_db.php');
                        ['findAllNXB' => $nxb] = require '../admin_prj_HK2/entities/nxb.php';
                        $data = $nxb($conn);
                        for ($i=0; $i < count($data); $i++) { 
                        echo "<option value=\"".$data[$i]['IdNXB']."\">".$data[$i]['TenNXB']."</option>";
                        }
                        ?>
            </select>

            <input type="text" id="NgayXB" name="NgayXB" placeholder="Ngày xuất bản" required>
            <div style="width: auto; height:15px;"><span style="color: #16a085;" id="noti-day-xb"></span></div>

            <select name="author" id="author">
                <option value="" selected>Tác giả</option>
                <!-- <option value="1">du phong</option>
                        <option value="2">nguyen phong</option>  -->

                <?php
                        require_once('../admin_prj_HK2/utils/connect_db.php');
                        ['findAllAuthor' => $author] = require '../admin_prj_HK2/entities/tacgia.php';
                        $data = $author($conn);
                        for ($i=0; $i < count($data); $i++) { 
                        echo "<option value=\"".$data[$i]['IdTacGia']."\">".$data[$i]['TenTacGia']."</option>";
                        }
                        ?>
            </select>
            <input type="text" id="TonKho" name="TonKho" placeholder="Tồn kho" onkeyup="checkPrice()" required pattern="^([0-9]*)$">
            <div style="width: auto; height:15px;"><span id="noti-SL-pro"></span></div>
            <!-- <input type="text" id="TacGia" name="TacGia" placeholder="Tác giả" required> -->

            <input type="button" id="signup-submit"
                onclick="AddOrUpdatebooks()" name=" signup-submit"
                value="ĐỒNG Ý">
            <a>
                <h1 id="buttom-close" onclick="document.getElementById('form-edit-product').style.display='none'">X</h1>
            </a>

            <input type="submit" name="submitBookkkk" value="submitBookkkk" id="submitBookkkk"
                style="visibility: hidden; opacity: 0;" />

        </form>

        <form action="" method="POST" id="formActionProduct">
            <input type="hidden" name="idProd" value="" id="idProd">
            <input type="hidden" name="typeActionProd" value="" id="typeActionProd">
            <input type="submit" name="submit" value="Submit-Book" id="btnActionProd"
                style="visibility: hidden; opacity: 0;" />
        </form>

    </div>
</div>
<div id="action-result"></div>
<script>

function AddOrUpdatebooks(){
    document.getElementById('submitBookkkk').click();
}

$(document).ready(function() {
    //submit form
    $("#formActionProduct").submit(function(event) {
        event.preventDefault(); //prevent default action 
        $.post("PHP/bookManager.php", {
            typeActionProd: $("#typeActionProd").val(),
            idProd: $("#idProd").val(),
        }, function(data) {
            $("#action-result").html(data);
            search();
        });
    });



    $("#formEditOrCreate").submit(function(event) {
        event.preventDefault(); //prevent default action 
        if( $('#TheLoai').val() == 0 || $('#NXB').val() == 0 || $('#author').val() == 0){
            alert('Ban chua chon du thong tin !!!!!!!');
            return;
        }
        var fd = new FormData();
        var files = $('#HinhAnh')[0].files;
        fd.append('HinhAnh', files[0]);
        fd.append('Idsach', $("#Idsach").val());
        fd.append('TenSach', $("#TenSach").val());
        fd.append('DonGia', $("#DonGia").val());
        fd.append('TheLoai', $("#TheLoai").val());
        fd.append('NoiDung', $("#NoiDungABC").val());
        fd.append('NXB', $("#NXB").val());
        fd.append('NgayXB', $("#NgayXB").val());
        fd.append('author', $("#author").val());
        fd.append('TonKho',$("#TonKho").val());
        $.ajax({
            url: "PHP/bookManager.php",
            type: 'POST',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response) {
                $("#action-result").html(response);
                search();
            },
        });
    
    });
});

</script>