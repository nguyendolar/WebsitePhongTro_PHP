<!DOCTYPE html>
<html lang="vi-VN" itemscope itemtype="http://schema.org/WebPage" class="user_active">
<!-- Mirrored from phongtro123.com/dang-nhap-tai-khoan by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2023 08:59:36 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<?php include('head.php') ?>

<body class="windows login">
    <div id="webpage">
    <?php
    if (isset($_GET['msg'])) {
    ?>
  <div class="toast" data-delay="2500" style="position:fixed; top: 100PX; right: 10PX;z-index: 2000;width: 300px">
    <script>
      swal({
        title: 'Đăng ký thành công!',
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
      title: 'Sai thông tin đăng nhập!',
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
            <section class="section section-access">
                <div class="section-header">
                    <h1 class="section-title big">Đăng nhập</h1>
                </div>
                <div class="section-content">
                    <form class="form-access login-form js-login-form clearfix" action="xuly.php" method="POST">
                        <div class="form-group form-group-phone"><label for="inputPhoneEmailLogin">Tài khoản</label>
                        <input type="text" class="form-control" id="inputPhoneEmailLogin" required
                                placeholder="" name="taikhoan"></div>
                        <div class="form-group form-group-password"><label for="password">Mật khẩu</label><input
                                type="password" class="form-control" id="password" required placeholder=""
                                name="matkhau"></div>
                        <div class="form-group"><button type="submit" name="dangnhap" class="btn btn-submit">Đăng
                                nhập</button></div>
                        <div class="form-group clearfix"><a
                                style="float: right;" href="dangky.php">Tạo tài khoản mới</a></div><input
                            type="hidden" name="redirect" value="" />
                    </form>
                </div>
            </section>
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
    <script src="js/page-verify.min20e8.js?v=20230307"></script>
    
</body>
<!-- Mirrored from phongtro123.com/dang-nhap-tai-khoan by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2023 08:59:38 GMT -->

</html>