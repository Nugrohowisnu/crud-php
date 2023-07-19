<?php
include 'koneksi.php';

//pagination

// Menentukan jumlah data per halaman
$jumlahDataPerHalaman = 3;

// Menentukan halaman aktif
$halamanAktif = isset($_GET['halaman']) ? $_GET['halaman'] : 1;

// Menghitung offset data
$offset = ($halamanAktif - 1) * $jumlahDataPerHalaman;

// Mengambil data mahasiswa dengan batasan offset dan jumlah data per halaman
$query = "SELECT * FROM mahasiswa LIMIT $offset, $jumlahDataPerHalaman";
$resultt = mysqli_query($conn, $query);

// Menghitung nomor urut data
$nomorUrut = $offset + 1;

// Menghitung total jumlah data
$queryTotal = "SELECT COUNT(*) AS total FROM mahasiswa";
$resultTotal = mysqli_query($conn, $queryTotal);
$rowTotal = mysqli_fetch_assoc($resultTotal);
$totalData = $rowTotal['total'];

// Menghitung total jumlah halaman
$totalHalaman = ceil($totalData / $jumlahDataPerHalaman);

// Mendapatkan data mahasiswa dari tabel
//$sql = "SELECT * FROM mahasiswa";
//$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page tampil</title>
    <link rel="stylesheet" type="text/css" href="tampil.css">
</head>
<body>
    <div class="container">

        <nav class="navbar">
            <div class="navbar-brand">
                <a href="#" class="logo">Logo</a>
            </div>
            <ul class="nav-menu">
                <li><a href="#">Beranda</a></li>
                <li><a href="tampil.php">Data Mahasiswa</a></li>
                <li><a href="tambah.php">Tambah Mahasiswa</a></li>
                <li><a href="#">Tentang</a></li>
            </ul>
            <div class="burger-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>

        <div class="judul">
            <h2>data mahasiswa</h2>
            
        </div>
        <div class="isi">
            <table>
                <tr>
                    <th>no</th>
                    <th>nama</th>
                    <th>nim</th>
                    <th>jurusan</th>
                    <th>jenis kelamin</th>
                    <th>alamat</th>
                    <th>aksi</th>
                </tr>
                
	            <?php foreach ($resultt as $row ): ?>
                    <tr>
			<td><?php echo $nomorUrut;?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['nim']; ?></td>
			<td><?php echo $row['jurusan']; ?></td>
			<td><?php echo $row['jenis_kelamin']; ?></td>
			<td><?php echo $row['alamat']; ?></td>
			<td>
			<a href="edit.php?id=<?php echo $row ['id'];?>">ubah</a>	|
			<a href="hapus.php?id=<?php echo $row ['id'];?>" onclick="return confirm('apakah mau menghapus?');">hapus</a>				
			</td>
		</tr>

		<?php $nomorUrut++; ?>
	<?php endforeach; ?>
            </table>

       
        </div>
              <!-- Pagination -->
              <div class="pagination">
            <?php if ($halamanAktif > 1): ?>
                <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo; Prev</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalHalaman; $i++): ?>
                <?php if ($i == $halamanAktif): ?>
                    <a class="active" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                <?php else: ?>
                    <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($halamanAktif < $totalHalaman): ?>
                <a href="?halaman=<?= $halamanAktif + 1; ?>">Next &raquo;</a>
            <?php endif; ?>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
