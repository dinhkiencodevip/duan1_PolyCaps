<style>
  .row22 {
    padding-top: 100px;
    text-align: center;
  }

  .title {
    padding-top: 100px;
    padding-left: 590px;
  }
</style>
<!-- <?php
if (is_array($sanpham)) {
  extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
  $hinh = "<img src='" . $hinhpath . "' height ='80'>";
} else {
  $hinh = "no photo";
}
?> -->

<!DOCTYPE html>
<html lang="en">



<body>
  </header>
  <div class="row2">
    <div class="title">
      <h1>CẬP NHẬT LOẠI MŨ
      </h1>
    </div>
    <div class="row22 ">
      <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="rowloai">
          <label for="">Danh mục</label>
          <br>
          <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
              extract($danhmuc);
              if ($iddm == $id)
                $s = "selected";
              else
                $s = "";
              echo '<option value="' . $id . '">' . $name . '</option>';
            }
            ?>
          </select>
        </div>
        <!-- <div class="row2 mb10">
          <label>Mã sản phẩm </label> <br>
          <input type="text" name="id" value="<?= $id ?>">
        </div> -->
        <div class="row2 mb10">
          <label>Tên sản phẩm </label> <br>
          <input type="text" name="tensp" value="<?= $namesp ?>">
        </div>
        <div class="row2 mb10">
          <label>Đơn giá </label> <br>
          <input type="text" name="giasp" value="<?= $price ?>">
        </div>
        <div class="row2 mb10">
          <label>Hình </label> <br>
          <input type="file" name="hinh">
          <?= $hinh ?>
        </div>
        <div class="row2 mb10">
          <label>Mô tả </label> <br>
          <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
        </div>
        <div class="row2 mb10">
          <label>Màu </label> <br>
          <input type="text" name="mau" value="<?= $color ?>">
        </div>
        <div class="Số lượng">
          <label>Số lượng </label> <br>
          <input type="text" name="soluong" value="<?= $so_luong ?>">
        </div>
        <div class="row mb10 ">
          <input type="hidden" name="id" value="<?= $sanpham['id'] ?>">
          <input type="submit" name="capnhat" value="CẬP NHẬT">
          <input type="reset" value="NHẬP LẠI">

          <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
        </div>
        <?php
        if (isset($thongBao) && ($thongBao != '')) {
          echo $thongBao;
        }
        ?>
      </form>
    </div>
  </div>

  <!-- END HEADER -->


  </div>

</body>

</html>