<!DOCTYPE html>
<html>
<head>
  <title>Pembayaran</title>
  <style>
    .container {
      width: 50%;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
    }

    h2 {
      margin-top: 0;
    }

    .payment-details {
      margin-bottom: 20px;
    }

    .copy-button {
      color: #47b2e4;
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }

    .payment-instructions {
      margin-top: 20px;
    }
  </style>

</head>
<body>
      <h2>Menunggu Pembayaran</h2>
      <p>Harap selesaikan pembayaran Anda sebelum tanggal <span id="due-date"></span></p>
      <p>Berikut kode Virtual Account pembayaran Anda:</p>
  <div class="container">
    <div class="payment-details">
      <div class="virtual-account-container">
        <p>Nomor Virtual Account: <span id="virtual-account"></span></p>
        <button class="copy-button" onclick="copyVirtualAccount()">Salin</button>
        <p>Total: [Total Pembayaran]</p>
      </div>
    </div>
  </div>

  <div class="container payment-instructions">
    <h2>Cara Pembayaran</h2>
    <p>[Cara Pembayaran]</p>
  </div>

  <script>
    function copyVirtualAccount() {
      var virtualAccount = document.getElementById("virtual-account");
      virtualAccount.select();
      virtualAccount.setSelectionRange(0, 99999);
      document.execCommand("copy");
      alert("Nomor Virtual Account telah disalin!");
    }
  </script>

<script>
  // Mendapatkan tanggal sehari setelah checkout
  var checkoutDate = new Date();
  var dueDate = new Date(checkoutDate.getTime() + 24 * 60 * 60 * 1000);

  // Mendefinisikan array nama bulan
  var monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

  // Format tanggal
  var day = dueDate.getDate();
  var month = monthNames[dueDate.getMonth()];
  var year = dueDate.getFullYear();
  var formattedDueDate = day + ' ' + month + ' ' + year;

  // Menampilkan tanggal pada elemen dengan id "due-date"
  document.getElementById('due-date').textContent = formattedDueDate;
</script>
</body>
</html>
