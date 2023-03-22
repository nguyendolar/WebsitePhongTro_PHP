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
        title: 'Thành công!',
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
            <header class="page-header welcome">
                <h1 class="page-h1">Danh sách tin đã đăng</h1>
            </header>
            <div class="container clearfix">
                <div id="">
                    <section class="section section-post-listing">
                        <ul class="post-listing clearfix">
                            <?php
                            $idnd = $_SESSION['id'];
                            $querycv = mysqli_query($connect, "SELECT a.*, b.hoten
                            FROM baidang as a, nguoidung as b
                            WHERE a.nguoidung_id = b.id
                            AND a.nguoidung_id = '".$idnd."'
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
                                                class="author-name"><?php echo $arUser['hoten'] ?></span></div>
                                                <div style="margin-left : 510px; margin-top : -37px">
                                                <a href="capnhat.php?id=<?php echo $arUser['id'] ?>" class="btn btn-infor" >Sửa</a>
                                            <a href="xuly.php?delete=<?php echo $arUser['id'] ?>" class="btn btn-infor" style="background-color : #f73859; border-color : #f73859">Xóa</a><div>
                                                
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