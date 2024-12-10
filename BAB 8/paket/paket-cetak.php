<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_paketdestinasi");
$html = '<center><h3>Data Paket Destinasi</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Nama Paket</th>
                <th>Destinasi</th>
                <th>Lokasi</th>
                <th>Harga</th>
            </tr>';
$no = 1;
while ($transaction = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $transaction['namaPaket'] . "</td>
                <td>" . $transaction['destinasi'] . "</td>
                <td>" . $transaction['lokasi'] . "</td>
                <td>Rp. " . number_format($transaction['harga']) . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-DATA-PAKET.pdf');
?>
