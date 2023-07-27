<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style/calender.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/style/calender_mobile.css') ?>">
    <title>Datepicker</title>
</head>

<body>
    <div class="container">
        <div class="left-side">
            <div class="logo">
                <img src="/assets/img/logo.png" alt="Logo">
            </div>
            <div class="service-button">
                <button class="button" onclick="toggleSelection('Dokter')">Dokter</button>
                <button class="button" onclick="toggleSelection('Hotel')">Hotel</button>
                <button class="button" onclick="toggleSelection('Grooming')">Grooming</button>
            </div>
            <div class="sosmed">
                <div class="maps">
                    <img src="/assets/img/maps_logo.png" alt="Logo">
                    <a href="https://shorturl.at/lOTV5">Ruko Melawai, Jl. Metland Cibitung No.22</a>
                </div>
                <div class="IGWA">
                    <div class="IG">
                        <img src="/assets/img/ig_logo.png" alt="Logo">
                        <a href="https://www.instagram.com/sandio_petcare/">Instagram</a>
                    </div>
                    <div class="WA">
                        <img src="/assets/img/whatsapp_logo.png" alt="Logo">
                        <a href="https://www.instagram.com/sandio_petcare/">WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="calendar-container">
            <div class="month-year-container">
                <button id="prevMonthButton" class="month-button">
                    <img src="/assets/img/left.png" alt="left">
                </button>
                <h2 id="currentMonthYear"></h2>
                <button id="nextMonthButton" class="month-button">
                    <img src="/assets/img/right.png" alt="right">
                </button>
            </div>
            <table>
                <tr>
                    <th>Min</th>
                    <th>Sen</th>
                    <th>Sel</th>
                    <th>Rab</th>
                    <th>Kam</th>
                    <th>Jum</th>
                    <th>Sab</th>
                </tr>
                <tbody id="dateBody"></tbody>
            </table>
        </div>

        <div class="right-side">
            <div class="selected-date-container">
                <div id="selectedDate"></div>
            </div>
            <div class="time">
                <?php
                $times = array(
                    '10:00', '10:15', '10:30', '10:45',
                    '11:00', '11:15', '11:30', '11:45',
                    '13:00', '13:15', '13:30', '13:45',
                    '14:00', '14:15', '14:30', '14:45',
                    '15:00', '15:15', '15:30', '15:45',
                    '16:00', '16:15', '16:30', '16:45',
                    '17:00', '17:15', '17:30', '17:45',
                    '18:00', '18:15', '18:30', '18:45',
                    '19:00', '19:15', '19:30', '19:45',
                    '20:00', '20:15', '20:30', '20:45',
                );
                foreach ($times as $time) {
                    echo '<button class="button" onclick="selectTime(\'' . $time . '\')">' . $time . '</button>';
                }
                ?>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/script/schedule.js') ?>"></script>
    <script src="<?= base_url('assets/script/calender.js') ?>"></script>

</body>

</html>