<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tambah Hapus Elemen Form</title>
    <script src="jquery-3.1.0.min.js"></script>
    <script src="<?= base_url('views/kelas/') ?>ujianjs.php"></script>
    <style type="text/css">
        body {
            font-family: sans-serif;
            text-align: center;
        }

        #member,
        .member {
            background-color: #FFEB3B;
            padding: 20px;
        }

        .input {
            margin: 10px 0px;
        }

        input[type=text],
        input[type=email] {
            padding: 5px;
            font-size: 14px;
        }

        .tambahmember {
            background-color: #009688;
            color: #fff;
            padding: 5px;
        }

        .hapusmember {
            background-color: #FF5722;
            color: #fff;
            padding: 5px;
        }

        hr {
            border: 2px solid #fff;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <div id="member">
            <div class="input">
                <input type="text" name="nama" required placeholder="Nama Lengkap">
            </div>
            <div class="input">
                <input type="text" name="alamat" required placeholder="Alamat">
            </div>
            <div class="input">
                <input type="email" name="email" required placeholder="Email">
            </div>
            <div class="input">
                <input type="text" name="no_hp" required placeholder="Nomor Handphone">
            </div>
        </div>
        <a href="#" class="tambahmember">(+) TAMBAH</a> <a href="#" class="hapusmember">(-) HAPUS</a>
    </form>
</body>

</html>