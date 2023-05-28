<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style/calender.css') ?>">
    <title>Datepicker</title>
</head>

<body>
    <div class="container">
        <div class="left-sidebar">
            <div class="logo">
                <img src="/assets/img/logo.png" alt="Logo" width="244.29" height="244.29">
                <button class="button" onclick="toggleSelection('Doktor')">Doktor</button>
                <button class="button" onclick="toggleSelection('Hotel')">Hotel</button>
                <button class="button" onclick="toggleSelection('Grooming')">Grooming</button>
            </div>
        </div>
        <div class="calendar-container">
            <div class="month-year-container">
                <h2 id="currentMonthYear"></h2>
                <div class="button-container">
                    <button id="prevMonthButton" class="month-button">&#60;</button>
                    <button id="nextMonthButton" class="month-button">&#62;</button>
                </div>
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

        <div class="right-sidebar">
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

    <div class="button-bottom-container">
        <button onclick="showResults()">Tampilkan Hasil</button>
        <button onclick="clearSelections()">Clear</button>
    </div>

    <p id="result"></p>

    <script src="<?= base_url('assets/script/calender.js') ?>"></script>
</body>

</html>