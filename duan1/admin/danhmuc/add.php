<div class="row">
            <div class="row frmtitle">
                <h1>THÊM MỚI LOẠI HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã Loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên Loại <br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        Hình Ảnh <br>
                        <input type="file" name="hinh" id="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
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