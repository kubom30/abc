<?php
session_start();
require_once '../../model/pdo.php';
if (isset($_POST['add_san_pham'])) {
    $id_sp = $_POST['id_sp'];
    $ten_sp = $_POST['ten_sp'];
    $gia_sp = $_POST['gia_sp'];
    $so_luong = $_POST['so_luong'];
    $mo_ta = $_POST['mo_ta'];
  
    $sql = "INSERT INTO san_pham (ten_sp,gia_sp,so_luong,mo_ta) values(?,?,?,?)";
    try {
        pdo_execute($sql,$ten_sp ,$gia_sp, $so_luong,);
        $_SESSION['thong-bao'] = "Thêm danh mục thành công";
        header('Location:../../index.php?action=san-pham');
    } catch (PDOException $e) {
        $_SESSION['thong-bao'] = "Thêm danh mục thất bại";
        header('Location:../../index.php?action=san-pham');
    }
}
?>
<?php
if (isset($_POST['ten_dm'])) {
   $ten_dm=$POST['id_ten_dm'];
   $sql="SELECT * FROM `danh_muc` WHERE 1";
   $sql="UPDATE `danh_muc` SET `ten_dm`=? WHERE id_dm=?";
   $info_dm=pdo_query_one($sql,$ten_dm);
}
\