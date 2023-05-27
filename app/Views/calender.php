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
        <div class="sidebar"></div>

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

        <div class="sidebar"></div>
    </div>

    <script src="<?= base_url('assets/script/calender.js') ?>"></script>
</body>

</html>