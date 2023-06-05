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
        <div class="schedule">
            <div class="day">
                <input type="checkbox" id="toggleSunday" class="toggle-input">
                <label for="toggleSunday" class="toggle-label"></label>
                <label for="toggleSunday">Minggu</label>
                <div class="time">
                    <?php
                    $times = array(
                        '10:00', '10:15', '10:30', '10:45',
                        '11:00', '11:15', '11:30', '11:45',
                        '13:00', '13:15', '13:30', '13:45',
                        '14:00', '14:15', '14:30', '14:45',
                        '15:00', '15:15', '15:30', '15:45',
                        '16:00'
                    );
                    foreach ($times as $time) {
                        echo '<button class="button" onclick="selectTime(\'' . $time . '\')">' . $time . '</button>';
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/script/admin.js') ?>"></script>
</body>

</html>