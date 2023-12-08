<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>NỘI DUNG BÌNH LUẬN</th>
                    <th>ID USER</th>
                    <th>ID PRO</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    <th>CHỨC NĂNG</th>
                </tr>
                <?php
                    foreach($listbinhluan as $binhluan){
                        extract($binhluan);
                        $xoabl="index.php?act=xoabl&idbl=".$idbl;
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$idbl.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$iduser.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$ngaybinhluan.'</td>
                                <td><a href="'.$xoabl.'"><input type="button" value="XÓA"></a></td>
                            </tr>';
                    }
                ?>
            </table>
        </div>
    </div>
</div>