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
                    <button class="button2" onclick="validateForm()">Konfirmasi</button>

                </div>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var nama = document.getElementById("nama").value;
            var nama_pet = document.getElementById("nama_pet").value;
            var whatsapp = document.getElementById("no_whatsapp").value;

            var namaError = document.getElementById("namaError");
            var namaPetError = document.getElementById("namaPetError");
            var whatsappError = document.getElementById("whatsappError");

            namaError.textContent = "";
            namaPetError.textContent = "";
            whatsappError.textContent = "";

            if (nama === "") {
                namaError.textContent = "Bagian ini diperlukan";
            }

            if (nama_pet === "") {
                namaPetError.textContent = "Bagian ini diperlukan";
            }

            if (whatsapp === "") {
                whatsappError.textContent = "Bagian ini diperlukan";
            }

            if (nama !== "" && nama_pet !== "" && whatsapp !== "") {
                window.location.href = "booked";
            }
        }

        function batal() {
            window.location.href = "calender";
        }

        window.onload = function() {
            var urlParams = new URLSearchParams(window.location.search);
            var hasil = urlParams.get('hasil');
            var resultElement = document.getElementById('result');
            resultElement.textContent = hasil;
        };
    </script>
</body>

</html>