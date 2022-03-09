<?php
    $nik = $_POST['nik'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $format = "$nik|$nama_lengkap";
    $data = file("config.txt", FILE_IGNORE_NEW_LINES);
    if (in_array($format,$data)) { //jika data ditemukan
        session_start();
        $_SESSION['nik'] = $nik;
        $_SESSION['nama_lengkap'] = $nama_lengkap;
        header("location:../dashboard.php");
    }else{//jika data tidak ditemukan ?>
        <script type="text/javascript">
            alert("NIK atau Nama Salah!");
            window.location.assign("../index.php");
        </script>
        <?php
    }
?>