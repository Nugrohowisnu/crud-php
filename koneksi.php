<?php 

$servername = "localhost";
$username ="root";
$password = "";
$dbname = "crud";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(mysqli_connect_error()){
	echo "Koneksi gagal".mysqli_connect_error();
}

function hapus ($id) {
    global $conn;
    mysqli_query ($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

?>