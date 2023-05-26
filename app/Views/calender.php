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

    <script>
        var currentDate = new Date(); // Tanggal saat ini
        var currentMonth = currentDate.getMonth(); // Bulan saat ini (0-11)
        var currentYear = currentDate.getFullYear(); // Tahun saat ini
        var dateBody = document.getElementById('dateBody');
        var currentMonthYear = document.getElementById('currentMonthYear');

        // Fungsi untuk mengisi tanggal pada setiap tombol tanggal
        function populateCalendarDates() {
            var startDate = new Date(currentYear, currentMonth, 1); // Tanggal awal bulan
            var endDate = new Date(currentYear, currentMonth + 1, 0); // Tanggal akhir bulan

            var startDay = startDate.getDay(); // Hari awal bulan (0-6, 0: Minggu, 1: Senin, dst.)
            var endDay = endDate.getDate(); // Jumlah tanggal dalam bulan

            var prevMonthEndDate = new Date(currentYear, currentMonth, 0).getDate(); // Tanggal akhir bulan sebelumnya

            var date = 1; // Penomeran tanggal pada kalender
            var numRows = Math.ceil((endDay + startDay) / 7); // Jumlah baris yang diperlukan

            dateBody.innerHTML = ''; // Kosongkan isi tanggal

            // Loop untuk mengisi tanggal pada setiap sel
            for (var i = 0; i < numRows; i++) {
                var row = document.createElement('tr');

                for (var j = 0; j < 7; j++) {
                    var cell = document.createElement('td');
                    var button = document.createElement('button');
                    button.classList.add('date-button');

                    // Jika sebelum tanggal 1 bulan saat ini
                    if (i === 0 && j < startDay) {
                        var prevMonthDate = prevMonthEndDate - (startDay - j - 1);
                        button.textContent = prevMonthDate;
                        button.disabled = true; // Tambahkan properti disabled pada tombol
                        cell.classList.add('disabled'); // Tambahkan class 'disabled' pada sel
                    }
                    // Jika setelah tanggal akhir bulan saat ini
                    else if (date > endDay) {
                        var nextMonthDate = date - endDay;
                        button.textContent = nextMonthDate;
                        button.disabled = true; // Tambahkan properti disabled pada tombol
                        cell.classList.add('disabled'); // Tambahkan class 'disabled' pada sel
                        date++;
                    }
                    // Tambahkan penomeran tanggal jika berada dalam rentang tanggal bulan saat ini
                    else {
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

            // Update tampilan bulan dan tahun saat ini
            currentMonthYear.textContent = getMonthName(currentMonth) + ' ' + currentYear;
        }

        // Fungsi untuk mendapatkan nama bulan berdasarkan indeks bulan (0-11)
        function getMonthName(monthIndex) {
            var months = [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
                'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];
            return months[monthIndex];
        }

        // Fungsi untuk memperbarui bulan saat ini ke bulan sebelumnya
        function goToPrevMonth() {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            populateCalendarDates();
        }

        // Fungsi untuk memperbarui bulan saat ini ke bulan berikutnya
        function goToNextMonth() {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            populateCalendarDates();
        }

        // Pemanggilan fungsi pertama kali untuk mengisi tanggal dan tampilan bulan dan tahun
        populateCalendarDates();

        // Tambahkan event listener untuk tombol "Prev"
        var prevMonthButton = document.getElementById('prevMonthButton');
        prevMonthButton.addEventListener('click', goToPrevMonth);

        // Tambahkan event listener untuk tombol "Next"
        var nextMonthButton = document.getElementById('nextMonthButton');
        nextMonthButton.addEventListener('click', goToNextMonth);
    </script>
</body>

</html>