<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <script src="<?= base_url('assets/script/booked.js') ?>"></script>

</body>

</html>