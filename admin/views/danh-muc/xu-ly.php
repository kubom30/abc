<?php
session_start();
require_once '../../../model/pdo.php';
// thêm danh mục <!--  -->
//nếu có ,tồn tại 
if (isset($_POST['add_ten_dm'])) {
    $ten_dm = $_POST['add_ten_dm'];
    $sql = "INSERT INTO danh_muc (ten_dm) values(?)";
    try {
        pdo_execute($sql, $ten_dm);
        $_SESSION['thong-bao'] = "Thêm danh mục thành công";
        header('Location:../../index.php?action=danh-muc');
    } catch (PDOException $e) {
        $_SESSION['thong-bao'] = "Thêm danh mục thất bại";
        header('Location:../../index.php?action=danh-muc');
    }
}
//update danh mục,sửa
if(isset($_POST['update_ten_dm'])){
    $ten_dm = $_POST['update_ten_dm'];
   $id_dm=$_POST['id_dm_update'];
    $sql="UPDATE `danh_muc` SET `ten_dm`=? WHERE id_dm=?";
    pdo_execute($sql, $ten_dm,$id_dm);
    header('Location:../../index.php?action=danh-muc');

}



//xoá danh mục 
//lấy id dm
if(isset($_GET['id_delete'])){
 $id_del=$_GET['id_delete'];
 $sql="DELETE FROM `danh_muc` WHERE `danh_muc`.`id_dm` = ?";
 pdo_execute($sql,$id_del);
 $_SESSION['thong-bao'] = "Xoá danh mục thành công";
 header('Location:../../index.php?action=danh-muc');

}
?>