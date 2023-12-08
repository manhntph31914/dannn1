<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-type: text/html; charset=utf-8');

// Function to execute POST request
function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}

// MoMo API endpoint
$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

// MoMo credentials
$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

// Order details
$orderInfo = "Thanh toán qua MoMo";
$amount = "1000000";
$orderId = time() . "";
$redirectUrl = "http://localhost:81/duan1/index.php?act=billconfirm";
$ipnUrl = "http://localhost:81/duan1/index.php?act=billconfirm";
$extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
$requestId = time() . "";
$requestType = "payWithATM";

// Generate HMAC SHA256 signature
$rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
$signature = hash_hmac("sha256", $rawHash, $secretKey);

// Prepare data for MoMo API
$data = array(
    'partnerCode' => $partnerCode,
    'partnerName' => "Test",
    "storeId" => "MomoTestStore",
    'requestId' => $requestId,
    'amount' => $amount,
    'orderId' => $orderId,
    'orderInfo' => $orderInfo,
    'redirectUrl' => $redirectUrl,
    'ipnUrl' => $ipnUrl,
    'lang' => 'vi',
    'extraData' => $extraData,
    'requestType' => $requestType,
    'signature' => $signature
);


$result = execPostRequest($endpoint, json_encode($data));
$jsonResult = json_decode($result, true);  // decode json


header('Location: ' . $jsonResult['payUrl']);

?>
