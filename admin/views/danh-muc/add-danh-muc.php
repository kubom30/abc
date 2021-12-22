
<div class="row my-3">
    <div class="col-12">
        <h5 class="alert alert-info">Thêm danh mục</h5>
        <form action="views/danh-muc/xu-ly.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="text" class="form-control" autocomplete="off" id="" aria-describedby="" name="add_ten_dm" placeholder="Nhập tên danh mục">
</div>
            <button type="submit" class="btn btn-success">Thêm </button>
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
                <?php
                //lấy dữ liệu từ Database (Table (Bảng))  hiển thị ra 
                $sql = "SELECT * FROM danh_muc";
                // pdo_...();//gọi hàm thực thi ...
                $list_dm = pdo_query($sql);
                // =>mới chạy được
                //duyệt mảng,vòng lặp (5 phần tử)
                $i=0;
                foreach ($list_dm as $ad) { $i++;
                ?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$ad['id_dm']?></td>
                        <td><?=$ad['ten_dm']?></td>
                        <td>
                            <div class="btn btn-info"><a class="text-white" href="index.php?action=update_dm&id_update=<?=$ad['id_dm']?>">Sửa</a></div>
                            <div class="btn btn-outline-danger"><a href="views/danh-muc/xu-ly.php?id_delete=<?=$ad['id_dm']?>">Xoá</a></div>

                        </td>
                    </tr>
                <?php
                }

                ?>


            </tbody>
        </table>
    </div>
</div>
<script>
   
</script>