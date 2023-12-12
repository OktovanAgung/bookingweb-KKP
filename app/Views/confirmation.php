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
    <link rel="stylesheet" href="<?= base_url('assets/style/confirmation.css') ?>">
    <title>Confrimation</title>
</head>

<body>
    <div class="container">
        <div class="left-side">
            <div class="logo">
                <img src="/assets/img/logo.png" alt="Logo">
            </div>
            <form action="/confirmation/store" method="POST">
                <div class="hasil">
                    <label for="layanan">Kategori:</label>
                    <input type="text" id="layanan" name="layanan" readonly>
                    <label for="tanggal">Tanggal:</label>
                    <input type="text" id="tanggal" name="tanggal" readonly>
                    <label for="waktu">Waktu:</label>
                    <input type="text" id="waktu" name="waktu" readonly>
                </div>
            </form>

            <!-- <div class="sosmed">
                <div class="MAPS">
                    <img src="/assets/img/maps_logo.png" alt="Logo">
                    <a href="https://goo.gl/maps/eAN9kY4uLTdqHudH9" target="_blank">Ruko Melawai, Jl. Metland Cibitung No.22</a>
                </div>
                <div class="IGWA">
                    <div class="IG">
                        <img src="/assets/img/ig_logo.png" alt="Logo">
                        <a href="https://www.instagram.com/sandio_petcare/" target="_blank">Instagram</a>
                    </div>
                    <div class="WA">
                        <img src="/assets/img/whatsapp_logo.png" alt="Logo">
                        <a href="https://api.whatsapp.com/send?phone=6281311672018" target="_blank">WhatsApp</a>
                    </div>
                </div>
            </div> -->

        </div>

        <div class="right-side">
            <form action="/confirmation/store" method="POST">
                <div class="form">
                    <input type="hidden" id="layanan_hidden" name="layanan">
                    <input type="hidden" id="tanggal_hidden" name="tanggal">
                    <input type="hidden" id="waktu_hidden" name="waktu">
                    <div class="nama">
                        <label for="nama">Nama Anda:</label>
                        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
                    </div>
                    <span id="namaError" class="error"></span>
                    <div class="hewan">
                        <label for="nama_pet">Nama Hewan Peliharaan:</label>
                        <input type="text" id="nama_pet" name="nama_pet" placeholder="Hewan Peliharaan Anda" required>
                    </div>
                    <span id="namaPetError" class="error"></span>
                    <div class="whatsapp">
                        <label for="no_whatsapp">Whatsapp:</label>
                        <input type="text" id="no_whatsapp" name="whatsapp" placeholder="Masukkan No. Whatsapp Anda" required>
                    </div>
                    <span id="whatsappError" class="error"></span>
                    <div class="catatan">
                        <label for="notes">Catatan Tambahan:</label>
                        <textarea id="notes" name="catatan" placeholder="Masukkan catatan tambahan*"></textarea>
                    </div>
                    <div class="right-button">
                        <button class="button1" onclick="batal()">Batal</button>
                        <button class="button2" onclick="konfirmasi()">Konfirmasi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="<?= base_url('assets/script/confirmation.js') ?>"></script>

</body>

</html>