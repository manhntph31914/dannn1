<?php
function loadall_taikhoan(){
    $sql="SELECT*FROM taikhoan order by idnd desc";
    $listtaikhoan= pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan($email,$user,$pass,$name,$address,$tel){
    $sql="insert into taikhoan(email,user,pass,name,address,tel) values('$email','$user','$pass','$name','$address','$tel')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="SELECT*FROM taikhoan where user='".$user."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function getuserinfo($user,$pass){
    $sql="SELECT*FROM taikhoan where user='".$user."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $kp;
}
function checkemail($email){
    $sql="SELECT*FROM taikhoan where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($idnd,$user,$pass,$name,$email,$address,$tel){
    $sql="update taikhoan set user='".$user."',pass='".$pass."',email='".$email."',name='".$name."',address='".$address."',tel='".$tel."' where idnd=".$idnd;
    pdo_execute($sql);
}
function delete_taikhoan($idnd){
    $sql="DELETE FROM taikhoan WHERE idnd=".$idnd;
    pdo_execute($sql);
}

?>