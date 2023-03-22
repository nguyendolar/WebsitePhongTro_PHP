<?php include('connect.php'); ?>
<div class="container container-header clearfix"><a id="top-logo" href="index.php"
                title="cho thuê phòng trọ, cho thuê nhà trọ, tìm phòng trọ">cho thuê phòng trọ, cho thuê nhà trọ, tìm
                phòng trọ</a>
            <div class="user-welcome clearfix js-reload-html-header">
            <?php if (empty($_SESSION['taikhoan'])) { ?>
                <a rel="nofollow" class="btn"
                    href="dangnhap.php"> Đăng nhập</a>
                    <a rel="nofollow"
                    class="btn" href="dangky.php"> Đăng ký</a>
                    <?php }else{ ?>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon dashboard"></i> Xin chào, <?php echo $_SESSION['hoten']; ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a class="dropdown-menu-item quan-ly-tin-dang" rel="nofollow" href="quanlybaidang.php" title="Quản lý tin đăng"><i></i> Quản lý tin đăng</a></li>
                        <li><a class="dropdown-menu-item thoat js-user-logout" rel="nofollow" href="dangxuat.php" title="Thoát"><i></i> Đăng xuất</a></li>
                    </ul>
                </div>
                    <a rel="nofollow"
                    class="btn btn-add-post" href="dangtin.php">Đăng tin mới 
                </a>
            <?php } ?></div>
        </div>
        