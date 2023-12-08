<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<link rel="stylesheet" href="view/css/donhang.css">
<?php

// Initialize order ID
$orderId = 1;

// Initialize total order price
$totalOrderPrice = 0;

// Display order information table header
?>
<h2>Thông tin đơn hàng của bạn</h2>
<table>
    <tr>
        <th>ID đơn hàng</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Số lượng</th>
        <th>Tổng tiền</th>
        <th>Trạng thái đơn hàng</th>
    </tr>
<?php

// Display each product separately
foreach ($_SESSION['cart'] as $item) {
    $productName = $item['name'];
    $productPrice = $item['price'];
    $productQuantity = $item['quantity'];
    $productTotal = $productQuantity * $productPrice;
    $totalOrderPrice += $productTotal;

    // Display order information row
    ?>
    <tr>
        <td><?= $orderId; ?></td>
        <td><?= $productName; ?></td>
        <td><?= number_format($productPrice, 0, ",", "."); ?> ₫</td>
        <td><?= $productQuantity; ?></td>
        <td><?= number_format($productTotal, 0, ",", "."); ?> ₫</td>
        <td>
           <!-- Thêm sự kiện change -->
           <select class="checkoutOrderStatusSelect" name="trangthai" data-order-id="<?= $orderId; ?>" disabled onchange="syncDonhangOrderStatus(this)">

                <option value="1">Đang chờ duyệt</option>
                <option value="2">Đã xác nhận</option>
                <option value="3">Đang vận chuyển</option>
                <option value="4">Hoàn thành</option>
            </select>
        </td>
    </tr>
    <?php

    // Increment order ID for the next iteration
    $orderId++;
}

// Display the total price for the entire order
?>
</table>
<h3 style="color:red">Tổng tiền đơn hàng: <?= number_format($totalOrderPrice, 0, ",", "."); ?> ₫</h3>
<?php
?>
<!-- Tất cả các mã HTML trước đó -->

<script>
    // Đoạn mã JavaScript cho checkout.php
    document.addEventListener('DOMContentLoaded', function () {
        var checkoutOrderStatusSelects = document.querySelectorAll('.checkoutOrderStatusSelect');

        checkoutOrderStatusSelects.forEach(function (select) {
            select.addEventListener('change', function () {
                var selectedValue = this.value;
                var orderId = this.getAttribute('data-order-id');

                // Gửi yêu cầu AJAX để cập nhật trạng thái đơn hàng
                updateOrderStatus(orderId, selectedValue);
            });
        });

        function updateOrderStatus(orderId, status) {
            // Gửi yêu cầu AJAX
            fetch('update_order_status.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ orderId: orderId, status: status })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);

                // (Optional) Cập nhật trạng thái đơn hàng trong donhang.php
                updateDonhangOrderStatus(orderId, status);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        }

        function updateDonhangOrderStatus(orderId, status) {
            // (Optional) Cập nhật trạng thái đơn hàng trong donhang.php
            var donhangOrderStatusSelect = document.querySelector('.orderStatusSelect[data-order-id="' + orderId + '"]');
            if (donhangOrderStatusSelect) {
                donhangOrderStatusSelect.value = status;
            }
        }
    });
</script>
</body>
</html>
