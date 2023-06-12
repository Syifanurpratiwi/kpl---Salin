<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Arsha Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .container {
      display: flex;
      justify-content: space-between;
      margin-top: 50px;
    }

    .left-container {
      width: 50%;
      height: fit-content;
      padding: 20px;
      background-color: #f3f5fa;
      margin-right: 25px;
      border-radius: 25px;
    }

    .right-container {
      width: 50%;
      padding: 20px;
      border-radius: 25px;
      background-color: #f3f5fa;
    }

    .box {
      margin-bottom: 20px;
    }

    h2 {
      margin-top: 0;
    }

    label {
      display: block;
      margin-top: 15px;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .button {
      background-color: #47b2e4;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
  </style>
</head>

<body>
  <main id="main">
    <div class="container">
      <div class="left-container">
        <div class="box">
          <h2>Merchant</h2>
          <p>[Nama Merchant]</p>
        </div>
  
        <div class="box">
          <h2>Info Produk</h2>
          <label for="owner-name">Nama Pemilik ID</label>
          <input type="text" id="owner-name">
  
          <label for="meter-number">ID Pelanggan</label>
          <input type="text" id="meter-number">
  
          <label for="billing-period">Periode Tagihan</label>
          <input type="text" id="billing-period">
  
          <label for="product-name">Nama Produk</label>
          <input type="text" id="product-name">
        </div>
      </div>
  
      <div class="right-container">
        <div class="box">
          <h2>Detail Harga</h2>
        </div>
  
        <div class="box">
          <label for="jml_tghan">Jumlah Tagihan</label>
          <input type="number" id="tagihan">
        </div>
  
        <div class="box">
          <label for="biaya_admin">Biaya Administrasi</label>
          <input type="number" id="biayaadmin">
        </div>
  
        <div class="box">
          <h2>Metode Pembayaran</h2>
          <div class="payment-container">
            <div class="payment-method">
              <label for="bank-transfer">Transfer Bank (Virtual Account)</label>
              <select id="bank-transfer">
                <option value="bca">BCA</option>
                <option value="bni">BNI</option>
                <option value="bri">BRI</option>
                <option value="mandiri">Mandiri</option>
                <option value="permata">Permata</option>
                <option value="atm-bersama">ATM Bersama</option>
              </select>
            </div>
            <div class="payment-method">
              <label for="e-money">E-Money</label>
              <select id="e-money">
                <option value="gopay">Gopay</option>
                <option value="ovo">OVO</option>
                <option value="dana">Dana</option>
              </select>
            </div>
            <div class="payment-method">
              <label for="mini-market">Mini Market</label>
              <select id="mini-market">
                <option value="alfamart">Alfamart</option>
                <option value="alfamidi">Alfamidi</option>
                <option value="indomart">Indomart</option>
              </select>
            </div>
          </div>
        </div>
  
        <div class="box">
          <label for="total_biaya">Total Biaya</label>
          <input type="number" id="totalbiaya">
        </div>
  
        <button class="button" onclick="redirectToPayment()">Beli Sekarang</button>
      </div>
    </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">   
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  function redirectToPayment() {
    // Redirect to the payment page
    window.location.href = "pembayaran.php";
  }
</script>

</body>

</html>