<?php
// Include file koneksi
include 'koneksi.php';

// Memeriksa apakah ada parameter ID yang dikirimkan melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Memanggil fungsi hapus
    if (hapus($id)) {
        echo "<script>
                alert('Data berhasil dihapus');
                window.location.href='tampil.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus');
                window.location.href='tampil.php';
              </script>";
    }
} else {
    echo "<script>
            alert('ID tidak ditemukan');
            window.location.href='tampil.php';
          </script>";
}
?>
