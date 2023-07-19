<?php
include 'koneksi.php';

// Memeriksa apakah ada parameter ID yang dikirimkan melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Memeriksa apakah data mahasiswa dengan ID tersebut ada
    $query = "SELECT * FROM mahasiswa WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // cek tombol submit
        if (isset($_POST["submit"])) {
            $id = $_POST["id"];
            $nama = $_POST["nama"];
            $nim = $_POST["nim"];
            $jurusan = $_POST["jurusan"];
            $jenis_kelamin = $_POST["jenis_kelamin"];
            $alamat = $_POST["alamat"];

            // Query untuk melakukan update data mahasiswa
            $query = "UPDATE mahasiswa SET 
                        nama = '$nama',
                        nim = '$nim',
                        jurusan = '$jurusan',
                        jenis_kelamin = '$jenis_kelamin',
                        alamat = '$alamat'
                        WHERE id = $id";

            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "<script>
                        alert('Data berhasil diubah.');
                        window.location.href = 'tampil.php';
                      </script>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <title>Form Data Mahasiswa</title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <div class="judul">
                <h2>Edit Data Mahasiswa</h2>
                <a href="tampil.php">Lihat Semua Data</a>
            </div>

            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required value="<?php echo $row['nama']; ?>"><br><br>

                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" required value="<?php echo $row['nim']; ?>"><br><br>

                <label for="jurusan">Jurusan:</label>
                <select id="jurusan" name="jurusan" required>
                    <option value="">Pilih Jurusan</option>
                    <option value="Teknik Informatika" <?php if ($row['jurusan'] == 'Teknik Informatika') echo 'selected'; ?>>Teknik Informatika</option>
                    <option value="Sistem Informasi" <?php if ($row['jurusan'] == 'Sistem Informasi') echo 'selected'; ?>>Sistem Informasi</option>
                    <option value="Manajemen Informatika" <?php if ($row['jurusan'] == 'Manajemen Informatika') echo 'selected'; ?>>Manajemen Informatika</option>
                </select><br><br>

                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" <?php if ($row['jenis_kelamin'] == 'Laki-laki') echo 'checked'; ?> required>
                <label for="laki-laki">Laki-laki</label>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" <?php if ($row['jenis_kelamin'] == 'Perempuan') echo 'checked'; ?> required>
                <label for="perempuan">Perempuan</label><br><br>

                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" required><?php echo $row['alamat']; ?></textarea><br><br>

                <input type="submit" name="submit" value="Simpan">
            </form>

        </body>
        </html>
    <?php
    } else {
        echo "<p>Data tidak ditemukan.</p>";
    }
} else {
    echo "<p>ID tidak ditemukan.</p>";
}
?>
