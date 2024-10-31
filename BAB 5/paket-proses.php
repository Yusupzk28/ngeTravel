<?php
if (isset($_POST['simpan'])) {
  $namaPaket = $_POST['namaPaket'];
  $destinasi = $_POST['destinasi'];
  $lokasi = $_POST['lokasi'];
  $harga = $_POST['harga'];

  echo "<p>Nama Paket: " . $namaPaket . "</p>" . "<p>Destinasi: " . $destinasi . "</p>" . "<p>Lokasi: " . $lokasi . "</p>" . "<p>Harga: Rp." . $harga . ",-</p>";
}
?>