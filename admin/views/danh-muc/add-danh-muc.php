<?php
if(isset($_SESSION['thong-bao'])){
    echo $_SESSION['thong-bao'];
}
?>
<div class="row my-3">
    <div class="col-12">
        <h5 class="alert alert-info">Thêm danh mục</h5>
        <form action="views/danh-muc/xu-ly.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="text" class="form-control" id="" aria-describedby="" name="add_ten_dm" placeholder="Nhập tên danh mục">
            </div>

            <button type="submit" class="btn btn-primary">Thêm </button>
        </form>

    </div>
</div>
<div class="row my-3">
    <div class="col-12">
        <h5 class="alert alert-info">Danh sách danh mục</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID danh mục</th>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   
                </tr>

            </tbody>
        </table>
    </div>
</div>