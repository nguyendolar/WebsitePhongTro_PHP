<?php
include('connect.php');
//Đăng nhập
if(isset($_POST['dangnhap'])){
    $taikhoan = $_POST['taikhoan'];
    $matkhau  = $_POST['matkhau'];
    $query = "SELECT * FROM nguoidung WHERE taikhoan='$taikhoan'";
    $result = mysqli_query($connect, $query);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows == 0) {
      header("Location: dangnhap.php?fail=1");
    } 
    else {
      $row = mysqli_fetch_array($result);
      if ($matkhau != $row['matkhau']) {
        header("Location: dangnhap.php?fail=1");
      }
      else{
        header("Location: index.php?msg=1");
      $_SESSION['taikhoan'] = $taikhoan;
      $_SESSION['hoten'] = $row['hoten'];
      $_SESSION['id'] = $row['id'];
      }
    }
}
//Đăng ký
if(isset($_POST['dangky'])){
      $hoten = $_POST['hoten'];
      $sodienthoai = $_POST['sodienthoai'];
      $taikhoan = $_POST['taikhoan'];
      $matkhau  = $_POST['matkhau'];
      $check = "SELECT * FROM nguoidung WHERE taikhoan='$taikhoan'";
      $excute = mysqli_query($connect, $check);
      $row = mysqli_num_rows($excute);
      if($row > 0)
      {
          header("Location: dangky.php?fail=2");
      }else{
      $query = "INSERT INTO nguoidung ( `hoten`, `sodienthoai`, `taikhoan`, `matkhau`) 
    VALUES ( '{$hoten}', '{$sodienthoai}',  '{$taikhoan}', '{$matkhau}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: dangnhap.php?msg=1");
    } 
    else {
        header("Location: dangky.php?fail=2");
    }
  }
}
//Đăng tin
if(isset($_POST['dangtin'])){
    $tkid = $_SESSION['id'];
    $tieude = $_POST['tieude'];
    $gia  = $_POST['gia'];
    //ảnh chính
    $file_namec = $_FILES['image']['name'];
    $file_sizec = $_FILES['image']['size'];
    $file_tmpc = $_FILES['image']['tmp_name'];
    $file_typec = $_FILES['image']['type'];
    $file_partsc =explode('.',$_FILES['image']['name']);
    $file_extc=strtolower(end($file_partsc));
    $expensionsc= array("jpeg","jpg","png");
    $imagec = $_FILES['image']['name'];
    $targetc = "./image/".basename($imagec);
    move_uploaded_file($_FILES['image']['tmp_name'], $targetc);
    $diachi = $_POST['diachi'];
    $bando = $_POST['bando'];
    $sodienthoai = $_POST['sodienthoai'];
    $mota = $_POST['mota'];
    $query = "INSERT INTO baidang ( nguoidung_id, tieude, anh, gia, diachi, sodienthoai, mota, bando) 
    VALUES ( '{$tkid}', '{$tieude}', '{$imagec}', '{$gia}', '{$diachi}', '{$sodienthoai}', '{$mota}', '{$bando}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
        $querylm = mysqli_query($connect, "SELECT id FROM baidang ORDER BY id DESC LIMIT 1");
        $row = mysqli_fetch_array($querylm);
        $idbaidang = $row['id'];
        //ảnh đính kèm
        $files = $_FILES['list_image'];
        $file_name = $_FILES['list_image']['name'];
        $file_size = $_FILES['list_image']['size'];
        $file_tmp = $_FILES['list_image']['tmp_name'];
        $file_type = $_FILES['list_image']['type'];
        $numitems = count($file_name);
        for ($i = 0; $i < $numitems; $i ++) {
            $file_parts =explode('.',$file_name[$i]);
            $file_ext=strtolower(end($file_parts));
            $expensions= array("jpeg","jpg","png");
            $image = $file_name[$i];
            $target = "./image/".basename($image);
            move_uploaded_file($file_tmp[$i], $target);
            $querydk = "INSERT INTO anhdinhkem ( anh, baidang_id) 
            VALUES ( '{$image}', '{$idbaidang}') ";
            $resultdk = mysqli_query($connect, $querydk);
        }
        header("Location: dangtin.php?msg=1");
    } 
    else {
        header("Location: dangtin.php?fail=2");
    }
    
}
//xoa bài đăng
if(isset($_GET["delete"])){
  $id  = $_GET["delete"];
  $querya = "DELETE FROM anhdinhkem WHERE `baidang_id`='{$id}'";
      $resulta = mysqli_query($connect, $querya);
      $query = "DELETE FROM baidang WHERE `id`='{$id}'";
      $result = mysqli_query($connect, $query);
      header("Location: quanlybaidang.php?msg=1");
  
}
//cập nhật bài đăng
if(isset($_POST['capnhat'])){
    $tieude = $_POST['tieude'];
    $id  = $_POST['idbaidang'];
    $gia  = $_POST['gia'];
    $diachi = $_POST['diachi'];
    $bando = $_POST['bando'];
    $sqlbd = "SELECT *
      FROM baidang 
      WHERE id = '".$id."'
      ";
    $querybd = mysqli_query($connect, $sqlbd);
    $rowbd = mysqli_fetch_array($querybd);
    if(empty($bando)){
    $bando = $rowbd['bando'];
    }
    $sodienthoai = $_POST['sodienthoai'];
    $mota = $_POST['mota'];
    
    //Upload ảnh
    $file_namec = $_FILES['image']['name'];
    if(empty($file_namec)){
        $imagec = $rowbd['anh'];
    }
    else{
      $file_sizec = $_FILES['image']['size'];
      $file_tmpc = $_FILES['image']['tmp_name'];
      $file_typec = $_FILES['image']['type'];
      $file_partsc =explode('.',$_FILES['image']['name']);
      $file_extc=strtolower(end($file_partsc));
      $expensionsc= array("jpeg","jpg","png");
      $imagec = $_FILES['image']['name'];
      $targetc = "./image/".basename($imagec);
      move_uploaded_file($_FILES['image']['tmp_name'], $targetc);
    }
    $query = "UPDATE `baidang` 
        SET `tieude`='{$tieude}',`mota`='{$mota}',`diachi`='{$diachi}',`bando`='{$bando}',`sodienthoai`='{$sodienthoai}', `gia`='{$gia}', `anh`='{$imagec}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          $files = $_FILES['list_image'];
        $file_name = $_FILES['list_image']['name'];
        $numitems = count($file_name);
        $check = 0;
        for ($i = 0; $i < $numitems; $i ++) {
          $image = $file_name[$i];
          if(empty($image)){
            $check ++;
          }
        }
        if($check > 0){

        }
        else{
          $querya = "DELETE FROM anhdinhkem WHERE `baidang_id`='{$id}'";
      $resulta = mysqli_query($connect, $querya);
      for ($i = 0; $i < $numitems; $i ++) {
        $file_parts =explode('.',$file_name[$i]);
        $file_ext=strtolower(end($file_parts));
        $expensions= array("jpeg","jpg","png");
        $image = $file_name[$i];
        $target = "./image/".basename($image);
        move_uploaded_file($file_tmp[$i], $target);
        $querydk = "INSERT INTO anhdinhkem ( anh, baidang_id) 
        VALUES ( '{$image}', '{$id}') ";
        $resultdk = mysqli_query($connect, $querydk);
    }
        }
          header("Location: quanlybaidang.php?msg=1");
        } 
        else {
            header("Location: quanlybaidang.php?msg=2");
        }
    
}
//Tìm kiếm
if(isset($_POST['dangtuyen'])){
    $tieude = $_POST['tieude'];
    $mota  = $_POST['mota'];
    $diachi = $_POST['diachi'];
    $kinhnghiem = $_POST['kinhnghiem'];
    $soluong = $_POST['soluong'];
    $luong = $_POST['luong'];
    $danhmuccongviec = $_POST['danhmuccongviec'];
    $congty = $_POST['idcongty'];
    $query = "INSERT INTO congviec ( diachi, kinhnghiem, soluong, luong, tieude, congty_id, danhmuccongviec_id,  mota) 
    VALUES ( '{$diachi}', '{$kinhnghiem}', '{$soluong}', '{$luong}', '{$tieude}', '{$congty}', '{$danhmuccongviec}' , '{$mota}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: dangtuyen.php?msg=1");
    } 
    else {
        header("Location: dangtuyen.php?msg=2");
    }
}
if(isset($_POST['capnhap'])){
    $tieude = $_POST['tieude'];
    $mota  = $_POST['mota'];
    $diachi = $_POST['diachi'];
    $kinhnghiem = $_POST['kinhnghiem'];
    $soluong = $_POST['soluong'];
    $luong = $_POST['luong'];
    $danhmuccongviec = $_POST['danhmuccongviec'];
    $congty = $_POST['idcongty'];
    $id  = $_POST['idcongviec'];
    $query = "UPDATE `congviec` 
        SET `tieude`='{$tieude}',`mota`='{$mota}',`diachi`='{$diachi}',`kinhnghiem`='{$kinhnghiem}',`soluong`='{$soluong}',`luong`='{$luong}',`danhmuccongviec_id`='{$danhmuccongviec}'
        WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: capnhap.php?id=$id&msg=1");
    } 
    else {
        header("Location: capnhap.php?id=$id&msg=2");
    }
}
if(isset($_POST['xoa'])){
    $id  = $_POST['id'];
        $query = "DELETE FROM congviec WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        header("Location: danhsachbaidang.php?msg=1");
    
}

?>
 