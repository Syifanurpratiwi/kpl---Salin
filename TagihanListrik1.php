<!DOCTYPE html>
<html>
<head>
    <title>Get Customer Info</title>
</head>
<body>
    <h2>Get Customer Info</h2>
    <form method="post">
        <label for="idPelanggan">ID Pelanggan:</label>
        <input type="text" name="idPelanggan" id="idPelanggan" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idPelanggan = $_POST['idPelanggan'];

        $url = 'http://api.sepulsa.com/api/v1/oscar/products/14/'; // Ganti dengan URL yang kamu inginkan

        $data = [
            'url' => $url,
            'quantity' => 1,
            'options' => [
                [
                    'option' => 'https://api.sepulsa.com/api/v1/oscar/options/1/',
                    'value' => $idPelanggan
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
            
            $inquiryDetails = json_decode($customerData[1]['value'], true);
            
            $namaPelanggan = $inquiryDetails['Nama Pelanggan'];
            $periode = $inquiryDetails['Periode'];
            $tarifDaya = $inquiryDetails['Tarif / Daya'];
            $standMeter = isset($inquiryDetails['Stand Meter']) ? $inquiryDetails['Stand Meter'] : '-';
            $jumlahTagihan = $inquiryDetails['Jumlah Tagihan'];
            $idPelanggan = $customerData[0]['value'];
            
            echo '<h2>Informasi Tagihan</h2>';
            echo '<p>Nama Pelanggan: ' . $namaPelanggan . '</p>';
            echo '<p>Periode: ' . $periode . '</p>';
            echo '<p>Tarif/Daya: ' . $tarifDaya . '</p>';
            echo '<p>Stand Meter: ' . $standMeter . '</p>';
            echo '<p>Jumlah Tagihan: ' . $jumlahTagihan . '</p>';
            echo '<p>ID Pelanggan: ' . $idPelanggan . '</p>';
        } else {
            echo 'Error: ' . $httpCode;
        }
    }
    ?>
</body>
</html>