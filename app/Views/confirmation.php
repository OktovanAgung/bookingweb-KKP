<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style/confirmation.css') ?>">
    <title>Confirmation</title>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="/assets/img/logo.png" alt="Logo" width="244.29" height="244.29">
            <div id="result"></div>
        </div>
        <div style="background-color: #ccc;"></div> <!-- Garis pemisah -->
        <div class="form">
            <label for="nama">Nama Anda:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Masukkan alamat email">

            <label for="catatan">Catatan Tambahan:</label>
            <textarea id="catatan" name="catatan" placeholder="Masukkan catatan tambahan"></textarea>

            <div class="buttons">
                <button type="button" onclick="batal()">Batal</button>
                <button type="button" onclick="konfirmasi()">Konfirmasi</button>
            </div>
        </div>
    </div>

</body>

</html>