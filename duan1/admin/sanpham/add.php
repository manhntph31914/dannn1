<div class="row">
            <div class="row frmtitle">
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                        Danh Mục Sản Phẩm <br>
                        <select name="iddm" id="">
                            <?php
                                foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id2.'">'.$name2.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="row mb10">
                        Tên Sản Phẩm <br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                        Giá Sản Phẩm <br>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">
                        Hình Ảnh <br>
                        <input type="file" name="hinh" id="">
                    </div>
                    
                    <div class="row mb10">
                        Mô Tả Sản Phẩm <br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>