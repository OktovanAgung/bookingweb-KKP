<!DOCTYPE html>
<html>

<head>
    <title>Datepicker</title>
    <style>
        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        .date-button {
            background: none;
            border: none;
            cursor: pointer;
        }

        .selected {
            background-color: #f0f0f0;
        }

        .month-year-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .month-dropdown,
        .year-dropdown {
            width: 150px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="month-year-container">
            <select id="monthDropdown" class="month-dropdown">
                <option value="0">Januari</option>
                <option value="1">Februari</option>
                <option value="2">Maret</option>
                <option value="3">April</option>
                <option value="4">Mei</option>
                <option value="5">Juni</option>
                <option value="6">Juli</option>
                <option value="7">Agustus</option>
                <option value="8">September</option>
                <option value="9">Oktober</option>
                <option value="10">November</option>
                <option value="11">Desember</option>
            </select>
            <select id="yearDropdown" class="year-dropdown"></select>
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

    <script>
        var currentDate = new Date(); // Tanggal saat ini
        var currentMonth = currentDate.getMonth(); // Bulan saat ini (0-11)
        var currentYear = currentDate.getFullYear(); // Tahun saat ini

        // Fungsi untuk mengisi tanggal pada setiap tombol tanggal
        function populateCalendarDates() {
            var startDate = new Date(currentYear, currentMonth, 1); // Tanggal awal bulan
            var endDate = new Date(currentYear, currentMonth + 1, 0); // Tanggal akhir bulan

            var startDay = startDate.getDay(); // Hari awal bulan (0-6, 0: Minggu, 1: Senin, dst.)
            var endDay = endDate.getDate(); // Jumlah tanggal dalam bulan

            var date = 1; // Penomeran tanggal pada kalender
            var numRows = Math.ceil((endDay + startDay) / 7); // Jumlah baris yang diperlukan

            var dateBody = document.getElementById('dateBody');
            dateBody.innerHTML = ''; // Kosongkan isi tanggal

            // Loop untuk mengisi tanggal pada setiap sel
            for (var i = 0; i < numRows; i++) {
                var row = document.createElement('tr');

                for (var j = 0; j < 7; j++) {
                    var cell = document.createElement('td');
                    var button = document.createElement('button');
                    button.classList.add('date-button');

                    // Tambahkan penomeran tanggal jika berada dalam rentang tanggal bulan saat ini
                    if ((i === 0 && j >= startDay) || (i > 0 && date <= endDay)) {
                        button.textContent = date;
                        date++;
                    }

                    // Tambahkan tombol tanggal ke dalam sel
                    cell.appendChild(button);

                    // Tambahkan sel ke dalam baris
                    row.appendChild(cell);
                }

                // Tambahkan baris ke dalam tbody
                dateBody.appendChild(row);
            }
        }

        // Fungsi untuk memperbarui tampilan bulan dan tahun
        function updateMonthYear() {
            var monthDropdown = document.getElementById('monthDropdown');
            monthDropdown.value = currentMonth;

            var yearDropdown = document.getElementById('yearDropdown');
            yearDropdown.value = currentYear;

            populateYearDropdown();
        }

        // Fungsi untuk mengisi opsi tahun pada dropdown tahun
        function populateYearDropdown() {
            var yearDropdown = document.getElementById('yearDropdown');
            yearDropdown.innerHTML = '';

            var startYear = currentYear;
            var endYear = currentYear + 2;

            for (var year = startYear; year <= endYear; year++) {
                var option = document.createElement('option');
                option.value = year;
                option.textContent = year;
                yearDropdown.appendChild(option);
            }
        }


        // Pemanggilan fungsi pertama kali untuk mengisi tanggal dan tampilan bulan dan tahun
        populateCalendarDates();
        updateMonthYear();

        // Tambahkan event listener untuk dropdown bulan
        var monthDropdown = document.getElementById('monthDropdown');
        monthDropdown.addEventListener('change', function() {
            currentMonth = parseInt(this.value);
            populateCalendarDates();
        });

        // Tambahkan event listener untuk dropdown tahun
        var yearDropdown = document.getElementById('yearDropdown');
        yearDropdown.addEventListener('change', function() {
            currentYear = parseInt(this.value);
            populateCalendarDates();
        });
    </script>
</body>

</html>