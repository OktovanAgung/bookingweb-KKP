<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@400;500&family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/style/admin.css') ?>">
    <title>Admin</title>
</head>

<body onload="displayCurrentDate()">
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="/assets/img/logo.png" alt="Logo">
            </div>
            <div class="label">
                <h1>Booking List</h1>
            </div>
            <div class="tanggal">
                <div class="search">
                    <input type="text" id="searchInput" placeholder="Cari...">
                </div>
                <p>Tanggal Sekarang: <span id="currentDate"></span></p>
            </div>
        </div>
        <div class="tabel">
            <table>
                <thead>
                    <tr>
                        <th class="id-cell">ID</th>
                        <th class="nama-cell">Nama</th>
                        <th class="whatsapp-cell">WhatsApp</th>
                        <th class="pet-cell">Pet</th>
                        <th class="notes-cell">Notes</th>
                        <th class="layanan-cell">Layanan</th>
                        <th class="tanggal-cell">Tanggal & Waktu</th>
                        <th class="button-cell">Tombol</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (array_reverse($pelanggan) as $row) : ?>
                        <tr <?php if ($row['selesai'] == 1) echo 'class="highlight"'; ?>>
                            <td class="id-cell"><?= $row['id'] ?></td>
                            <td class="nama-cell"><?= $row['nama'] ?></td>
                            <td class="whatsapp-cell"><?= $row['no_whatsapp'] ?></td>
                            <td class="pet-cell"><?= $row['nama_pet'] ?></td>
                            <td class="notes-cell"><?= $row['notes'] ?></td>
                            <td class="layanan-cell"><?= $row['layanan'] ?></td>
                            <td class="tanggal-cell"><?= $row['tanggal'] ?> <?= $row['waktu'] ?></td>
                            <td class="button-cell">
                                <button onclick="handleButtonClick(this)" data-id="<?= $row['id'] ?>">Selesai</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="<?= base_url('assets/script/admin.js') ?>"></script>
</body>

</html>