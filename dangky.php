<!DOCTYPE html>
<html lang="vi-VN" itemscope itemtype="http://schema.org/WebPage" class="user_active">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<?php include('head.php') ?>

<body class="windows register">
    <div id="webpage">
    <?php include('header.php') ?>
    <?php
    if (isset($_GET['fail'])) {
    ?>
<div class="toast" data-delay="2500" style="position:fixed; top: 100PX; right: 10PX;z-index: 2000;width: 300px">
  <script>
    swal({
      title: 'Tài khoản đã tồn tại!',
      /* text: 'Redirecting...', */
      icon: 'error',
      timer: 3000,
      buttons: true,
      type: 'error'
    })
  </script>
</div>
<?php } ?>
        <main id="main">
            <section class="section section-access">
                <div class="section-header">
                    <h1 class="section-title big">Tạo tài khoản mới</h1>
                </div>
                <div class="section-content">
                    <form class="form-access register-form js-register-form clearfix" action="xuly.php" method="POST">
                        <div class="form-group form-group-fullname"><label for="inputFullName">Họ tên</label><input
                                type="text" class="form-control" min-length="3" id="inputFullName" name="hoten"
                                required data-msg="Không được phép để trống"></div>
                        <div class="form-group form-group-phone"><label for="inputPhone">Số điện thoại</label><input
                                type="text" class="form-control" min-length="10" max-length="11" id="inputPhone"
                                name="sodienthoai" required data-msg="Không được phép để trống"></div>
                        <div class="form-group form-group-fullname"><label for="inputFullName">Tài khoản</label><input
                                type="text" class="form-control" min-length="3" id="inputFullName" name="taikhoan"
                                required data-msg="Không được phép để trống"></div>
                        <div class="form-group form-group-password"><label for="password">Mật khẩu</label><input
                                type="password" class="form-control" min-length="6" id="password" name="matkhau"
                                required data-msg="Không được phép để trống"></div>
                        <div class="form-group"><button type="submit" name="dangky"
                                class="btn btn-submit">Tạo tài khoản</button></div>
                        <div class="form-group">
                            <p style="padding: 5px 0;">Bấm vào nút đăng ký tức là bạn đã đồng ý với <a
                                    href="#" target="_blank">quy định sử dụng</a> của chúng tôi</p>
                            <p style="padding: 5px 0;">Bạn đã có tài khoản? <a class="link"
                                    href="dangnhap.php">Đăng nhập ngay</a></p>
                        </div><input type="hidden" name="redirect" value="" />
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


</html>