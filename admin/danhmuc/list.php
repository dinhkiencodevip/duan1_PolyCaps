<style>
    .rowloai {
        padding-top: 100px;
        padding-left: 750px;
    }

    .title {
        padding-top: 100px;
        padding-left: 680px;
    }

    .rowudapte {
        padding-top: 10px;
    }
</style>

<div class="row2">
    <div class="title">
        <h1>DANH SÁCH LOẠI MŨ
        </h1>
    </div>
    <div class="rowloai ">
        <form action="" method="POST">
            <div class="rowloaii">
                <table border="2">
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id=" . $id;
                        $xoadm = "index.php?act=xoasdm&id=" . $id;
                        echo '
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $id . '</td>
                                    <td>' . $name . '</td>
                                    <td><a href="index.php?act=suadm&id=' . $suadm . '"><input type="button" value="Sửa"></a> <a href="index.php?act=xoadm&id=' . $xoadm . '"><input type="button" value="Xóa"></a></td>
                                </tr>
                            ';
                    }
                    ?>


                </table>
            </div>
            <div class="rowudapte">
                <a href="index.php?act=adddm"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>




</div>