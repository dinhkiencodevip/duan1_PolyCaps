<style>
  .row2{
    padding-top: 100px;
    text-align: center;
  }
</style>
<div class="row2">
  <div class="rowtieude">
    <h1>THÊM MỚI SẢN PHẨM
    </h1>
  </div>
  <div class="rowcot ">
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
      <div class="rowloai">
        <label> Danh mục </label> <br>
        <select name="iddm">
          <?php
            foreach ($listdanhmuc as $danhmuc) {
              extract($danhmuc);
              echo '<option value="'.$id.'">'.$name.'</option>';
            }
          ?>
          <option value=""></option>
        </select>
      </div>
      <div class="row2 mb10">
        <label>Tên sản phẩm </label> <br>
        <input type="text" name="tensp">
      </div>
      <div class="row2 mb10">
        <label>Đơn giá </label> <br>
        <input type="text" name="giasp">
      </div>
      <div class="row2 mb10">
        <label>Hình </label> <br>
        <input type="file" name="hinh">
      </div>
      <div class="row2 mb10">
        <label>Mô tả </label> <br>
        <textarea name="mota" cols="30" rows="10"></textarea>
      </div>
      <div class="row2 mb10">
        <label>Màu </label> <br>
        <input type="text" name="mau">
      </div>
      <div class="Số lượng">
        <label>Số lượng </label> <br>
        <input type="text" name="soluong">
      </div>
      <div class="row mb10 ">
        <input type="submit" name="themmoi" value="THÊM MỚI">
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