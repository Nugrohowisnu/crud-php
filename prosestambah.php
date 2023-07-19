<?php
include 'koneksi.php';
// Memeriksa apakah form telah disubmit
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    // Menyiapkan pernyataan SQL
    $sql = "INSERT INTO mahasiswa (nama, nim, jurusan, jenis_kelamin, alamat) VALUES ('$nama', '$nim', '$jurusan', '$jenis_kelamin', '$alamat')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
				alert('Data Berhasil Di Simpan..Terima Kasih');
				window.location.href='tampil.php';
			  </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Menutup koneksi database
mysqli_close($conn);
?>
