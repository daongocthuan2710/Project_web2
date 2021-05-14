<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style2.css">
    <link rel="stylesheet" href="src/css/style.scss">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body> 
    <div class="wrapper">
        <?php
                require('../admin_prj_HK2/PHP/slibar.php')
            ?>
    </div>
    <!-- this is content -->
    <div class="main_ctn">
        <?php
                require('../admin_prj_HK2/PHP/fluir.php')
            ?>
        <div class="main_ctn_inner">
            <?php
                        require('../admin_prj_HK2/PHP/ctn-fluir.php')
                    ?>
            <div class="statictical-flur" id="2">
                <?php
                            include('../admin_prj_HK2/PHP/char.php')
                        ?>
            </div>
            <div id="3" class="title-product">
                <h2>sản phẩm đang có </h2>
            </div>
            <div class="statictical-product">
                <div class="main-product">
                    <form action="" method="POST" id="form-search-product">
                        <input type="text" name="search-name-product" id="search-name-product" onkeyup="search()"
                            placeholder="Nhập tên sản phẩm...">
                        <select name="type-product" id="type-product" onchange="search()">
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
                        <select name="author-product" id="author-product" onchange="search()">
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

                        <input type="submit" name="submit" value="Submit Form" id="btnSubmitSearch"
                            style="visibility: hidden; opacity: 0;" />
                    </form>
                    <?php include '../admin_prj_HK2/PHP/addproduct.php';?>
                    <?php include '../admin_prj_HK2/PHP/EDIT-FORM-PRODUCT.php';?>
                    <div id="form-accept-delete-product" class="form-acpt-dlt-prct">
                        <form class="ctn-form-acpt-dlt-prct animate-form-accept-delete-product"
                            action="/action_page.php" method="post">
                            <h3>chắc chắn xóa?</h3>
                            <button type="button"
                                onclick="document.getElementById('form-accept-delete-product').style.display='none'"
                                class="cancelbtn-dlt-ele-prct ">Cancel</button>
                            <button type="button" id="btnConfirmDel" class="cancelbtn-dlt-ele-prct ">delete</button>
                        </form>
                    </div>
                    
                    <?php
                            include('../admin_prj_HK2/PHP/checkbill.php');
                            include('../admin_prj_HK2/PHP/staticial-product.php');
                        ?>
                    </div>
                </div>
                <div class="title-admin" id="5">
                    <h2>danh sách nhân viên</h2>
                </div>
                <div class="list-admin">
                    <?php include '../admin_prj_HK2/PHP/EDIT-FORM-NOTI-HUMAN.php';?>
                    <form action="" method="POST" id="form-search-manager">
                        <input type="text" name="search-accAdmin" id="search-accAdmin" onkeyup="searchManager()"
                            placeholder="nhập tên nhân viên ...">
                        <input type="submit" name="submit" value="Submit Form" id="btnSubmitSearchManager"
                            style="visibility: hidden; opacity: 0;" />
                    </form>
                    <?php
                                 include('../admin_prj_HK2/PHP/list-admin.php')
                            ?>
                </div>

                <div class="title-customer" id="6">
                    <h2>danh sách khách hàng</h2>
                </div>
                <div class="list-customer">
                <?php include '../admin_prj_HK2/PHP/EDIT-FORM-NOTI-CUS.php';?>
                    <form action="" method="POST" id="form-search-customer">
                        <input type="text" name="search-customer" onkeyup="searchCustomer()" id="search-customer"
                            placeholder="nhập tên khách hàng...">
                        <input type="submit" name="submit" value="Submit Form" id="btnSubmitSearchCustomer"
                            style="visibility: hidden; opacity: 0;" />
                    </form>
                    <?php
                            include('../admin_prj_HK2/PHP/list-customer.php')
                        ?>
                </div>
                <div class="title-order" id="4">
                    <h2>đơn hàng</h2>
                </div>
                <div class="list-order">
                <?php include '../admin_prj_HK2/PHP/chitiethoadonform.php';?>
                    <form action="" method="POST" id="form-search-bill">
                        <input type="text" name="search-bill" onkeyup="searchBill()" id="search-bill"
                            placeholder="nhập tên khách hàng trong bill...">
                        
                        <input type="submit" name="submit" value="Submit Form" id="btnSubmitSearchBill"
                            style="visibility: hidden; opacity: 0;" />
                    </form>
                    <?php
                         include('../admin_prj_HK2/PHP/order.php')
                    ?>
                </div>
                <div class="title-order" id="7">
                    <h2>tài khoản</h2>
                </div>
                <div class="list-account">
                    
                <?php include '../admin_prj_HK2/PHP/EDIT-FORM-ACCOUNT.php';?>
                    <form action="" method="POST" id="form-search-account">
                        <input type="text" name="search-account" onkeyup="searchAccount()" id="search-account"
                            placeholder="nhập tên tài khoản...">
                        <select name="quyen" id="quyen" onchange="searchAccount()">
                            <option value="" selected>Quyền</option>
                            <!-- <option value="1">du phong</option>
                            <option value="2">nguyen phong</option>  -->

                            <?php
                                require_once('../admin_prj_HK2/utils/connect_db.php');
                                ['findAllQuyen' => $quyen] = require '../admin_prj_HK2/entities/quyen.php';
                                $data = $quyen($conn);
                                for ($i=0; $i < count($data); $i++) { 
                                echo "<option value=\"".$data[$i]['MaQuyen']."\">".$data[$i]['TenQuyen']."</option>";
                                }
                            ?>
                        </select>
                        <input type="submit" name="submit" value="Submit Form" id="btnSubmitSearchAccount"
                            style="visibility: hidden; opacity: 0;" />
                    </form>
                    <?php
                         include('../admin_prj_HK2/PHP/accounts.php')
                    ?>
                </div>
            </div>

            <div class="footer-ctn">
                <?php
                        include('../admin_prj_HK2/PHP/footer.php')
                ?>
            </div>
        </div>
    </div>
    </div>
    <button id="myBtnTop" title="Go to top"><i class="fas fa-angle-double-up"></i></button>
    <script src="src/js/js_admin.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>

    <script>
    function search() {
        document.getElementById("btnSubmitSearch").click();
    }

    function addBook(){
        document.getElementById('Idsach').value='';
        document.getElementById('TenSach').value='';
        document.getElementById('DonGia').value='';
        document.getElementById('TheLoai').value='';
        document.getElementById('NoiDung').value='';
        document.getElementById('HinhAnh').value='';
        document.getElementById('NXB').value='';
        document.getElementById('NgayXB').value='';
        document.getElementById('author').value='';
        document.getElementById('TonKho').value='';
        document.getElementById('signup-submit').value='Thêm';
        document.getElementById('title-form-edit').innerHTML='Thêm sách mới';
        document.getElementById('form-edit-product').style.display='block';
    }


    function deleteBook(id) {
        document.getElementById('form-accept-delete-product').style.display = 'block';
        document.getElementById('btnConfirmDel').onclick = function() {
            document.getElementById('form-accept-delete-product').style.display = 'none';
            document.getElementById('idProd').value = id;
            document.getElementById('typeActionProd').value = "delete";
            document.getElementById('btnActionProd').click();
        }
    }
    
    
    function EditBook(id) {
        document.getElementById('signup-submit').value='Đồng ý';
        document.getElementById('title-form-edit').innerHTML='Sửa thông tin';
        document.getElementById('idProd').value = id;
        document.getElementById('typeActionProd').value = "findProd";
        document.getElementById('btnActionProd').click();
    }

    
    function addMng(){
        document.getElementById('IdNV').value='';
        document.getElementById('TenNV').value='';
        document.getElementById('HoDemNV').value='';
        document.getElementById('SDTNV').value='';
        document.getElementById('EmailNV').value='';
        document.getElementById('DiaChiNV').value='';
        document.getElementById('signup-submit-mng').value='Thêm';
        document.getElementById('title-form-edit-mng').innerHTML=' nhân viên mới';
        document.getElementById('form-edit-noti-humman').style.display='block';
    }

    function deleteMng(id) {
        document.getElementById('form-accept-delete-product').style.display = 'block';
        document.getElementById('btnConfirmDel').onclick = function() {
            document.getElementById('form-accept-delete-product').style.display = 'none';
            document.getElementById('IdMng').value = id;
            document.getElementById('typeActionMng').value = "delete";
            document.getElementById('btnActionMng').click();
        }
    }
    
    function EditMng(id) {
        document.getElementById('signup-submit').value='Đồng ý';
        document.getElementById('title-form-edit-mng').innerHTML='Sửa thông tin';
        document.getElementById('IdMng').value = id;
        document.getElementById('typeActionMng').value = "findMng";
        document.getElementById('btnActionMng').click();
    }
    function addCus(){
        document.getElementById('IdKH').value='';
        document.getElementById('TenKH').value='';
        document.getElementById('HoDemKH').value='';
        document.getElementById('SDTKH').value='';
        document.getElementById('EmailKH').value='';
        document.getElementById('DiaChiKH').value='';
        document.getElementById('signup-submit-cus').value='Thêm';
        document.getElementById('title-form-edit-cus').innerHTML=' khách hàng mới';
        document.getElementById('form-edit-noti-cus').style.display='block';
    }

    function deleteCus(id) {
        document.getElementById('form-accept-delete-product').style.display = 'block';
        document.getElementById('btnConfirmDel').onclick = function() {
            document.getElementById('form-accept-delete-product').style.display = 'none';
            document.getElementById('IdCus').value = id;
            document.getElementById('typeActionCus').value = "delete";
            document.getElementById('btnActionCus').click();
        }
    }
    
    function EditCus(id) {
        document.getElementById('signup-submit-cus').value='Đồng ý';
        document.getElementById('title-form-edit-cus').innerHTML='Sửa thông tin';
        document.getElementById('IdCus').value = id;
        document.getElementById('typeActionCus').value = "findCus";
        document.getElementById('btnActionCus').click();
    }

    function addAcc(){
        document.getElementById('IdTK').value='';
        document.getElementById('USERNAME').value='';
        document.getElementById('PASSWORD').value='';
        document.getElementById('MaQuyen').value='';
        document.getElementById('TrangThai').value='';
        document.getElementById('signup-submit-acc').value='Thêm';
        document.getElementById('title-form-edit-acc').innerHTML=' tài khoản mới';
        document.getElementById('form-edit-noti-acc').style.display='block';
    }

    function deleteAcc(id) {
        document.getElementById('form-accept-delete-product').style.display = 'block';
        document.getElementById('btnConfirmDel').onclick = function() {
            document.getElementById('form-accept-delete-product').style.display = 'none';
            document.getElementById('Idacc').value = id;
            document.getElementById('typeActionacc').value = "delete";
            document.getElementById('btnActionacc').click();
        }
    }
    
    function EditAcc(id) {
        document.getElementById('signup-submit-acc').value='Đồng ý';
        document.getElementById('title-form-edit-acc').innerHTML='Sửa thông tin';
        document.getElementById('Idacc').value = id;
        document.getElementById('typeActionacc').value = "findAcc";
        document.getElementById('btnActionacc').click();
    }
    
    

    $(document).ready(function() {
        //submit form
        $("#form-search-product").submit(function(event) {
            event.preventDefault(); //prevent default action 
            var post_url = $(this).attr("action"); //get form action url
            // var request_method = $(this).attr("method"); //get form GET/POST method
            // var form_data = $(this).serialize(); //Encode form elements for submission
            // console.log(form_data);
            $.post("PHP/searchProduct.php", {
                txtSearch: $("#search-name-product").val(),
                IdType: $("#type-product").val(),
                IdAuthor: $("#author-product").val(),
            }, function(data) {
                $("#products-result").html(data);
            });
        });
    });

    function searchManager() {
        document.getElementById("btnSubmitSearchManager").click();
    }
    $(document).ready(function() {
        //submit form
        $("#form-search-manager").submit(function(event) {
            event.preventDefault(); //prevent default action 
            var post_url = $(this).attr("action"); //get form action url
            // var request_method = $(this).attr("method"); //get form GET/POST method
            // var form_data = $(this).serialize(); //Encode form elements for submission
            // console.log(form_data);
            $.post("PHP/searchManager.php", {
                txtSearchmanager: $("#search-accAdmin").val(),
            }, function(data) {
                $("#admin-acc-result").html(data);
            });
        });
    });

    function searchCustomer() {
        document.getElementById("btnSubmitSearchCustomer").click();
    }
    $(document).ready(function() {
        //submit form
        $("#form-search-customer").submit(function(event) {
            event.preventDefault(); //prevent default action 
            var post_url = $(this).attr("action"); //get form action url
            // var request_method = $(this).attr("method"); //get form GET/POST method
            // var form_data = $(this).serialize(); //Encode form elements for submission
            // console.log(form_data);
            $.post("PHP/searchCustomer.php", {
                txtSearchCustomer: $("#search-customer").val(),
            }, function(data) {
                $("#customer-result").html(data);
            });
        });
    });

    function searchAccount() {
        document.getElementById("btnSubmitSearchAccount").click();
    }
    $(document).ready(function() {
        //submit form
        $("#form-search-account").submit(function(event) {
            event.preventDefault(); //prevent default action 
            var post_url = $(this).attr("action"); //get form action url
            // var request_method = $(this).attr("method"); //get form GET/POST method
            // var form_data = $(this).serialize(); //Encode form elements for submission
            // console.log(form_data);
            $.post("PHP/searchAccount.php", {
                txtSearchAccount: $("#search-account").val(),
                MaQuyen: $("#quyen").val(),
            }, function(data) {
                $("#account-result").html(data);
            });
        });
    });

    function searchBill() {
        document.getElementById("btnSubmitSearchBill").click();
    }
    $(document).ready(function() {
        //submit form
        $("#form-search-bill").submit(function(event) {
            event.preventDefault(); //prevent default action 
            var post_url = $(this).attr("action"); //get form action url
            // var request_method = $(this).attr("method"); //get form GET/POST method
            // var form_data = $(this).serialize(); //Encode form elements for submission
            // console.log(form_data);
            $.post("PHP/searchBill.php", {
                txtSearchBill: $("#search-bill").val(),
                namecus: $("#name-customer-on-bill").val(),
                daybill: $("#day-on-bill").val(),
            }, function(data) {
                $("#bill-result").html(data);
            });
        });
    });
    
    </script>
</body>

</html>
