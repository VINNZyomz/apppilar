<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "pilarapp");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil ID pelanggan dari URL
$pelanggan_id = isset($_GET['pelanggan_id']) ? intval($_GET['pelanggan_id']) : 0;

if ($pelanggan_id > 0) {
    // Query untuk mendapatkan riwayat pembayaran berdasarkan ID pelanggan
    $sql = "SELECT * FROM pembayaran WHERE pelanggan_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $pelanggan_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Query untuk mendapatkan nama pelanggan berdasarkan ID pelanggan
    $stmt_pelanggan = $conn->prepare("SELECT nama_pelanggan FROM pelanggan WHERE pelanggan_id = ?");
    $stmt_pelanggan->bind_param("i", $pelanggan_id);
    $stmt_pelanggan->execute();
    $result_pelanggan = $stmt_pelanggan->get_result();
    $pelanggan = $result_pelanggan->fetch_assoc();

    $stmt->close();
    $stmt_pelanggan->close();
} else {
    die("ID pelanggan tidak valid.");
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Pembayaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <div class="container">
        <h2>History Pembayaran - <?php echo htmlspecialchars($pelanggan['nama_pelanggan'] ?? 'Pelanggan Tidak Ditemukan'); ?></h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Tanggal Pembayaran</th>
                    <th>Nominal Bayar</th>
                    <th>Kurang Bayar</th>
                    <th>Bukti Transfer</th>
                    <th>Terbilang</th>
                    <th>Untuk Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($result) && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $bukti_transfer = htmlspecialchars($row['bukti_tf']);
                        $allowed_extensions = ['jpg', 'jpeg', 'png', 'pdf'];
                        $file_extension = strtolower(pathinfo($bukti_transfer, PATHINFO_EXTENSION));

                        echo "<tr>
                                <td>" . htmlspecialchars($row['tanggal_pembayaran']) . "</td>
                                <td>" . htmlspecialchars($row['nominal_bayar']) . "</td>
                                <td>" . htmlspecialchars($row['kurang_bayar']) . "</td>
                                <td>";
                        if (in_array($file_extension, $allowed_extensions)) {
                            echo "<a href='uploads/" . $bukti_transfer . "' target='_blank'>Lihat Bukti</a>";
                        } else {
                            echo "Format file tidak didukung.";
                        }
                        echo "</td>
                                <td>" . htmlspecialchars($row['terbilang']) . "</td>
                                <td>" . htmlspecialchars($row['untuk_pembayaran']) . "</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada riwayat pembayaran</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="internet_home.php" class="btn btn-secondary">Kembali</a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
</body>
</html>
