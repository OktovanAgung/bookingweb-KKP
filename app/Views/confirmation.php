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
        <div class="left-side">
            <div class="logo">
                <img src="/assets/img/logo.png" alt="Logo">
            </div>
            <div id="result"></div>
            <div class="sosmed">
                <div>
                    <img src="/assets/img/maps_logo.png" alt="Logo">
                    <a href="https://shorturl.at/lOTV5">Ruko Melawai, Jl. Metland Cibitung No.22</a>
                </div>
                <div>
                    <img src="/assets/img/ig_logo.png" alt="Logo">
                    <a href="https://www.instagram.com/sandio_petcare/">Instagram</a>
                </div>
                <div>
                    <img src="/assets/img/whatsapp_logo.png" alt="Logo">
                    <a href="https://www.instagram.com/sandio_petcare/">WhatsApp</a>
                </div>
            </div>
        </div>

        <div class="right-side">
            <div class="form">
                <label for="nama">Nama Anda:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda">
                <label for="email">Whatsapp:</label>
                <input type="text" id="email" name="email" placeholder="Masukkan No. Whatsaap Anda">
                <label for="catatan">Catatan Tambahan:</label>
                <textarea id="catatan" name="catatan" placeholder="Masukkan catatan tambahan"></textarea>
            </div>
            <div class="right-button">
                <button class="button1" onclick="batal()">Batal</button>
                <button class="button2" onclick="konfirmasi()">Konfirmasi</button>
            </div>
        </div>
    </div>

</body>

<script>
    window.onload = function() {
        var urlParams = new URLSearchParams(window.location.search);
        var hasil = urlParams.get('hasil');
        var resultElement = document.getElementById('result');
        resultElement.textContent = hasil;
    };

    function batal() {
        window.location.href = "calender";
    }
</script>

</html>