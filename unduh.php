<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=(device-width), initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    header('Content-Type: application/vnd-ms-excel');
    header('Content-Disposition: attachment; filename= Data Presensi.xls ');
    ?>

    <center>
        <h4> Presensi tanggal 23 December 2020</h4>
    </center>

    <table>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Waktu</th>
            <th>Keterangan</th>
        </tr>

        <?php
        include_once('connect.php');
        $no = 1;
        $presensi = mysqli_query($connect, "SELECT * FROM detail_presensi where id_presensi = 1");
        while ($data = mysqli_fetch_assoc($presensi)) {
        ?>
            <tr>
                <td width="50" align="center">
                    <?= $no++ ?>
                </td>
                <td width="150" align="right">
                    <?= $data['nis'] ?>
                </td>
                <td width="150">
                    <?= $data['nama'] ?>
                </td>
                <td width="250" align="center">
                    <?= $data['waktu'] ?>
                </td>
                <td width="150" align="center">
                    <?php if ($data['keterangan'] = 1) {
                        echo "Hadir";
                    } else {
                        echo "Tidak Hadir";
                    } ?>
                </td>

            </tr>
        <?php }  ?>
    </table>
</body>

</html>