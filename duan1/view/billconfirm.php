<link rel="stylesheet" href="./view/css/donhang.css">
<link rel="stylesheet" href="./view/css/cart.css">
<div class="row mb">
    <div class="boxtrai mr">
            <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
               
            ?>
            <form action="index.php?act=billconfirm.php" method="post">
            <div class="row mb">
                <div class="boxtitle" style="text-align:center"></div>
                <div class="row boxcontent" style="text-align:center">
                    <h2 style="color:red">CAM ON QUY KHACH DA DAT HANG</h2>
                </div>
            </div>
            
                
            </div>
                    <?=$orderId = 1;?>
                <div class="boxtitle" style="text-align:center" >THÔNG TIN NGƯỜI ĐẶT HÀNG</div>
                <?=$orderId = 1;?>
                   
                    <table align="center">
                    
                    <!-- <tr>
                        <td>Ma don hang</td>
                        <td style="color:red" id="userName"><?=$idnd?></td>
                    </tr> -->
                    <tr>
                        <td>NGUOI DAT HANG:</td>
                        <td style="color:red" id="userName"><?=$user?></td>
                    </tr>
                    <tr>
                        <td>DIA CHI</td>
                        <td style="color:red" id="userAddress"><?=$address?></td>
                    </tr>
                    <tr>
                        <td>EMAIL</td>
                        <td style="color:red" id="userEmail"><?=$email?></td>
                    </tr>
                    <tr>
                        <td>DIEN THOAI</td>
                        <td style="color:red" id="userTel"><?=$tel?></td>
                    </tr>

                    <tr style="text-align:center"></tr>
                    <tr align="center">
                        <td><button class="btnCart" onclick="processOrder()">Quay lại trang Chủ</button></td>
                        <td> <li style="color:blue">Ma don hang <?=$orderId++;?></li></td>
                    </tr>
                    </table>
                    
                </div>
               
            </div>
            
             <?php
              }
             ?>
           
        </form>
            <?php
            // Tính toán tổng tiền
            $totalPrice = 0;
            foreach ($_SESSION['cart'] as $item) {
                $totalPrice += $item['quantity'] * $item['price'];
            }

            // Chuẩn bị mảng thông tin sản phẩm
            $productInfo = [];
            foreach ($_SESSION['cart'] as $item) {
                $productName = $item['name'];
                $productPrice = $item['price'];
                $productQuantity = $item['quantity'];
                $productTotal = $item['quantity'] * $item['price'];

                // Thêm thông tin vào mảng
                $productInfo[] = [
                    'name' => $productName,
                    'price' => $productPrice,
                    'quantity' => $productQuantity,
                    'total' => $productTotal
                ];
            }
            ?>
            <h2>Thông tin sản phẩm trong giỏ hàng</h2>
            <table>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                </tr>
                <?php foreach ($productInfo as $product): ?>
                    <tr>
                        <td><?= $product['name']; ?></td>
                        <td><?= number_format($product['price'], 0, ",", "."); ?> ₫</td>
                        <td><?= $product['quantity']; ?></td>
                        <td><?= number_format($product['total'], 0, ",", "."); ?> ₫</td>
                        
                    </tr>
                <?php endforeach; ?>
            </table>

    <!-- Hiển thị tổng tiền -->
    <h3 style="color:red">Tổng tiền: <?= number_format($totalPrice, 0, ",", "."); ?> ₫</h3>
        
        
    </div>
   
</div>
<script>
    function processOrder() {
        // Gom thông tin đơn hàng
        var orderInfo = {
            maDonHang: document.querySelector('#orderTable tr:nth-child(1) td').innerText,
            nguoiDatHang: document.querySelector('#userName').innerText,
            diaChi: document.querySelector('#userAddress').innerText,
            email: document.querySelector('#userEmail').innerText,
            dienThoai: document.querySelector('#userTel').innerText
        };

        // Hiển thị thông tin đơn hàng trong console (bạn có thể thay đổi thành việc xử lý thông tin theo ý bạn)
        console.log(orderInfo);
    }
</script>