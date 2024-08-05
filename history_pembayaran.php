<?php
$conn = new mysqli("localhost", "root", "", "pilarapp");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$pelanggan_id = $_GET['id'];

$sql = "SELECT * FROM pembayaran WHERE pelanggan_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $pelanggan_id);
$stmt->execute();
$result = $stmt->get_result();

$stmt_pelanggan = $conn->prepare("SELECT nama_pelanggan FROM pelanggan WHERE id = ?");
$stmt_pelanggan->bind_param("i", $pelanggan_id);
$stmt_pelanggan->execute();
$result_pelanggan = $stmt_pelanggan->get_result();
$pelanggan = $result_pelanggan->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
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
        <h2>History Pembayaran - <?php echo $pelanggan['nama_pelanggan']; ?></h2>
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
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['tanggal_pembayaran'] . "</td>
                                <td>" . $row['nominal_bayar'] . "</td>
                                <td>" . $row['kurang_bayar'] . "</td>
                                <td><a href='uploads/" . $row['bukti_transfer'] . "' target='_blank'>Lihat Bukti</a></td>
                                <td>" . $row['terbilang'] . "</td>
                                <td>" . $row['untuk_pembayaran'] . "</td>
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
