<style>
    .rowloai{
        padding-top: 100px;
        padding-left: 280px;
    }
    .title{
        padding-top: 100px;
        padding-left: 680px;
    }
    .rowudapte{
        padding-top: 10px;
    }
</style>


<div class="row2">
    <div class="title">
        <h1>DANH SÁCH LOẠI MŨ
        </h1>
    </div>
    <div class="rowloai ">
        <form action="index.php?act=listsp" method="POST">
            <input type="text" name="kyw">
            <select name="iddm">
                <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
              extract($danhmuc);
              echo '<option value="'.$id.'">'.$name.'</option>';
            }
          ?>
            </select>
            <input type="submit" name="listok" value="GO">
            </form>
            <div class="rowloaii">
                <table border="2">
                    <tr>
                        <th></th>
                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>ĐƠN GIÁ</th>
                        <th>HÌNH</th>
                        <th>MÔ TẢ</th>
                        <th>MÀU</th>
                        <th>SỐ LƯỢNG</th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach($listsanpham as $sanpham) {
                            extract($sanpham);
                            $suasp = "index.php?act=suasp&id=".$id;
                            $xoasp = "index.php?act=xoasp&id=".$id;
                            $hinhpath = "../upload/".$img;
                            if(is_file($hinhpath)){
                                $hinh="<img src='".$hinhpath."' height ='80'>";
                            }else{
                                $hinh="no photo";
                            }
                            echo '
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$namesp.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$mota.'</td>
                                    <td>'.$color.'</td>
                                    <td>'.$so_luong.'</td>
                                    <td><a href="index.php?act=suasp&id='.$suasp.'"><input type="button" value="Sửa"></a> <a href="index.php?act=xoasp&id='.$xoasp.'"><input type="button" value="Xóa"></a></td>
                                </tr>
                            ';
                        }
                    ?>


                </table>
            </div>
            <div class="rowudapte">
                <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        
    </div>
</div>




</div>