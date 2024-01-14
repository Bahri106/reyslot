<?php
  date_default_timezone_set("Asia/Jakarta");
  $alamat_website = 'https://rajahoki98.new-situs.online/';
  $host = "localhost:3306";
  $username = "rajahoki98newsit_riski";
  $password = "eiZhHJ,Pd.wK";
  $database = "rajahoki98newsit_databasekyy";
  $koneksi = mysqli_connect($host, $username, $password, $database);
  if (!$koneksi) {
    echo "Kesalahan : Tidak dapat terhubung ke database." . PHP_EOL;
    echo "Kode Kesalahan : " . mysqli_connect_errno() . PHP_EOL;
    echo "Pesan Kesalahan : " . mysqli_connect_error() . PHP_EOL;
    exit;
  }
?>