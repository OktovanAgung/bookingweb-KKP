<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/style/admin.css') ?>"> -->
    <title>Admin</title>
</head>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 500px;
        height: 650px;
        border: 2px solid rgb(212, 93, 0);
        border-radius: 20px;
        box-shadow: 0 0 100px rgba(0, 0, 0, 0.1);
        background-color: rgb(254, 127, 11);
    }

    .logo {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .logo img {
        width: 170px;
    }

    .label {
        color: white;
        margin-top: 10px;
    }

    .tabel {
        border: 2px solid rgb(212, 93, 0);
        background-color: white;
        border-radius: 20px;
        height: 446px;
        width: 467px;
        margin-top: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 1px solid black;
        padding: 8px;
    }

    table th {
        background-color: rgb(212, 93, 0);
        color: white;
    }
</style>

<body>
    <div class="container">
        <div class="logo">
            <img src="/assets/img/logo.png" alt="Logo">
            <div class="label">
                <h1>Booking List</h1>
            </div>
        </div>

        <div class="tabel">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Data Pelanggan</th>
                        <th>Layanan</th>
                        <th>Tanggal & Waktu</th>
                        <th>Tombol</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Layanan A</td>
                        <td>2023-06-14 09:00</td>
                        <td><button>Detail</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>Layanan B</td>
                        <td>2023-06-14 13:30</td>
                        <td><button>Detail</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>David Johnson</td>
                        <td>Layanan C</td>
                        <td>2023-06-14 16:45</td>
                        <td><button>Detail</button></td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
</body>

</html>