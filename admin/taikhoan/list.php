
<style>
    .pd{
        padding-left: 280px;
        padding-top:70px;
    }
    .mb10{
        padding-left: 15px;
    }
    .a{
        margin: 10px 5px;
    }
    .formtieude{
        padding-top: 100px;
        text-align: center;
    }

</style>

            <div class="formtieude">
                <h1>DANH SÁCH CÁC TÀI KHOẢN</h1>
            </div>
            <div class="page-wrapper pd">
                    <div class="row mb10 formdsloai">
                    <div class="card">
                    <table class="table">

                            <tr>
                                <th></th>
                                <th>Mã tài khoản</th>
                                <th>Tên đăng nhập</th>
                                <th>Mật khẩu</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Vai trò</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listtaikhoan as $taikhoan){
                                    extract($taikhoan);
                                    $suatk="index.php?act=suatk&id=".$id;
                                    $xoatk="index.php?act=xoatk&id=".$id;
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$user.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$adress.'</td>
                                    <td>'.$tel.'</td>
                                    <td>'.$role.'</td>
                                    <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                                </tr>
                                    ';
                                }
                            ?>
                            
                            
                        </table>
                    </div>
                    <div class="mb10">
                        <input type="button" value="Xóa các mục đã chọn">
                    </div>
            </div>
        </div>
    </div>
</div>