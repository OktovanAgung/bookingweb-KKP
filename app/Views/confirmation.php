<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 600px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: 1fr 1px 1fr;
        }

        .logo {
            text-align: center;
            padding: 20px;
            grid-column: 1;
        }

        .form {
            padding: 20px;
            grid-column: 3;
        }

        .form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            resize: vertical;
        }

        .form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            resize: vertical;
            height: 100px;
        }

        .form button {
            padding: 10px 20px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="logo.png" alt="Logo">
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

    <script>
        function batal() {
            // Kode aksi untuk tombol Batal
        }

        function konfirmasi() {
            // Kode aksi untuk tombol Konfirmasi
        }

        // Mendapatkan nilai parameter hasil dari URL
        var urlParams = new URLSearchParams(window.location.search);
        var hasil = urlParams.get('hasil');

        // Menampilkan hasil di halaman konfirmasi
        document.getElementById("result").textContent = hasil;
    </script>
</body>

</html>