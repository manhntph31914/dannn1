<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>Mã TK</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th>MẬT KHẨU</th>
                    <th>HO TEN</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>SỐ ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th>CHỨC NĂNG</th>
                </tr>
                <?php
                    $stt=0;
                    foreach($listtaikhoan as $taikhoan){
                        $stt++;
                        extract($taikhoan);
                        $xoatk="index.php?act=xoatk&idnd=".$idnd;
                        echo '<tr>  
                                <td>'.$idnd.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$role.'</td>
                                <td><a href="'.$xoatk.'"><input type="button" value="XÓA"></a></td>
                            </tr>';
                    }
                ?>
            </table>
        </div>
    </div>
</div>