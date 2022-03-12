<?php
    $nik = $_POST['nik'];
    $nama_lengkap = $_POST['nama_lengkap'];

    //validasi user terdaftar
    $data = file("config.txt", FILE_IGNORE_NEW_LINES);
    foreach ($data as $value) {
        $pisah = explode("|", $value);
        if ($nik==$pisah['0']) {
            @$cek = TRUE;
        }
    }
    if (@$cek) { ?> <!-- NIK sudah terdaftar -->
        <script type="text/javascript">
            alert("NIK sudah terdaftar!");
            window.location.assign("../register.php");
        </script>
        <?php
    }else{
        $format = "\n$nik|$nama_lengkap";
        $file = fopen("config.txt", "a");
        fwrite($file, $format);
        fclose($file);
        ?>
        <script type="text/javascript">
            alert("Pendaftaran Berhasil!");
            window.location.assign("../index.php");
        </script>
        <?php
    }
?>