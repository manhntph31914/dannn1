<?php
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
        $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadall_binhluan(){
        $sql="SELECT*FROM binhluan order by idbl desc";
        $listbinhluan= pdo_query($sql);
        return $listbinhluan;
    }
    function delete_binhluan($idbl){
        $sql="DELETE FROM binhluan WHERE idbl=".$idbl;
        pdo_execute($sql);
    }
?>