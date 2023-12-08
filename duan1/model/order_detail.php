<?php

function billcart($id,$id_order,$idpro,$dongia,$soluong,$tensp,$img){
    $sql="insert into order_detail(id,id_order,idpro,dongia,soluong,tensp,img) values('$id','$id_order','$idpro','$dongia','$soluong','$tensp','$img')";
    pdo_execute($sql);
}

function insert_billcart($id,$id_order,$idpro,$dongia,$soluong,$tensp,$img,$tongtien){
    $sql="INSERT INTO order_detail (id, id_order, idpro, dongia, soluong, tensp, img)
    VALUES ($id, $id_order, $idpro, $dongia, $soluong, '$tensp', '$img', $tongtien)";
    pdo_execute($sql);
}

function loadall_billcart(){
    $sql="SELECT*FROM order_detail order by id_order desc";
    $listbillcart= pdo_query($sql);
    return $listbillcart;
}

function insert_donhang($tensp,$giasp,$soluong,$tongtien,$ttdh,$idnd){
    $sql = "INSERT INTO tbl_order (id_user, hoten, name, sdt, email, diachi, tongtien, pttt, tt_status) 
    VALUES (:userId, :fullName, :productName, :phoneNumber, :email, :address, :totalOrderPrice, :paymentMethod, :orderStatus)";
    pdo_execute($sql);
}

// function thank()
// {
//     $this->config->config["pageTitle"]="thank da dat hang";  
//     if (isset($_GET['partnerCode'])) {
//         $data_momo = [
//             'partnerCode' => $_GET['partnerCode';]
//             'orderId' => $_GET['orderId';]
//             'requestId' => $_GET['requestId';]
//             'amount' => $_GET['amount';]
//             'orderInfo' => $_GET['orderInfo';]
//             'orderType	' => $_GET['orderType	';]
//             'transId' => $_GET['transId';]
//             'payType' => $_GET['payType';]
//             'signature' => $_GET['signature';]
//             $result =$this->IndexModel->insertMoMo($data_momo);
//         ];

//     }  
// }

?>