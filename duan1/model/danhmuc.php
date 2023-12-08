<?php
function insert_danhmuc($tenloai){
    $sql="insert into danhmuc(name2) values('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id2){
    $sql="DELETE FROM danhmuc WHERE id2= ".$id2;
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql="SELECT*FROM danhmuc order by id2 desc";
    $listdanhmuc= pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id2){
    $sql="SELECT*FROM danhmuc where id2=".$id2;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id2,$tenloai){
    $sql="update danhmuc set name2='".$tenloai."' where id2=".$id2;
    pdo_execute($sql);
}
?>