<?php
include 'koneksi.php';

$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM buku_tamu WHERE nama_lengkap LIKE ? OR instansi LIKE ? ORDER BY waktu_kedatangan DESC";
    $stmt = $koneksi->prepare($sql);
    if (!$stmt) {
        die("Gagal mempersiapkan query: " . mysqli_error($conn));
    }
    $search_param = "%$search%";
    $stmt->bind_param("ss", $search_param, $search_param);
} else {
    $sql = "SELECT * FROM buku_tamu ORDER BY waktu_kedatangan DESC";
    $stmt = $koneksi->prepare($sql);
    if (!$stmt) {
        die("Gagal mempersiapkan query: " . mysqli_error($conn));
    }
}

$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Daftar Tamu</h2>

    <a href="form_tamu.php" class="btn btn-success mb-3">Isi Formulir Tamu</a>
    
    <form class="mb-3" method="GET" action="">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari nama atau instansi..." value="<?= htmlspecialchars($search) ?>">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
    </form>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nama Lengkap</th>
                <th>Instansi</th>
                <th>Tujuan</th>
                <th>Waktu Kedatangan</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['nama_lengkap']) ?></td>
                    <td><?= htmlspecialchars($row['instansi']) ?></td>
                    <td><?= htmlspecialchars($row['tujuan']) ?></td>
                    <td><?= $row['waktu_kedatangan'] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
