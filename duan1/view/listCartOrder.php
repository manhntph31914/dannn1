<?php
if (empty($dataDb)) {
    echo '<h1>Chưa có sản phẩm nào trong giỏ hàng</h1>';
} else {
?>
    <table border="1" width="100%" style="border:none;">
        <thead>
            <tr align="center">
                <!-- <td>
                    <input type="checkbox" id="check-all">
                </td> -->
                <td>STT</td>
                <td>Image</td>
                <td>Name</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Total Price</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody id="order">
            <?php
            $sum_total = 0;
            foreach ($dataDb as $key => $product) :
                $quantityInCart = 0;
                foreach ($_SESSION['cart'] as $item) {
                    if ($item['id'] == $product['id']) {
                        $quantityInCart = $item['quantity'];
                        break;
                    }
                }
            ?>
                <tr align="center">
                    <!-- <td>
                        <input type="checkbox" class="product-checkbox" name="selectedProducts[]" value="<?= $product['id'] ?>">
                    </td> -->
                    <td><?= $key + 1 ?></td>
                    <td>
                        <img src="<?= $img_path, $product['img'] ?>" alt="<?= $product['name'] ?>" style="width: 100px; height: auto">
                    </td>
                    <td><?= $product['name'] ?></td>
                    <td><?= number_format((int)$product['price'], 0, ",", ".")  ?> <u>đ</u></td>
                    <td>
                        <input type="number" value="<?= $quantityInCart ?>" min="1" id="quantity_<?= $product['id'] ?>" oninput="updateQuantity(<?= $product['id'] ?>, <?= $key ?>)">
                    </td>
                    <td>
                        <?= number_format((int)$product['price'] * (int)$quantityInCart, 0, ",", ".") ?> <u>đ</u>
                    </td>
                    <td>
                        <button onclick="removeFormCart(<?= $product['id'] ?>)">Xóa</button>
                    </td>
                </tr>
            <?php
                $sum_total += ((int)$product['price'] * (int)$quantityInCart);
                $_SESSION['resultTotal'] = $sum_total;
            endforeach;
            ?>

            <tr>
                <td colspan="5" align="center">
                    <h2>Tổng tiền hàng:</h2>
                </td>
                <td></td>
                <td colspan="2" align="center">
                    <h2>
                        <span id="total-price" style="color:red">
                            <?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>đ</u>
                        </span>
                    </h2>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <form action="index.php?act=order" method="post">
        <a href=""> <input type="submit" style="padding:10px;" name="order" value="Đặt Hàng"></a>
        <a href="index.php"><input type="button" style="padding:10px;" name="addorder" value="Mua thêm sản phẩm">
    </form>
<?php
}
?>

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
