<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<link rel="stylesheet" href="./view/css/cart.css">
<link rel="stylesheet" href="./view/css/cart.css">
<link rel="stylesheet" href="../view/css/style.css">
<style>
    h2{margin-bottom: 20px;font-size: 24px;text-align: center;}
    input[type="text"],input[type="tel"],input[type="email"]{padding: 8px 10px;width: 300px;margin-bottom: 10px;}
    input[type="submit"]{padding: 10px 20px;margin-top: 15px;}
    .page-order{display: flex;}
    .form-order{width: 70%; text-align:center}
    .sub-order{width: 20%;}
    .sub-order h2{text-align:center}
    .sub-order td,.sub-order th{padding: 5px;}
    .sub-order td:first-child,.sub-order th:first-child{width: 70%;}
    .sub-order td:last-child,.sub-order th:last-child{text-align: right;}
</style>

<div class="page-order">
    <div class="form-order">
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
            <h3>Phương thức thanh toán</h3>
            <!-- <p><input type="radio" name="pttt" id="" value="1" checked> Thanh toán khi nhận hàng</p> -->
            
            <a href="view/thanhtoan/congthanhtoan.php"><button type="button" class="btnCart" name="redirect" id="redirect"> Thanh toán VNPAY </button></a><br><hr>
           
            <a href="view/thanhtoan/xulithanhtoanmomo_atm.php"><button type="button" class="btnCart"> Thanh toán momo ATM</button></a><br><hr>
           
            <a href="cart.php"><input type="submit" value="Đồng ý đặt hàng" name="dongydathang" class="btnconfirm"></a>
        </form>
    </div>
    <div class="sub-order">
        <form action="index.php?act=checkout" method="post">
        <h2>Đơn hàng</h2>
        <table >
            <tr>
                <th>Sản phẩm</th>
                <th>Thành tiền</th>
            </tr>
            <?php 
                // print_r($cart);
                foreach ($cart as $item) {
            ?>
            <tr>
                <td>
                    <?php echo $item['name'];?><br>
                    <small>SL: <?php echo $item['quantity'];?></small>
                </td>
                <td><?php echo number_format($item['quantity']*$item['price'], 0, ",", "."); ?> ₫</td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td><b>Tổng tiền</b></td>
                <td><b><?php echo number_format($_SESSION['resultTotal'], 0, ",", "."); ?> ₫</b></td>
            </tr>
        </table>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    var checkboxStates = {};

    // Chức năng chọn tất cả
    $('#check-all').change(function () {
        $('.product-checkbox').prop('checked', $(this).prop('checked'));
        updateTotals();
    });

    function updateQuantity(id, index) {
        let newQuantity = $('#quantity_' + id).val();
        if (newQuantity <= 0) {
            newQuantity = 1;
        }

        saveCheckboxState(id);

        $.ajax({
            type: 'POST',
            url: './view/updateQuantity.php',
            data: {
                id: id,
                quantity: newQuantity
            },
            success: function (response) {
                $.post('view/tableCartOrder.php', function (data) {
                    $('#order').html(data);
                    restoreCheckboxState(id);
                    updateTotals();
                });
            },
            error: function (error) {
                console.log(error);
            },
        });
    }

    function saveCheckboxState(id) {
        checkboxStates[id] = $('.product-checkbox[value="' + id + '"]').prop('checked');
    }

    function restoreCheckboxState(id) {
        $('.product-checkbox[value="' + id + '"]').prop('checked', checkboxStates[id]);
    }

    function removeFormCart(id) {
        if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
            saveCheckboxState(id);

            $.ajax({
                type: 'POST',
                url: './view/removeFormCart.php',
                data: {
                    id: id
                },
                success: function (response) {
                    $.post('view/tableCartOrder.php', function (data) {
                        $('#order').html(data);
                        restoreCheckboxState(id);
                        updateTotals();
                    });
                },
                error: function (error) {
                    console.log(error);
                },
            });
        }
    }

    $('.product-checkbox').change(function () {
        updateTotals();
    });

    function updateTotals() {
        let sumTotal = 0;
        $('.product-checkbox:checked').each(function () {
            let row = $(this).closest('tr');
            let price = parseInt(row.find('td:eq(4)').text().replace(/\D/g, ''));
            let quantity = parseInt(row.find('td:eq(5) input').val());
            sumTotal += price * quantity;
        });

        $('#total-price').text(number_format(sumTotal, 0, ",", ".") + ' đ');
    }

    function number_format(number, decimals, dec_point, thousands_sep) {
        number = number.toFixed(decimals);
        number = number.replace('.', dec_point);
        return number.replace(/\B(?=(\d{3})+(?!\d))/g, thousands_sep);
    }
</script>
