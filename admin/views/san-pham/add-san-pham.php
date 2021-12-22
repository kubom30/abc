<div class=" formtitle">
    <h1>Thêm Mới Sản Phẩm</h1>
</div>
<div class="formcontent">
    <form action="views/san-pham/xu-ly-sp.php" method="post" enctype="multipart/form-data" >
        <div class=" row mb10" style="margin-bottom: 10px;">
            Danh mục:
            <select name="id_dm" id="" style="width:100px;margin-left: 52px;">
                <?php


                $sql = "SELECT * FROM `danh_muc` WHERE 1";
                $list_dm = pdo_query($sql);
                foreach ($list_dm as $dm){
                    ?>
                    <option name="id_dm" value="<?=$dm['id_dm']?>"><?=$dm['ten_dm']?></option>
                    <?php
                }
                ?>
                <?php


                ?>
            </select>
        </div>

        
        <div class=" row mb10" style="margin-bottom: 10px;">
            Tên sản phẩm:
            <input type="text" name="ten_sp" style="margin-left: 30px ;">
        </div>

        <div class=" row mb10" style="margin-bottom: 10px;">
            Đơn giá:
            <input type="text" name="gia_sp" style="margin-left: 67px;">
        </div>

        <div class=" row mb10" style="margin-bottom: 10px;">
            Số Lượng:
            <input type="text" name="so_luong" style="margin-left: 55px;">
        </div>

        <div class=" row mb10" style="margin-bottom: 10px;">
            Hình:
            <input type="file" name="hinh_anh" style="margin-left: 85px; border-radius:5px;">
        </div>
        <div class=" row mb10">
            Mô tả:
            <textarea name="mo_ta" id="" cols="30" rows="10" style="margin-left: 80px; border-radius:5px;"></textarea>
        </div>

        <div class=" row mb10" style="margin-bottom: 10px;">
            <input type="submit" name="themmoi_sp" value="Thêm Mới">
            <input type="reset" value="Nhập Lại">
            <a href="#"><input type="button" value="Danh Sách"></a>
        </div>

    </form>





   
    <script>

    </script>