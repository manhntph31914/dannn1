<?php
function loadall_donhang(){
    $sql="SELECT*FROM tbl_order order by id_order desc";
    $listdonhang= pdo_query($sql);
    return $listdonhang;
}


?>