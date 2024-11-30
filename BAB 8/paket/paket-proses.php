<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $namaPaket = $_POST['namaPaket'];
    $destinasi = $_POST['destinasi'];
    $lokasi = $_POST['lokasi']; 
    $harga = $_POST['harga'];

    $sql = "INSERT INTO tb_paketdestinasi VALUES(NULL, '$namaPaket', '$destinasi', '$lokasi','$harga')";

    if(empty($namaPaket) ||empty($destinasi) || empty($lokasi)|| empty($harga)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'paket-tambah.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                window.location = 'paket.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'paket-tambah.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $namaPaket = $_POST['namaPaket'];
    $destinasi = $_POST['destinasi'];
    $lokasi = $_POST['lokasi']; 
    $harga = $_POST['harga'];

    $sql = "UPDATE tb_paketdestinasi SET 
            namaPaket = '$namaPaket',
            destinasi = '$destinasi',
            lokasi = '$lokasi',
            harga = '$harga'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                window.location = 'paket.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'paket-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_paketdestinasi WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                window.location = 'paket.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Gagal Dihapus');
                window.location = 'paket.php';
            </script>
        ";
    }
}else {
    header('location:paket.php');
}

