<!DOCTYPE html>
<html>
<head>
    <title>Get Customer Info</title>
</head>
<body>
    <h2>Get Customer Info</h2>
    <form method="post">
        <label for="id_pelanggan">ID Pelanggan:</label>
        <input type="text" name="id_pelanggan" id="id_pelanggan" required><br><br>
        <label for="nomor_telepon">Nomor Telepon:</label>
        <input type="text" name="nomor_telepon" id="nomor_telepon" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idPelanggan = $_POST['id_pelanggan'];
        $nomorTelepon = $_POST['nomor_telepon'];

        $url = 'http://api.sepulsa.com/api/v1/oscar/products/13/'; // Ganti dengan URL yang kamu inginkan

        $data = [
            'url' => $url,
            'quantity' => 1,
            'options' => [
                [
                    'option' => 'https://api.sepulsa.com/api/v1/oscar/options/1/',
                    'value' => $idPelanggan
                ],
                [
                    'option' => 'https://api.sepulsa.com/api/v1/oscar/options/3/',
                    'value' => $nomorTelepon
                ]
            ]
        ];

        $jsonData = json_encode($data);

        $headers = [
            'Content-Type: application/json',
            'X-Chital-Requester: https://www.sepulsa.com',
            'X-Chital-Api-Key: qQFAFT8d.6Yt44sZWZdkd1P4jFwAv4E5UyEp9QYNw',
            'X-Chital-Order-Source: web'
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.sepulsa.com/api/v1/carts/add/');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($httpCode == 200) {
            $responseData = json_decode($response, true);
            $customerData = $responseData['data']['lines'][0]['attributes'];

            $namaPelanggan = json_decode($customerData[2]['value'], true)['Nama Pelanggan'];
            $nomorMeterPLN = json_decode($customerData[2]['value'], true)['Nomor Meter PLN'];
            $tarifDaya = json_decode($customerData[2]['value'], true)['Tarif / Daya'];
            $idPelanggan = $customerData[0]['value'];

            echo '<h3>Customer Information:</h3>';
            echo '<p>Nama Pelanggan: ' . $namaPelanggan . '</p>';
            echo '<p>Nomor Meter PLN: ' . $nomorMeterPLN . '</p>';
            echo '<p>Tarif/Daya: ' . $tarifDaya . '</p>';
            echo '<p>ID Pelanggan: ' . $idPelanggan . '</p>';
        } else {
            echo 'Error: ' . $httpCode;
        }
    }
    ?>
</body>
</html>