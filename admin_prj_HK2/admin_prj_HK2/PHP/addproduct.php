<div class="form-sign-in " id="form-add-product" method="POST">
    <div class="l-main-SignIn animate">
        <form action="" method="GET" name="FormAddProduct">
            <h1> thêm sản phẩm</h1>
            <input type="text" id="Idsach-add" name="Idsach" placeholder="Id Sách" required disabled>
            <div style="width: auto; height:15px;"><span id="noti-IdSach"></span></div>

            <input type="text" id="TenSach-add" name="TenSach" placeholder="Tên Sách" required>

            <div style="width: auto; height:15px;"><span id="noti-F-Address"></span></div>
            <input type="text" id="DonGia-add" name="DonGia" placeholder="Đơn giá" required>
            <div style="width: auto; height:15px;"><span id="noti-DonGia"></span></div>

            <!-- <input type="text" id="TheLoai" name="TheLoai " placeholder="Thể Loại" required> -->
            <select name="type-product-Add" id="TheLoai-add">
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
            <div style="width: auto; height:15px;"><span id="noti-F-Email"></span></div>

            <input type="text" id="NoiDung" name="NoiDung" placeholder="Nội Dung" required>
            <!-- <textarea rows="4" id="NoiDungABC-add"  cols="50" name="NoiDung"></textarea> -->
            <div style="width: auto; height:15px;"><span id="noti-NoiDung"></span></div>

            <input type="file" id="HinhAnh-add" name="HinhAnh" placeholder="Hình Ảnh" required>
            <div style="width: auto; height:15px;"> <span style="color: #16a085;" id="noti-img"></span></div>

            <select name="NXB-product-Add" id="NXB-add" >
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
            <!-- <input type="text" id="NXB" name="NXB" placeholder="Nhà xuất bản" required> -->
            <div style="width: auto; height:15px;"><span style="color: #16a085;" id="noti-nxb"></span></div>

            <input type="text" id="NgayXB-add" name="NgayXB" placeholder="Ngày xuất bản" required>
            <div style="width: auto; height:15px;"><span style="color: #16a085;" id="noti-day-xb"></span></div>

        <select name="author" id="author-add" >
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
            <!-- <input type="text" id="TacGia" name="TacGia" placeholder="Tác giả" required> -->
            <div style="width: auto; height:15px;"><span style="color: #16a085;" id="noti-author"></span></div>

            <input type="button" id="accept-add-submit"
                onclick="() => {document.getElementById('btnAddOrUpdateProduct').click();} name=" signup-submit"
                value="ĐỒNG Ý">
            <a>
                <h1 id="buttom-close" onclick="document.getElementById('form-add-product').style.display='none'">X</h1>
            </a>

            <input type="submit" name="submitProduct" value="Submit-Product" id="btnAddOrUpdateProduct"
                style="visibility: hidden; opacity: 0;" />

        </form>

    </div>
</div>