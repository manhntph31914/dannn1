<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th>HINH</th>
                    <th>CHỨC NĂNG</th>
                </tr>
                <?php
                    foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        $suadm="index.php?act=suadm&id2=".$id2;
                        $xoadm="index.php?act=xoadm&id2=".$id2;
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id2.'</td>
                                <td>'.$name2.'</td>
                       
                                <td><a href="'.$suadm.'"><input type="button" value="SỬA"></a> <a href="'.$xoadm.'"><input type="button" value="XÓA"></a></td>
                            </tr>';
                    }
                ?>
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="CHỌN TẤT CẢ">
            <input type="button" value="BỎ CHỌN TẤT CẢ">
            <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
            <a href="index.php?act=adddm"><input type="button" value="NHẬP THÊM"></a>
        </div>
    </div>
</div>