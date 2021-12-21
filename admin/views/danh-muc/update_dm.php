
<?php
if(isset($_GET['id_update'])){
$id_update=$_GET['id_update'];
$sql="SELECT * FROM `danh_muc` WHERE id_dm=?";
// truy vấn 1 dữ liệu
$info_dm=pdo_query_one($sql,$id_update);
}
?>
<div class="row my-3">
    <div class="col-12">
        <h5 class="alert alert-info">Cập nhật danh mục</h5>
        <form action="views/danh-muc/xu-ly.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="hidden" name="id_dm_update" value="<?=$info_dm['id_dm']?>">
                <input type="text" class="form-control" value="<?=$info_dm['ten_dm']?>" autocomplete="off" id="" aria-describedby="" name="update_ten_dm" placeholder="Nhập tên danh mục">
            </div>

            <button type="submit" class="btn btn-success">Cập nhật </button>
        </form>

    </div>
</div>