<?php
function loadall_thongke(){
    $sql="SELECT danhmuc.id2 as madm, danhmuc.name2 as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql.=" from sanpham left join danhmuc on danhmuc.id2 = sanpham.iddm";
    $sql.= " group by danhmuc.id2 order by danhmuc.id2 desc";
    $listthongke=pdo_query($sql);
    return $listthongke;
}

?>