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
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda">
                <label for="nama">Nama Hewan Pelihataan:</label>
                <input type="text" id="nama_pet" name="nama_pet" placeholder="Hewan Peliharaan Anda">
                <label for="whatsapp">Whatsapp:</label>
                <input type="text" id="no_whatsapp" name="whatsapp" placeholder="Masukkan No. Whatsaap Anda">
                <label for="catatan">Catatan Tambahan:</label>
                <textarea id="notes" name="catatan" placeholder="Masukkan catatan tambahan*"></textarea>
            </div>
            <div class="right-button">
                <button class="button1" onclick="batal()">Batal</button>
                <button class="button2" onclick="konfirmasi()">Konfirmasi</button>
            </div>
        </div>
    </div>

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

        function konfirmasi() {
            // Mengambil nilai-nilai dari formulir
            var nama = document.getElementById('nama').value;
            var namaHewan = document.getElementById('nama_pet').value;
            var whatsapp = document.getElementById('no_whatsapp').value;
            var catatan = document.getElementById('notes').value;

            // Mengirim formulir ke URL tujuan menggunakan AJAX
            var xhr = new XMLHttpRequest();
            var url = "/confirmation/save"; // Sesuaikan dengan URL tujuan
            var params = "nama=" + encodeURIComponent(nama) + "&nama_pet=" + encodeURIComponent(namaHewan) + "&whatsapp=" + encodeURIComponent(whatsapp) + "&catatan=" + encodeURIComponent(catatan);
            xhr.open("POST", url, true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    // Tanggapan dari server setelah berhasil menyimpan data
                    document.getElementById("result").innerHTML = xhr.responseText;
                    // Atur tindakan selanjutnya setelah berhasil menyimpan data
                    // misalnya, mengarahkan pengguna ke halaman konfirmasi
                    // atau menampilkan pesan sukses.
                }
            };
            xhr.send(params);
        }
    </script>
</body>

</html>