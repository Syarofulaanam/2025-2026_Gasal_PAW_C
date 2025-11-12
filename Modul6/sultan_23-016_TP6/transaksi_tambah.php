<link rel="stylesheet" href="style.css">
<?php
include 'koneksi.php';

// Ambil data pelanggan untuk dropdown
$pelanggan = mysqli_query($koneksi, "SELECT * FROM pelanggan");

// Proses form jika disubmit
if (isset($_POST['simpan'])) {
    $waktu_transaksi = $_POST['waktu_transaksi'];
    $keterangan = trim($_POST['keterangan']);
    $pelanggan_id = $_POST['pelanggan_id'];
    $total = 0; // default

    // Validasi tanggal (tidak boleh kurang dari hari ini)
    $today = date('Y-m-d');
    if ($waktu_transaksi < $today) {
        echo "<script>alert('Tanggal transaksi tidak boleh kurang dari hari ini!');</script>";
    }
    // Validasi panjang keterangan minimal 3 karakter
    elseif (strlen($keterangan) < 3) {
        echo "<script>alert('Keterangan minimal 3 karakter!');</script>";
    }
    else {
        // Simpan data transaksi
        
        
        
        
    }
}
?>
<html> 
<body> 
    <h2>Tambah Data Transaksi</h2> 
    <form method="POST"> 
    <table> 
    <tr> 
    <td>Tanggal Transaksi</td> 
    <td><input type="date" name="waktu_transaksi" 
    value="<?php echo date('Y-m-d'); ?>" required></td> 
    </tr> 
    <tr> 
    <td>Keterangan</td> 
    <td><textarea name="keterangan" required></textarea></td> 
    </tr> 
    <tr> 
    <td>Pelanggan</td> 
    <td> 
    <select name="pelanggan_id" required> 
    <option value="">-- Pilih Pelanggan --</option> 
    <?php while($p = mysqli_fetch_array($pelanggan)): ?> 
    <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option> 
    <?php endwhile; ?> 
    </select> 
    </td> 
    </tr> 
    <tr> 
    <td colspan="2"> 
    <button type="submit" name="simpan">Tambah Transaksi</button> 
    <a href="transaksi.php">Kembali</a> 
    </td> 
    </tr> 
    </table> 
    </form> 
</body> 
</html>