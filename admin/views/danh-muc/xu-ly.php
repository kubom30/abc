<?php
session_start();
require_once '../../../model/pdo.php';
// thêm danh mục <!--  -->
if (isset($_POST['add_ten_dm'])) {
    $ten_dm = $_POST['add_ten_dm'];
    $sql = "INSERT INTO danh_muc (ten_dm) values(?)";
    try {
        pdo_execute($sql, $ten_dm);
        header('Location:../../index.php?action=danh-muc');
        $_SESSION['thong-bao'] = "Thêm danh mục thành công";
    } catch (PDOException $e) {
        $_SESSION['thong-bao'] = "Thêm danh mục thất bại";
    }
}
//update danh mục
//xoá danh mục 
?>