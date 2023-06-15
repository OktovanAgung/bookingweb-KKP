<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style/admin.css') ?>">
    <title>Admin</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="/assets/img/logo.png" alt="Logo">
            </div>
            <div class="label">
                <h1>Booking List</h1>
            </div>
        </div>
        <div class="tabel">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>No. WhatsApp</th>
                        <th>Nama Pet</th>
                        <th>Notes</th>
                        <th>Layanan</th>
                        <th>Tanggal & Waktu</th>
                        <th>Tombol</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pelanggan as $row) : ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['no_whatsapp'] ?></td>
                            <td><?= $row['nama_pet'] ?></td>
                            <td><?= $row['notes'] ?></td>
                            <td><?= $row['layanan'] ?></td>
                            <td><?= $row['tanggal'] ?> <?= $row['waktu'] ?></td>
                            <td>
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>