<!DOCTYPE html>
<html>
<head>
    <title>Form Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h2>Form Data Mahasiswa</h2>
        <a href="tampil.php">lihat semua data</a>
    </div>
    <form method="post" action="prosestambah.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="jurusan">Jurusan:</label>
        <select id="jurusan" name="jurusan" required>
            <option value="">Pilih Jurusan</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Manajemen Informatika">Manajemen Informatika</option>
        </select><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" required>
        <label for="laki-laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
        <label for="perempuan">Perempuan</label><br><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea><br><br>

        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>
