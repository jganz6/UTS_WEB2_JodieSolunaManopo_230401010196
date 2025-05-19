<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $instansi = $_POST['instansi'];
    $tujuan = $_POST['tujuan'];

    $stmt = $koneksi->prepare("INSERT INTO buku_tamu (nama_lengkap, instansi, tujuan) VALUES (?, ?, ?)");
    if (!$stmt) {
        die("Gagal mempersiapkan query: " . mysqli_error($conn));
    }
    $stmt->bind_param("sss", $nama, $instansi, $tujuan);
    $stmt->execute();

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <a href="index.php" class="btn btn-danger mb-3">kembali</a>
    <h2>Formulir Tamu</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="instansi" class="form-label">Instansi</label>
            <input type="text" class="form-control" name="instansi" required>
        </div>
        <div class="mb-3">
            <label for="tujuan" class="form-label">Tujuan Kedatangan</label>
            <textarea class="form-control" name="tujuan" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</body>
</html>
