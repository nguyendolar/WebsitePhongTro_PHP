<!DOCTYPE html>
<html lang="vi-VN" itemscope itemtype="http://schema.org/WebPage" class="user_active">
<!-- Mirrored from phongtro123.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2023 08:57:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<?php include('head.php') ?>

<body class="home windows home">
    <div id="webpage">
    <?php
    if (isset($_GET['msg'])) {
    ?>
  <div class="toast" data-delay="2500" style="position:fixed; top: 100PX; right: 10PX;z-index: 2000;width: 300px">
    <script>
      swal({
        title: 'Đăng nhập thành công!',
        /* text: 'Redirecting...', */
        icon: 'success',
        timer: 3000,
        buttons: true,
        type: 'success'
      })
    </script>
  </div>
<?php } ?>
        <?php include('header.php') ?>
        <main id="main">
            <div style="height: 60px; margin-bottom: 10px;">
                <section id="filter-top-inner">
                    <section id="filter-top">
                    <form action="timkiem.php" method="post">
                        <div class="filter-body">
                           
                            <div class="filter-item location js-filter-show-popup-city" style="width : 210% !important">
                                <input type="text" style="background-color: #fff;
                                border: 1px solid #fff;
                                border-radius: 5px;
                                display: inline-flex;
                                align-items: center;
                                width: 100%;
                                height: 35px;
                                margin: 0 3px;
                                padding: 0;
                                position: relative;
                                cursor: pointer;" placeholder="Nhập khu vực muốn tìm kiếm" name="keyword" required/>
                            </div>
                            <div class="filter-item post-price js-filter-show-popup-price">
                            <select  name="giatu" style="background-color: #fff;
                                border: 1px solid #fff;
                                border-radius: 5px;
                                display: inline-flex;
                                align-items: center;
                                width: 100%;
                                height: 35px;
                                margin: 0 3px;
                                padding: 0;
                                position: relative;
                                cursor: pointer;" required>
                            <option value="" selected>Chọn giá từ : </option>
                            <?php for ($i=0; $i < 9000000; $i = $i + 1000000) { ?>
                                <option value="<?php echo $i ?>"><?php echo number_format($i); ?> đ</option>
                            <?php } ?>
						</select>
                            </div>
                            <div class="filter-item post-acreage js-filter-show-popup-acreage">
                                <select  name="giaden" style="background-color: #fff;
                                    border: 1px solid #fff;
                                    border-radius: 5px;
                                    display: inline-flex;
                                    align-items: center;
                                    width: 100%;
                                    height: 35px;
                                    margin: 0 3px;
                                    padding: 0;
                                    position: relative;
                                    cursor: pointer;" required>
                            <option value="" selected>Chọn giá đến : </option>
                            <?php for ($i=1000000; $i < 10000000; $i = $i + 1000000) { ?>
                                <option value="<?php echo $i ?>"><?php echo number_format($i); ?> đ</option>
                            <?php } ?>
						</select>
                            </div>
                            <div class="filter-item submit"><button style="background-color: #0071c2;
                                border: 1px solid #0071c2;
                                color: #fff;
                                justify-content: center;
                                font-weight: 700;
                                width: 100%;
                                cursor: pointer;" type="submit" name="search">Tìm kiếm</button></div>
                        </div>
                            </form>
                    </section>
                    <div class="black_overlay js-black-overlay"></div>
                </section>
            </div>
            <header class="page-header welcome">
                <h1 class="page-h1">Kênh thông tin Phòng Trọ Việt Nam</h1>
                <p class="page-description">Kênh thông tin Phòng Trọ Việt Nam - Website đăng tin cho thuê phòng
                    trọ, nhà nguyên căn, căn hộ, ở ghép nhanh, hiệu quả với 100.000+ tin đăng và 2.500.000 lượt xem mỗi
                    tháng.</p>
            </header>
            <div class="container clearfix">
                <div id="">
                    <section class="section section-post-listing">
                        <div class="section-header"><span class="section-title">Danh sách tin đăng</span></div>
                        <ul class="post-listing clearfix">
                            <?php
                            $querycv = mysqli_query($connect, "SELECT a.*, b.hoten
                            FROM baidang as a, nguoidung as b
                            WHERE a.nguoidung_id = b.id
                            ORDER BY a.id DESC");
                            while ($arUser = mysqli_fetch_array($querycv, MYSQLI_ASSOC)) {
                            ?>
                            <li class="post-item post-id-314706 style-4 clearfix tin-vip vipnoibat"
                                style="border-color: #E13427;" post-id="314706">
                                
                                <figure class="post-thumb"><a class="clearfix"
                                        href="chitiet.php?id=<?php echo $arUser['id'] ?>"><img
                                            class="lazy" src="images/mobile/image-placeholder.png"
                                            data-src="image/<?php echo $arUser['anh'] ?>"
                                            alt=""
                                            height="100" width="100" layout="responsive"></a><span class="post-save js-btn-save"
                                        data-post-id="314706"><i></i></span></figure>
                                <div class="post-meta">
                                    <h3 class="post-title"><a style="color: #E13427;"
                                            href="chitiet.php?id=<?php echo $arUser['id'] ?>"> <?php echo $arUser['tieude'] ?></a></h3>
                                    <div class="meta-row clearfix"><span class="post-price"><?php echo number_format($arUser['gia']) ?> đ /tháng</span><span class=""><a
                                                href="#"
                                                title=""><?php echo $arUser['diachi'] ?></a></span><time class="post-time"
                                            title=""><?php echo $arUser['thoigiandang'] ?></time></div>
                                    <div class="meta-row clearfix">
                                        <p class="post-summary"><?php echo substr($arUser['mota'], 0, 190) ?> ....v..v.</p>
                                    </div>
                                    <div class="meta-row clearfix">
                                        <div class="post-author"><img
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYxGvBE36Rvghj-BdUF3rtL0WJWp0XRt3mYTvICBdgSNfk1rUV-Q3DL1kMEK933sRXbtM&usqp=CAU"><span
                                                class="author-name"><?php echo $arUser['hoten'] ?></span></div><a rel="nofollow"
                                            target="_blank" href="https://zalo.me/<?php echo $arUser['sodienthoai'] ?>"
                                            class="btn-quick-zalo">Nhắn Zalo</a><a rel="nofollow" target="_blank"
                                            href="tel:<?php echo $arUser['sodienthoai'] ?>" class="btn-quick-call">Gọi <?php echo $arUser['sodienthoai'] ?></a>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </section>
                    <!-- <ul class="pagination">
                        <li class="page-item active"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="index4658.html?page=2">2</a></li>
                        <li class="page-item"><a class="page-link" href="index9ba9.html?page=3">3</a></li>
                        <li class="page-item"><a class="page-link" href="indexfdb0.html?page=4">4</a></li>
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                        <li class="page-item"><a class="page-link" href="index9769.html?page=5206"
                                rel="next">&raquo;&raquo;</a></li>
                    </ul> -->
                </div>
            </div>
        </main>
        <?php include('footer.php') ?>
        <div id="fixed_Left" class="banner_fixed" style=""><a target="_blank" rel="nofollow"
                href="https://bds123.vn/"><img src="images/bds123_120_300.gif"></a></div>
        <div id="fixed_Right" class="banner_fixed" style=""><a target="_blank" rel="nofollow"
                href="http://bit.ly/nhom-phong-tro-facebook"><img src="images/ad_nhom_fb.jpg"></a></div>
    </div>
    <div id="scroll_Top" class="js-scroll-top"></div>
    <div class="panel-backdrop"></div>
    <div class="admin_quick_tool js-admin-quick-tool" id="admin_quick_tool"></div>
    <script src="js/main-fr.min20e8.js?v=20230307"></script>
    <script src="search_box/js/search20e8.js?v=20230307"></script>
    
</body>
<!-- Mirrored from phongtro123.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2023 08:59:06 GMT -->

</html>