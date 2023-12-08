<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// ... Your existing code to populate the cart ...

// Store order details in a session variable
$_SESSION['orderDetails'] = [];

// Display each product separately
foreach ($_SESSION['cart'] as $item) {
    $orderDetail = [];
    $orderDetail['orderId'] = count($_SESSION['orderDetails']) + 1; // Increment order ID
    $orderDetail['productName'] = $item['name'];
    $orderDetail['productPrice'] = $item['price'];
    $orderDetail['productQuantity'] = $item['quantity'];
    $orderDetail['productTotal'] = $orderDetail['productQuantity'] * $orderDetail['productPrice'];
    $orderDetail['totalOrderPrice'] = $orderDetail['productTotal'];
    $orderDetail['orderStatus'] = ''; // You may set the initial status here

    $_SESSION['orderDetails'][] = $orderDetail;
}
?>

<div class="row frmcontent">
    <div class="row mb10 frmdsloai">
        <table>
            <tr>
                <th>ID đơn hàng</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>Trạng thái đơn hàng</th>
                
                <!-- <th>Xem chi tiết đơn hàng </th> -->
            </tr>
            <?php
            foreach ($_SESSION['orderDetails'] as $orderDetail) {
                echo '<tr>
                    <td>' . $orderDetail['orderId'] . '</td>
                    <td>' . $orderDetail['productName'] . '</td>
                    <td>' . number_format($orderDetail['productPrice'], 0, ",", ".") . ' ₫</td>
                    <td>' . $orderDetail['productQuantity'] . '</td>
                    <td>' . number_format($orderDetail['totalOrderPrice'], 0, ",", ".") . ' ₫</td>
                    <td>
                    
                        <select class="orderStatusSelect" name="trangthai" data-order-id="' . $orderDetail['orderId'] . '" onchange="syncCheckoutOrderStatus(this)>
                            <option value="1" ' . ($orderDetail['orderStatus'] == 1 ? 'selected' : '') . '>Đang chờ duyệt</option>
                            <option value="2" ' . ($orderDetail['orderStatus'] == 2 ? 'selected' : '') . '>Đã xác nhận</option>
                            <option value="3" ' . ($orderDetail['orderStatus'] == 3 ? 'selected' : '') . '>Đang vận chuyển</option>
                            <option value="4" ' . ($orderDetail['orderStatus'] == 4 ? 'selected' : '') . '>Hoàn thành</option>
                        </select>
                    </td>
                    
                </tr>';
            }
            ?>
        </table>
        <table>
        <form action="index.php?act=billconfirm" method="post">
            <?php
                if(isset($_SESSION['user'])){
                    $name=$_SESSION['user']['name'];
                    $address=$_SESSION['user']['address'];
                    $email=$_SESSION['user']['email'];
                    $tel=$_SESSION['user']['tel'];
                }else{
                    $name="";
                    $address="";
                    $email="";
                    $tel="";
                }
            ?>
            <h2>Thông tin khách hàng</h2>
            <div><input disabled  type="text" name="name" id="" placeholder="Họ và tên" required value="<?=$name?>" ></div>
            <div><input disabled type="tel" name="tel" id="" placeholder="Số điện thoại" required value="<?=$tel?>"></div>
            <div><input disabled type="email" name="email" id="" placeholder="Email" required value="<?=$email?>"></div>
            <div><input disabled type="text" name="address" id="" placeholder="Địa chỉ" required value="<?=$address?>"></div>
            
            
        </form>
        </table>
    </div>
</div>

<!-- Tất cả các mã HTML trước đó -->


</body>
</html>
