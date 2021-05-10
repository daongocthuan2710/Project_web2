
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_ct.css">
    <link rel="stylesheet" href="..\bootstrap\bootstrap\css\bootstrap.css  ">
    <link rel="stylesheet" href="..\icon\font-awesome\css\font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="jquery.exzoom.css"> 
    <script src="app.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title>chi tiet san pham</title>
</head>
<body>

<!-- <?php include "header.php" ?>   -->


<div class="product_details">

    <div class="category_path">
        <a href="index.php">Trang Chủ</a>
        <i>></i>
        <a href="Ngôn ngữ">Ngôn ngữ</a>
        <i>></i>
        <a href="Thể loại">Thể loại</a>
        <i>></i>
        <a href="Tên sách">Tên sách</a>
    </div>

    <div class="product_table">

        <div class="exzoom img_product" id="exzoom">
            <div class="exzoom_img_box">
                <div class='exzoom_img_ul'>
                    <img src="img_ct/30.jpg"/>
                </div>
            </div>
        </div>
        <div class="details">

            <div class="book_name">
                <h2>Tên Sách</h2>
            </div>

            <div class="publisher">Nhà Phát Hành</div>


            <div class="interactive">

                <h1>Giá</h1>

                <div class="description">
                    <h3>Mô tả: </h3>
                    <div class="content_description mrg">nội dung mô tả</div>
                </div>


                
                <div class = "available mrg">Sẳn có : </div>
                <div class = "amount mrg">
                    Số lượng :
                    <div class = "IOD">
                        <button  id = "decrease" type="" onclick= "decrease()">-</button>
                        <input id ="data" type="text" value = "1">
                        <button id = "increase" type="number" onclick = "increase()" >+</button>
                    </div>
                
                </div>

                <div class = "heart_cart mrg">
                    <button class= "heart" type="">
                        <div class="bi-heart btn "></div>
                        <!-- yêu thích -->
                    </button>
                    <div class="cart">
                        <button type="" class = "btn btn-success">
                                            <!-- <div class="bi-cart4 btn"></div> -->
                                            Mua ngay
                                        </button>

                                        <button type="">
                                            <div class="bi-cart4 btn "></div>
                                            Thêm vào giỏ hàng
                        </button>
                    </div>
                    
                </div>

                <div class="clearfix"></div>

                <div class = "mrg ">
                    <button type="" class = " btn btn-primary">
                            <div class="fa fa-thumbs-o-up"></div>
                            <!-- <img src="img_ct/like.png"/> -->
                            <!-- <a href="https://icons8.com/icon/114072/facebook-like">Facebook Like icon by Icons8</a> -->
                        like
                    </button>

                    <button type="" class = " btn btn-primary">
                        <!-- <img src="img_ct/share.png"/> -->
                        share
                    </button>
                </div>
            </div>

        </div>

    </div>

<div class="more_infomation clearfix">

    <div class="CDC">

        <button class="content_product btn btn-primary" onclick = "content();">Nội dung</button>

        <button class="detailed_infomation btn btn-primary" onclick = "infomation();">Thông tin chi tiết</button>

        <div class="comment_reviews btn btn-primary" onclick = "comment_review();">Nhật xét & Đánh giá</div>

    </div>

    <div class="infomation_displayed">
        <h2 id = "h2">Thông tin hiển thị</h2>
        <div id = "chitiet">
            <div>
                The loai :
            </div>
            <div>
                Loai san pham :
            </div>
            <div>
                tac gia :
            </div>
            <div>
                nha xuat ban :
            </div>
            <div>
                nha phat hanh :
            </div>
        </div>

        <div  id = "comment_review"  style = "display:none;">
            <h1>Comment & Review</h1>

            <div id = "name_user">
                <h2>Tên: </h2>
                <input type="text">
            </div>

            <div id = "review_product">
                <h2>Đánh giá</h2>
                <div class="review">
                <input type="radio" name="star" id = "star1" ><label for="star1"></label>
                <input type="radio" name="star" id = "star2" ><label for="star2"></label>
                <input type="radio" name="star" id = "star3" ><label for="star3"></label>
                <input type="radio" name="star" id = "star4" ><label for="star4"></label>
                <input type="radio" name="star" id = "star5" ><label for="star5"></label>
                </div>
            </div>

            <div id="content_comment">
                <h2>Nội dung Nhận xét</h2>
                <input type="text" style="width: 300px">
            </div>
        </div>

    </div>
    
</div>

<!-- <div class="hot_products">
<h1>Sản phẩm bán chạy</h1>

    <div class="spthinhhanh">
                <div id="spthinhhanh" class="product">
                    <div class="box item">
                        <div class="img_div"></div>
                        <div class="info_div"></div>
                    </div>
                    <div class="box item" >
                        <div class="img_div"></div>
                        <div class="info_div"></div>
                    </div>
                    <div class="box item">
                        <div class="img_div"></div>
                        <div class="info_div"></div>
                    </div>
                    <div class="box item">
                        <div class="img_div"></div>
                        <div class="info_div"></div>
                    </div>
                    <div class="box item">
                        <div class="img_div"></div>
                        <div class="info_div"></div>
                    </div>
                </div>
                <div class="owl-buttons">
                    <div class="owl-next" onclick="next_prduct('spthinhhanh',1)">&#10095;</div>
                    <div class="owl-previous" onclick="next_prduct('spthinhhanh',-1)">&#10094;</div>
                </div>
    </div>

</div>

<div class="same_kind">

    <h1>Sản phẩm cùng thể loại</h1>

    <div class="spthinhhanh">
                <div id="spthinhhanh" class="product">
                    <div class="box item">
                        <div class="img_div"></div>
                        <div class="info_div"></div>
                    </div>
                    <div class="box item" >
                        <div class="img_div"></div>
                        <div class="info_div"></div>
                    </div>
                    <div class="box item">
                        <div class="img_div"></div>
                        <div class="info_div"></div>
                    </div>
                    <div class="box item">
                        <div class="img_div"></div>
                        <div class="info_div"></div>
                    </div>
                    <div class="box item">
                        <div class="img_div"></div>
                        <div class="info_div"></div>
                    </div>
                </div>
                <div class="owl-buttons">
                    <div class="owl-next" onclick="next_prduct('spthinhhanh',1)">&#10095;</div>
                    <div class="owl-previous" onclick="next_prduct('spthinhhanh',-1)">&#10094;</div>
                </div>
    </div>

</div>

</div> -->
        
   
<?php include "footer.php" ?>

    <script src = "./js/app.js"></script>
    <script style = "text\javascript" src = "\bootstrap\bootstrap\js\bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="jquery.exzoom.js"></script>
    <script type="text/javascript">
        $(function(){

            $("#exzoom").exzoom({
            // options here
            });

        });
    </script>
</body>
</html>
