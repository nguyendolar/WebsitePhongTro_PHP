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
        title: 'Đăng tin thành công!',
        /* text: 'Redirecting...', */
        icon: 'success',
        timer: 3000,
        buttons: true,
        type: 'success'
      })
    </script>
  </div>
<?php } ?>
<?php
    if (isset($_GET['fail'])) {
    ?>
<div class="toast" data-delay="2500" style="position:fixed; top: 100PX; right: 10PX;z-index: 2000;width: 300px">
  <script>
    swal({
      title: 'Thất bại!',
      /* text: 'Redirecting...', */
      icon: 'error',
      timer: 3000,
      buttons: true,
      type: 'error'
    })
  </script>
</div>
<?php } ?>
        <?php include('header.php') ?>
        <main id="main">
            <header class="page-header welcome">
                <h1 class="page-h1">Đăng tin phòng trọ</h1>
            </header>
            <div class="container clearfix">
                <div id="">
                    <section class="section section-post-listing">
                    <form class="form-access login-form js-login-form clearfix" action="xuly.php" method="POST" enctype="multipart/form-data">
                            <div id="left-col">
                                <div class="form-group form-group-phone"><label for="inputPhoneEmailLogin">Tiêu đề</label>
                                <input type="text" class="form-control" id="inputPhoneEmailLogin" required
                                        placeholder="" name="tieude"></div>
                                <div class="form-group form-group-password"><label for="password">Ảnh</label>
                                    <input type="hidden" name="size" value="1000000"> 
                                    <input type="file" class="form-control" name="image"/>
                                </div>
                                <div class="form-group form-group-password"><label for="password">Số điện thoại</label><input
                                type="text" class="form-control" id="password" required placeholder=""
                                name="sodienthoai"></div>
                            </div>
                            <div id="aside">
                                <div class="form-group form-group-phone"><label for="inputPhoneEmailLogin">Giá thuê trên 1 tháng</label>
                                <input type="number" class="form-control" id="inputPhoneEmailLogin" required
                                        placeholder="" name="gia"></div>
                                <div class="form-group form-group-password"><label for="password">Ảnh đính kèm</label>
                                    <input type="file" class="form-control" name="list_image[]" multiple="multiple"/>
                                </div>
                                <div class="form-group form-group-password"><label for="password">Bản đồ (Link google map)</label><input
                                type="text" class="form-control" id="password" required placeholder=""
                                name="bando"></div>
                            </div>
                            <div class="form-group form-group-phone"><label for="inputPhoneEmailLogin">Địa chỉ phòng trọ</label>
                                <input type="text" class="form-control" id="inputPhoneEmailLogin" required
                                        placeholder="" name="diachi"></div>
                            <div class="form-group form-group-phone"><label for="inputPhoneEmailLogin">Mô tả thông tin</label>
                            <textarea name="mota" class="form-control" id="editor" cols="30" tabindex="8" rows="30"></textarea>
                            </div>
                            <div class="form-group"><button type="submit" name="dangtin" class="btn btn-submit">Đăng
                                        tin</button></div>
                    </form>
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
    <script>
    CKEDITOR.replace("editor");
    </script>
</body>
<!-- Mirrored from phongtro123.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2023 08:59:06 GMT -->

</html>