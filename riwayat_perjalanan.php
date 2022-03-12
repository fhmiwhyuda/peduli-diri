<div class="card">
    <div class="card-header">
        <h3 class="card-title">Riwayat perjalanan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>jam</th>
                    <th>Lokasi berkunjung</th>
                    <th>Suhu tubuh</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $data = file('config/catatan.txt', FILE_IGNORE_NEW_LINES);
                $user = $_SESSION['nik'] . "|" . $_SESSION['nama_lengkap'];
                foreach ($data as $value) {
                    $pisah = explode("|", $value);
                    $key = $pisah['0'] . "|" . $pisah['1'];
                    if ($key == $user) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $pisah['2']; ?></td>
                            <td><?php echo $pisah['3']; ?></td>
                            <td><?php echo $pisah['4']; ?></td>
                            <td><?php echo $pisah['5']; ?></td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>