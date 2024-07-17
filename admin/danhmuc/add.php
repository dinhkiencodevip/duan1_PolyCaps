<style>
  .row2{
    padding-top: 100px;
    text-align: center;
  }
</style>
<div class="row2">
  <div class="rowtieude">
    <h1>THÊM MỚI LOẠI MŨ</h1>
  </div>
  <div class="rowcot ">
    <form action="index.php?act=adddm" method="post">
      <div class="rowloai">
        <label> Mã loại </label> <br>
        <input type="text" name="maloai">
      </div>
      <div class="row2 mb10">
        <label>Tên loại </label> <br>
        <input type="text" name="tenloai">
      </div>
      <div class="row mb10 ">
        <input type="submit" name="themmoi" value="THÊM MỚI">
        <input type="reset" value="NHẬP LẠI">

        <a href="index.php?act=listdm"><input class="mr20" type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if (isset($thongBao) && ($thongBao != '')) {
        echo $thongBao;
      }
      ?>
    </form>
  </div>
</div>