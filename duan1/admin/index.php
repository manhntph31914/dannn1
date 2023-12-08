<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "../model/donhang.php";
    include "header.php";
    //controller
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':
                //Kiểm Tra Người Dùng có Click Vào add hay Không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="thêm thành công!";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id2'])&&($_GET['id2'])>0){
                    delete_danhmuc($_GET['id2']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id2'])&&($_GET['id2'])>0){
                    $dm=loadone_danhmuc($_GET['id2']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id2=$_POST['id2'];
                    update_danhmuc($id2,$tenloai);
                    $thongbao="Cập Nhật Thành Công!";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            // controller sản phẩm
            case 'addsp':
                // kiem tra ng dung co click add hay k
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir="../upload/";
                    $target_file=$target_dir.basename($_FILES['hinh']['name']);
                    if(move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file)){
                        // echo 

                    }
                    else{
                        // echo
                    }
                    insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao="Them thanh cong";
                }
                $listdanhmuc=loadall_danhmuc();
                // var_dump($listdanhmuc);
                    include "sanpham/add.php";
                break;
            case 'listsp':
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];

                }
                else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham= loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham= loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir="../upload/";
                    $target_file=$target_dir.basename($_FILES['hinh']['name']);
                    if(move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file)){
                        // echo 
    
                    }
                    else{
                        // echo
                    }
                    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                    $thongbao="Cap nhat thanh cong";
                }
                $listsanpham=loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case 'dskh':              
                $listtaikhoan=loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'donhang':              
                // $listtaikhoan=loadall_donhang();
                include "donhang/donhang.php";
                break;
            case 'xoatk':    
                if(isset($_GET['idnd'])&&($_GET['idnd'])>0){
                    delete_taikhoan($_GET['idnd']);
                }
                $xoatk=delete_taikhoan($idnd);
                include "taikhoan/list.php";
                break;          
            case 'dsbl':           
                $listdonhang=loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            case 'xoabl':
                if(isset($_GET['idbl'])&&($_GET['idbl']>0)){
                    delete_binhluan($_GET['idbl']);
                }
                $listbinhluan= loadall_binhluan();
                include "binhluan/list.php";
                break;
            case 'thongke':
                $listthongke= loadall_thongke();
                include "thongke/list.php";
                break;
            case 'bieudo':
                $listthongke= loadall_thongke();
                include "thongke/bieudo.php";
                break;
            
    
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }

    include "footer.php";
?>