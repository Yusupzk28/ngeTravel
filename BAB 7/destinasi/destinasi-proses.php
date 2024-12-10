<?php 
include '../koneksi.php';
function upload() {
    $namaFile = $_FILES['destinasi']['name'];
    $error = $_FILES['destinasi']['error'];
    $tmpName = $_FILES['destinasi']['tmp_name'];

    if($error === 4) {
        echo "
            <script>
                alert('Gambar Harus Diisi');
                window.location = 'destinasi-tambah.php';
            </script>
        ";

        return false;
    }

    $ekstentiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar, $ekstentiGambarValid)) {
        echo "
            <script>
                alert('File Harus Berupa Gambar');
                window.location = 'destinasi-tambah.php';
            </script>
        ";

        return null;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    $oke =  move_uploaded_file($tmpName, '../img_destinasi/' . $namaFileBaru);
    return $namaFileBaru;

}

if(isset($_POST['simpan'])) {
    $image = upload();
    $namaDestinasi = $_POST['namaDestinasi'];
    $lokasi = $_POST['lokasi'];
    $deskripsi = $_POST['deskripsi']; 

    if(!$image) {
        return false;
    }
    var_dump($image, $namaDestinasi, $lokasi, $deskripsi);

    $sql = "INSERT INTO tb_destinasi VALUES(NULL, '$image', '$namaDestinasi', '$lokasi','$deskripsi')";

    if(empty($namaDestinasi) || empty($lokasi)|| empty($deskripsi)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'destinasi-tambah.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                window.location = 'destinasi.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'destinasi-tambah.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $imageLama = $_POST['imageLama'];
    $namaDestinasi = $_POST['namaDestinasi'];
    $lokasi = $_POST['lokasi'];
    $deskripsi = $_POST['deskripsi']; 

    if($_FILES['image']['error']) {
        $image = $imageLama;
    }else {
        unlink('../img_destinasi/' . $imageLama);
        $image = upload();
    }

    $sql = "UPDATE tb_destinasi SET 
            destinasi = '$image',
            namaDestinasi = '$namaDestinasi',
            lokasi = '$lokasi',
            deskripsi = '$deskripsi'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                window.location = 'destinasi.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'destinasi-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM tb_destinasi WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    $image = $row['destinasi'];
    unlink('../img_destinasi/' . $image);
    

    $sql = "DELETE FROM tb_destinasi WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                window.location = 'destinasi.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Gagal Dihapus');
                window.location = 'destinasi.php';
            </script>
        ";
    }
}else {
    header('location:destinasi.php');
}

