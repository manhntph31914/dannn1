<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT LOẠI HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        Mã Loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên Loại <br>
                        <input type="text" name="tenloai" value="<?php if(isset($name2)&&($name2!="")) echo $name2;?>">
                    </div>
                    <div class="row mb10">
                        Hình Ảnh <br>
                        <input type="file" name="hinh" id="">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id2" value="<?php if(isset($id2)&&($id2>0)) echo $id2;?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>