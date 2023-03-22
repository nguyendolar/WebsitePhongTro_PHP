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
            <div style="height: 20px; margin-bottom: 10px;">
            <?php
            if(isset($_POST['search'])){
                $key = $_POST['keyword'];
                $giatu  = $_POST['giatu'];
                $giaden = $_POST['giaden'];
            }
            ?>
            </div>
            <header class="page-header welcome">
                <h2 class="page-h2">Tìm kiếm cho khu vực : <?php echo $key ?> , với khoảng tiền từ <?php echo number_format($giatu) ?> đ đến <?php echo number_format($giaden) ?> đ</h2>
            </header>
            <div class="container clearfix">
                <div id="">
                    <section class="section section-post-listing">
                        
                        <ul class="post-listing clearfix">
                            <?php
                            $querycv = mysqli_query($connect, "SELECT a.*
                            FROM baidang as a
                            WHERE (a.tieude LIKE '%".$key."%'
                            OR a.diachi LIKE '%".$key."%'
                            OR a.mota LIKE '%".$key."%')
                            AND a.gia >= '".$giatu."'
                            AND a.gia <= '".$giaden."'
                            ORDER BY a.id DESC");
                            while ($arUser = mysqli_fetch_array($querycv, MYSQLI_ASSOC)) {
                                $idnd = $arUser['nguoidung_id'];
                                $sql = "SELECT *
                                        FROM nguoidung
                                        WHERE id = '".$idnd."'
                                    ";
                                $query = mysqli_query($connect, $sql);
                                $row = mysqli_fetch_array($query);
                            
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
                                                class="author-name"><?php echo $row['hoten'] ?></span></div><a rel="nofollow"
                                            target="_blank" href="https://zalo.me/<?php echo $arUser['sodienthoai'] ?>"
                                            class="btn-quick-zalo">Nhắn Zalo</a><a rel="nofollow" target="_blank"
                                            href="tel:<?php echo $arUser['sodienthoai'] ?>" class="btn-quick-call">Gọi <?php echo $arUser['sodienthoai'] ?></a>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </section>
                   
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