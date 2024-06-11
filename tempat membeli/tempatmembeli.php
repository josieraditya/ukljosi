<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Pembayaran</title>
  <link rel="stylesheet" href="tempatmembeli.css">
</head>
<body>
  <div class="container">
    <h1>Halaman Pembayaran</h1>
    <form action="tempat.php" method="post">
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal_pembelian"  required>
      </div>
      <div class="form-group">
      <div class="form-group">
        <label for="nama_barang">barang:</label>
        <input type="text" id="nama_barang" name="nama_barang" placeholder="contoh:sweater" required>
        </select>
      </div>
      <div class="form-group">
        <label for="nomor_wa">Nomor wa:</label>
        <input type="text" id="nomor_wa" name="nomor_wa" placeholder="contoh:081234567890" required>
      </div>
      <div class="form-group">
        <label for="warna">warna:</label>
        <input type="text" id="warna" name="warna" placeholder="contoh:biru daun" required>
      </div>
      <div class="form-group">
        <label for="ukuran">ukuran:</label>
        <input type="text" id="ukuran" name="ukuran" placeholder="s s/d xxxxxxxxxxxxl" required>
      </div>
      <div class="form-group">
        <label for="model">model:</label>
        <input type="text" id="model" name="model" placeholder="contoh:lengan pendek ketat" required>
      </div>
      <div class="form-group">
        <label for="nomor_wa">jumlah_barang</label>
        <input type="text" id="jumlah_barang" name="jumlah_barang" placeholder="contoh:1" required>
      </div>
      <!-- Kolom lainnya sesuai metode pembayaran yang dipilih -->
      <button type="submit">Kirim</button>
    </form>
     
    <br>pembayaran/request gambar dan lain-lain hubungi:082141004052
  </div>
</body>
</html>
