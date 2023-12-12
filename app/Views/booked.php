<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?= base_url("/assets/img/logo.png") ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@400;500&family=Josefin+Sans:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/style/booked.css') ?>">
    <title>Booked</title>
</head>

<body>
    <div class="container">
        <div class="top-side">
            <div class="logo">
                <img src="/assets/img/logo.png" alt="Logo">
            </div>
        </div>
        <div class="mid-side">
            <div class="title">
                <p>Booking telah berhasil dibuat.</p>
                <p>Terima kasih telah mempercayakan hewan peliharaan Anda kepada kami. Kami akan memberikan perawatan terbaik yang mereka butuhkan.</p>
            </div>
            <div class="content">
                <div class="kiri">
                    <p>Layanan</p>
                    <p>Tanggal</p>
                    <p>Waktu</p>
                </div>
                <div class="tengah">
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                </div>
                <div class="kanan">
                    <p><span><?= session('layanan') ?></span></p>
                    <p><span><?= session('tanggal') ?></span></p>
                    <p><span><?= session('waktu') ?></span></p>
                </div>
            </div>
        </div>

        <!-- <div class="sosmed">
            <div>
                <img src="/assets/img/maps_logo.png" alt="Logo">
                <a href="https://goo.gl/maps/eAN9kY4uLTdqHudH9" target="_blank">Ruko Melawai, Jl. Metland Cibitung No.22</a>
            </div>
            <div>
                <img src="/assets/img/ig_logo.png" alt="Logo">
                <a href="https://www.instagram.com/sandio_petcare/" target="_blank">Instagram</a>
            </div>
            <div>
                <img src="/assets/img/whatsapp_logo.png" alt="Logo">
                <a href="https://api.whatsapp.com/send?phone=6281311672018" target="_blank">WhatsApp</a>
            </div>
        </div> -->

    </div>

    <script src="<?= base_url('assets/script/booked.js') ?>"></script>

</body>

</html>