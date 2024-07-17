<style>
    .row22{
        padding-top: 100px;
        text-align: center;
    }
    .title{
        padding-top: 100px;
        padding-left: 590px;
    }
</style>
<!-- <?php
if (is_array($dm)) {
    extract($dm);
}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án 1</title>
    <link rel="stylesheet" href="./css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    </header>
    <div class="row2">
        <div class="title">
            <h1>CẬP NHẬT LOẠI MŨ
            </h1>
        </div>
        <div class="row22 ">
            <form action="index.php?act=updatedm" method="POST">
                <div class="row2 mb10 form_content_container">
                    <label> Mã loại </label> <br>
                    <input type="text" name="maloai">
                </div>
                <div class="row2 mb10">
                    <label>Tên loại </label> <br>
                    <input type="text" name="tenloai" value="<?php if(isset($name) && ($name!= "")) echo $name; ?>">
                </div>
                <div class="row mb10 ">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                    <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
                    <input class="mr20" type="reset" value="NHẬP LẠI">

                    <a href="index.php?act=listdm"><input class="mr20" type="button" value="DANH SÁCH"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>
            </form>
        </div>
    </div>

    <!-- END HEADER -->


    </div>

</body>

</html>