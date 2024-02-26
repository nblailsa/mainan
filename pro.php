<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password =md5($_POST['password']);
$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

// if ($password != $password2) {
//     echo "
//     <script>
//         alert('password tidak sesuai');
//     </script>
//     ";
// }

// $password = md5($password);
 
// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$username','$password','$email','$nama_lengkap','$alamat','peminjam')");
//level peminjam untuk peminjam buku
 
// mengalihkan halaman kembali ke index.php
header("location:index.php?pesan=info_registrasi");
