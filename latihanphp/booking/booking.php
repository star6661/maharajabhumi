<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>Beli Tiket Etihad Airways</title>
  <link rel="stylesheet" href="style.css">
  <script src="files/js/form.js"></script>
  <link rel="stylesheet" href="files/lib/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css">
  <script src="files/lib/fontawesome-free-6.6.0-web/js/all.min.js"></script>
  

</head>

<body>
  <?php
  // Konfigurasi koneksi database
  $host = 'localhost';
  $username = 'root'; // Ubah sesuai dengan username database Anda
  $password = ''; // Ubah sesuai dengan password database Anda
  $database = 'pembelian_tiket'; // Nama database

  // Membuat koneksi ke database
  $conn = new mysqli($host, $username, $password, $database);

  // Cek koneksi
  if ($conn->connect_error) {
      die("Koneksi gagal: " . $conn->connect_error);
  }

  // Proses form saat data dikirim
  $success = false;
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Ambil data dari form
      $id_maskapai = $_POST['id_maskapai'];
      $jumlah_tiket = $_POST['jumlah_tiket'];
      $kota = $_POST['kota'];
      $name = $_POST['name'];
      $tempat_lahir = $_POST['tempat_lahir'];
      $tanggal_lahir = $_POST['tanggal_lahir'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $deskripsi_tambahan = $_POST['deskripsi_tambahan'];

      // Query untuk menyimpan data ke database
      $sql = "INSERT INTO pembelian_tiket (id_maskapai, jumlah_tiket, kota, name, tempat_lahir, tanggal_lahir, email, gender, deskripsi_tambahan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

      // Persiapan statement
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("sisssssss", $id_maskapai, $jumlah_tiket, $kota, $name, $tempat_lahir, $tanggal_lahir, $email, $gender, $deskripsi_tambahan);

      // Eksekusi statement
      if ($stmt->execute()) {
          echo '<script>document.addEventListener("DOMContentLoaded", function() { showSuccessMessage(); });</script>';
      }

      // Tutup statement
      $stmt->close();
  }

  // Tutup koneksi database
  $conn->close();
  ?>

  <div class="loader-wrapper" id="loaderWrapper">
    <link rel="stylesheet" href="files/lib/loader/loader.css">
    <script src="files/lib/loader/loader.js"></script>
    <div class="loader"></div>
  </div>
  <main>
    <div class="success-message" id="successMessage">
      <div class="checkmark">&#10004;</div>
      <div class="text">Pemesanan Sukses!</div>
    </div>
    <div class="overlay" id="overlay"></div>
<div class="success-message" id="successMessage">
  <div class="checkmark">&#10004;</div>
  <div class="text">Pemesanan Sukses!</div>
  <button class="close-button" onclick="hideSuccessMessage()">Tutup</button>
</div>


    <div class="left" id="formContainer">
      <img src="https://traveling-alief.vercel.app/files/img/form/beli_tiket.svg" alt="Logo">
    </div>
    <div class="right">
      <div class="wrapperForm">
        <div class="header">
          <h1>Beli Tiket !</h1>
        </div>
        <form action="" method="post">
          <div class="wrapperFields">
            <div class="field">
              <label for="id_maskapai"><i class="bi bi-airplane-fill"></i></label>
              <select name="id_maskapai" id="id_maskapai">
                <option value="1" selected>Etihad Airways</option>
                <option value="2">Qatar Airways</option>
                <option value="3">Singapore Airlines</option>
                <option value="4">Turkish Airlines</option>
              </select>
            </div>
            <div class="field">
              <label for="jumlah_tiket"><i class="bi bi-ticket-perforated-fill"></i></label>
              <input type="number" name="jumlah_tiket" id="jumlah_tiket" placeholder="Jumlah Tiket" required>
            </div>
          </div>
          <div class="field">
            <label for="kota"><i class="bi bi-pin-map-fill"></i></label>
            <select name="kota" id="kota">
              <option disabled selected>Pilih Kota Asal</option>
              <option value="palembang">Palembang</option>
              <option value="batam">Batam</option>
              <option value="tanjung_pinang">Tanjung Pinang</option>
              <option value="bintan">Bintan</option>
              <option value="jakarta">Jakarta</option>
              <option value="bandung">Bandung</option>
              <option value="medan">Medan</option>
              <option value="kalimantan">Kalimantan</option>
            </select>
          </div>
          <div class="field">
            <label for="name"><i class="bi bi-person-vcard-fill"></i></label>
            <input type="text" name="name" id="name" placeholder="Masukkan Nama" required>
          </div>
          <div class="wrapperFields">
            <div class="field">
              <label for="tempat_lahir"><i class="bi bi-geo-alt-fill"></i></label>
              <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Asal Keberangkatan" required>
            </div>
            <div class="field">
              <label for="tanggal_lahir"><i class="bi bi-calendar-heart"></i></label>
              <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
            </div>
          </div>
          <div class="wrapperFields">
            <div class="field">
              <label for="email"><i class="bi bi-envelope-at-fill"></i></label>
              <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="field">
              <label for="gender"><i class="bi bi-gender-ambiguous"></i></label>
              <input type="radio" name="gender" id="pria" value="pria" required>
              <label for="pria" class="labelRadio">Pria</label>
              <input type="radio" name="gender" id="wanita" value="wanita" required>
              <label for="wanita" class="labelRadio">Wanita</label>
            </div>
          </div>
          <div class="field">
            <label for="deskripsi_tambahan"><i class="bi bi-suitcase-fill"></i></label>
            <textarea name="deskripsi_tambahan" id="deskripsi_tambahan" placeholder="Deskripsi Tambahan"></textarea>
          </div>
          <div class="button">
            <a href="../index.php"><button type="button">Kembali</button></a>
            <button type="submit">Beli</button>
          </div>
        </form>
      </div>
    </div>
  </main>
  <script>
  function showSuccessMessage() {
    const overlay = document.getElementById("overlay");
    const successMessage = document.getElementById("successMessage");

    // Tampilkan overlay dan pesan sukses
    overlay.style.display = "block";
    successMessage.style.display = "block";
  }

  function hideSuccessMessage() {
    const overlay = document.getElementById("overlay");
    const successMessage = document.getElementById("successMessage");

    // Sembunyikan overlay dan pesan sukses
    overlay.style.display = "none";
    successMessage.style.display = "none";
  }

  // Pastikan fungsi ini hanya dijalankan ketika formulir berhasil dikirim
  document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success')) {
      showSuccessMessage();
    }
  });
</script>


</body>
</html>
