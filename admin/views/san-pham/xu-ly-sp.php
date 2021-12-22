<?php
session_start();
require_once '../../../model/pdo.php';
if (isset($_POST['themmoi_sp'])) {
    $id_dm = $_POST['id_dm'];
    $ten_sp = $_POST['ten_sp'];
    $gia_sp = $_POST['gia_sp'];
    $so_luong = $_POST['so_luong'];
    $mo_ta = $_POST['mo_ta'];
    $hinh_anh=$_FILES['hinh_anh']['name'];
    move_uploaded_file($_FILES['hinh_anh']['tmp_name'],'uploads/'.$hinh_anh);
    $sql = "INSERT INTO san_pham (ten_sp,gia_sp,so_luong,mo_ta,hinh_anh,id_dm) values(?,?,?,?,?,?)";
    try {
        pdo_execute($sql,$ten_sp ,$gia_sp, $so_luong,$mo_ta,$hinh_anh,$id_dm);
        $_SESSION['thong-bao'] = "Thêm sản phẩm thành công";
        header('Location:../../index.php?action=san-pham');
    } catch (PDOException $e) {
        $_SESSION['thong-bao'] = "Thêm sản phẩm thất bại";
        header('Location:../../index.php?action=san-pham');
    }
}
?>
