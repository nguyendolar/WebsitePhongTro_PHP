<!DOCTYPE html>
<html lang="vi-VN" itemscope itemtype="http://schema.org/WebPage" class="user_active">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<?php include('head.php') ?>

<body class="post post-314706 windows single_post_new">
    <div id="webpage">
    <?php include('header.php') ?>
        <main id="main">
        <?php
$id = $_GET["id"];
$sql = "SELECT a.*, b.hoten, b.sodienthoai as 'sdt'
        FROM baidang as a, nguoidung as b
        WHERE a.nguoidung_id = b.id
        AND a.id = '".$id."'
    ";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($query);
?>
            <div class="container clearfix">
                <div id="left-col" style="width : 750px !important">
                    <article class="the-post tin-vip vipnoibat">
                        <div class="post-images">
                            <div class="images-swiper-container">
                                <div class="swiper-wrapper">
<?php
$querycv = mysqli_query($connect, "SELECT * 
FROM anhdinhkem
WHERE baidang_id = '".$id."'");
while ($arUser = mysqli_fetch_array($querycv, MYSQLI_ASSOC)) {
?>
                                    <div class="swiper-slide"><img
                                            alt="<?php echo $row['tieude'] ?>"
                                            src="image/<?php echo $arUser['anh'] ?>">
                                    </div>
<?php } ?>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-prev"><</div>
                                <div class="swiper-button-next">></div>
                            </div>
                        </div>
                        <header class="page-header">
                            <h1 class="page-h1"><a
                                    style="color: #E13427;"
                                    href="phong-cho-thue-du-moi-tien-nghi-gio-giac-tu-do-ngay-cong-vien-hoang-van-thu-quan-tan-binh-pr314706.html"
                                    title="<?php echo $row['tieude'] ?>"><?php echo $row['tieude'] ?></a></h1>
                            <div class="clearfix"></div>
                            <address class="post-address">Địa chỉ: <?php echo $row['diachi'] ?></address>
                            <div class="post-attributes">
                                <div class="item price"><i></i><span
                                        style="color: #16c784; font-weight: bold; font-size: 1.5rem"><?php echo number_format($row['gia']) ?> đ /tháng</span></div>
                                <div class="item published"><i></i><span title="">Đăng lúc : <?php echo $row['thoigiandang'] ?></span></div>
                            </div>
                        </header>
                        <section class="section post-main-content">
                            <div class="section-header">
                                <h2 class="section-title">Thông tin mô tả</h2>
                            </div>
                            <div class="section-content">
                            <?php echo $row['mota'] ?>
                            </div>
                        </section>
                        <section class="section post-contact">
                            <div class="section-header">
                                <h3 class="section-title">Thông tin liên hệ</h3>
                            </div>
                            <div class="section-content">
                                <table class="table">
                                    <tr>
                                        <td class="name">Liên hệ:</td>
                                        <td><?php echo $row['hoten'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="name">Điện thoại:</td>
                                        <td> <?php echo $row['sodienthoai'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="name">Zalo</td>
                                        <td><?php echo $row['sodienthoai'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </section>
                        <section class="section post-map">
                            <div class="section-header">
                                <h3 class="section-title">Bản đồ</h3>
                                <address class="section-description">Địa chỉ: <?php echo $row['diachi'] ?></address>
                            </div>
                            <div class="section-content">
                                <div id="__maps_content" style="width:100%; height:300px;" data-lat="10.8038591"
                                    data-long="106.6673408"
                                    data-address=""><?php echo $row['bando'] ?></div>
                            </div>
                        </section>
                    </article>
                </div>
                <aside id="aside" style="width : 345px !important">
                    <div class="author-aside">
                        <figure class="author-avatar"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYxGvBE36Rvghj-BdUF3rtL0WJWp0XRt3mYTvICBdgSNfk1rUV-Q3DL1kMEK933sRXbtM&usqp=CAU">
                        </figure><span class="author-name"><?php echo $row['hoten'] ?></span>
                        <div style="min-height: 16px; margin-bottom: 10px;">
                        </div><a class="btn author-phone" rel="nofollow" href="tel:<?php echo $row['sdt'] ?>"><i></i> <?php echo $row['sdt'] ?></a><a
                            class="btn author-zalo" target="_blank" rel="nofollow"
                            href="https://zalo.me/<?php echo $row['sdt'] ?>"><i></i> Nhắn Zalo</a>
                    </div>
                    
                    <section class="section section-aside-tinmoidang">
                        <div class="section-header"><span class="section-title">Tin mới đăng</span></div>
                        <ul class="post-listing aside clearfix">
                        <?php
                            $querycd = mysqli_query($connect, "SELECT *
                            FROM baidang 
                            ORDER BY id DESC");
                            while ($ar = mysqli_fetch_array($querycd, MYSQLI_ASSOC)) {
                            ?>
                            <li class="post-item clearfix normal" post-id="619554"><a
                                    href="chitiet.php?id=<?php echo $ar['id'] ?>">
                                    <figure><img class="lazy" src="image/<?php echo $ar['anh'] ?>"
                                            data-src=""
                                            alt="<?php echo $ar['tieude'] ?>"
                                            height="100" width="100" layout="responsive"></figure>
                                    <div class="post-meta"><span class="post-title" style="color: #055699;"><?php echo $ar['tieude'] ?></span>
                                    <span class="post-price"><?php echo number_format($ar['gia']) ?> đ /tháng</span>
                                    <time class="post-time" title=""><?php echo $ar['thoigiandang'] ?></time></div>
                                </a></li>
                            <?php } ?>
                        </ul>
                    </section>
                </aside>
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
    
</body>
</html>