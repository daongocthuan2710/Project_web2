<div id="main_search">
    <div class="content">
        <div class="container row">
            <div class="col-md-3 col-sm-12 search_filter">
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-12 col-sm-12 title_search" >
                        <h2>TÌM KIẾM THEO</h2>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">

                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-12 col-sm-12 content_filter">
                            <div class="timtheo">
                                <div class="timtheogia">Giá</div>
                                <div class="muiten_timkiem">v</div>
                            </div>
                            <div id="timtheogia_input">
                                <input type="text" id="giatu"  placeholder="TỪ"/>   
                                <hr width="10%" size="5" align="center" color="black"/>
                                <input type="text" id="giaden"  placeholder="ĐẾN"/>
                            </div>

                        </div>
                    </div>

                    <hr width="100%" size="3" align="center" color="black"/>
                    
                    <!-- <div class="col-md-12 col-sm-12">
                        <div class="col-md-12 col-sm-12 content_filter">
                            <div class="timtheo">
                                <div class="timtheogia">Sắp Xếp</div>
                                <div class="muiten_timkiem">v</div>
                            </div>
                            <select class="chonngonngu" id="sapxep">
                                <option id="ngaunhien">&nbsp;Sắp Xếp Ngẫu Nhiên</option>
                                <option id="tangdan">&nbsp;Sắp Xếp Tăng Dần</option>
                                <option id="giamdan">&nbsp;Sắp Xếp Giảm Dần</option>
                            </select>
                    </div>   -->

                    <hr width="100%" size="3" align="center" color="black"/>

                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-12 col-sm-12 content_filter">
                            <div class="timtheo">
                                <div class="timtheogia">Sắp Xếp</div>
                                <div class="muiten_timkiem">v</div>
                            </div>
                            <select class="chonngonngu" id="sapxep">
                                <option id="ngaunhien" value="ngaunhien" selected>&nbsp;Sắp Xếp Ngẫu Nhiên</option>
                                <option id="tangdan" value="tangdan">&nbsp;Sắp Xếp Tăng Dần</option>
                                <option id="giamdan" value="giamdan">&nbsp;Sắp Xếp Giảm Dần</option>
                            </select>
                        </div>  

                    </div>

                    <hr width="100%" size="3" align="center" color="black"/>

                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-12 col-sm-12 content_filter">
                            <div class="timtheo">
                                <div class="timtheogia">Thể loại</div>
                                <div class="muiten_timkiem">v</div>
                            </div>
                            <div class="timtheo_input">
                                <input type="text" id="input_tl"  placeholder="Tìm Kiếm Thể Loại"/>
                            </div>
                            <ul class="detail_filter" id="theloai">

                            </ul>
                        </div>
                    </div>

                    <hr width="100%" size="3" align="center" color="black"/>

                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-12 col-sm-12 content_filter">
                            <div class="timtheo">
                                <div class="timtheogia">Tác Giả</div>
                                <div class="muiten_timkiem">v</div>
                            </div>
                            <div class="timtheo_input">
                                <input type="text" id="input_tacgia" onchange="doigia2()" placeholder="Tìm Kiếm Tác Giả"/>
                            </div>
                            <ul class="detail_filter" id="tacgia">

                            </ul>
                        </div>
                    </div>

                    <hr width="100%" size="3" align="center" color="black"/>

                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-12 col-sm-12 content_filter">
                            <div class="timtheo">
                                <div class="timtheogia">Nhà Xuất Bản</div>
                                <div class="muiten_timkiem">v</div>
                            </div>
                            <div class="timtheo_input">
                                <input type="text" id="input_nxb" onchange="doigia2()" placeholder="Tìm Kiếm Nhà Xuất Bản"/>
                            </div>
                            <ul class="detail_filter" id="nxb">

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
                <div class="col-md-9 col-sm-12 search_product">

                    <div class="col-md-12 col-sm-12 product_item" id="product_item"></div>

                    <div class="col-md-12 col-sm-12">
                        <div id="page"></div>
                    </div>
                </div>
        </div>
    </div>     
</div>