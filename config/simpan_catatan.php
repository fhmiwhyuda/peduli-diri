<?php
session_start();
$nik = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$date = date_create($_POST['tanggal']);
$tanggal = date_format($date, "d-m-Y");
$jam = $_POST['jam'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

$format = "\n$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu Celcius";
$file = fopen('catatan.txt', 'a');
fwrite($file, $format);
fclose($file);
?>
<script type="text/javascript">
    alert("Data sudah tersimpan!");
    window.location.assign("../dashboard.php");
</script>