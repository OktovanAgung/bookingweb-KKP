var currentDate = new Date(); // Tanggal saat ini
var currentMonth = currentDate.getMonth(); // Bulan saat ini (0-11)
var currentYear = currentDate.getFullYear(); // Tahun saat ini
var dateBody = document.getElementById('dateBody');
var currentMonthYear = document.getElementById('currentMonthYear');
var selectedDate = null;

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

    // Tambahkan event listener untuk tombol-tombol tanggal
    addDateButtonListeners();
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

// Fungsi untuk mendapatkan nama hari berdasarkan indeks hari (0-6)
function getDayName(dayIndex) {
    var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    return days[dayIndex];
}

// Fungsi untuk menambahkan event listener pada tombol-tombol tanggal
function addDateButtonListeners() {
    var dateButtons = document.getElementsByClassName('date-button');
    for (var i = 0; i < dateButtons.length; i++) {
        dateButtons[i].addEventListener('click', showSelectedDate);
    }
}

// Pemanggilan fungsi pertama kali untuk mengisi tanggal dan tampilan bulan dan tahun
populateCalendarDates();

// Tambahkan event listener untuk tombol "Prev"
var prevMonthButton = document.getElementById('prevMonthButton');
prevMonthButton.addEventListener('click', function() {
    // Hapus event listener pada tombol-tombol tanggal sebelum mengubah bulan
    removeDateButtonListeners();
    goToPrevMonth();
});

// Tambahkan event listener untuk tombol "Next"
var nextMonthButton = document.getElementById('nextMonthButton');
nextMonthButton.addEventListener('click', function() {
    // Hapus event listener pada tombol-tombol tanggal sebelum mengubah bulan
    removeDateButtonListeners();
    goToNextMonth();
});

// Fungsi untuk menghapus event listener pada tombol-tombol tanggal
function removeDateButtonListeners() {
    var dateButtons = document.getElementsByClassName('date-button');
    for (var i = 0; i < dateButtons.length; i++) {
        var clonedButton = dateButtons[i].cloneNode(true);
        dateButtons[i].parentNode.replaceChild(clonedButton, dateButtons[i]);
    }
}

function showSelectedDate() {
    selectedDate = new Date(currentYear, currentMonth, parseInt(this.textContent));

    var selectedDayIndex = selectedDate.getDay();
    var selectedDay = getDayName(selectedDayIndex);
    var selectedMonth = getMonthName(currentMonth);
    var selectedYear = currentYear;

    var selectedDateContainer = document.querySelector('.selected-date-container');
    selectedDateContainer.textContent = ""+ selectedDay + ", " + selectedDate.getDate() + " " + selectedMonth + " " + selectedYear;

    // Tambahkan kode berikut untuk menampilkan right-sidebar saat tanggal dipilih
    var rightSidebar = document.querySelector('.right-sidebar');
    rightSidebar.classList.add('show');
}


// _____________________________________________________________________________________________________________________________________________________________

// Variable untuk menyimpan pilihan pengguna
let selectedCategories = [];
let selectedTime = '';

// Fungsi untuk mengatur pilihan kategori
function toggleSelection(category) {
    // Periksa apakah kategori sudah dipilih sebelumnya
    const index = selectedCategories.indexOf(category);

    if (index > -1) {
        // Jika sudah dipilih, hapus dari array
        selectedCategories.splice(index, 1);
    } else {
        // Jika belum dipilih, tambahkan ke array
        selectedCategories.push(category);
    }
}

// Fungsi untuk mengatur pilihan waktu
function selectTime(time) {
    selectedTime = time;
}

// Fungsi untuk menampilkan hasil pilihan pengguna
function showResults() {
    const resultElement = document.getElementById('result');

    if (selectedCategories.length === 0 || !selectedTime || !selectedDate) {
        resultElement.textContent = 'Silakan pilih kategori, waktu, dan tanggal terlebih dahulu.';
    } else {
        let resultText = '';

        if (selectedCategories.length === 1) {
            var selectedButton = selectedCategories[0];
            if (selectedButton === 'Doktor') {
                resultText = 'Janji temu Doktor';
            } else if (selectedButton === 'Hotel') {
                resultText = 'Check in hotel';
            } else if (selectedButton === 'Grooming') {
                resultText = 'Datang Grooming';
            }
        } else {
            var selectedButtonNames = [];
            for (var i = 0; i < selectedCategories.length; i++) {
                var buttonName = selectedCategories[i];
                if (buttonName === 'Doktor') {
                    selectedButtonNames.push('Janji Temu Doktor');
                } else if (buttonName === 'Hotel') {
                    selectedButtonNames.push('Check In Hotel');
                } else if (buttonName === 'Grooming') {
                    selectedButtonNames.push('Datang Grooming');
                }
            }

            if (selectedCategories.length === 2) {
                resultText = selectedButtonNames.join(' dan ');
            } else if (selectedCategories.length === 3) {
                var lastButtonName = selectedButtonNames.pop();
                resultText = selectedButtonNames.join(', ') + ' dan ' + lastButtonName;
            }
        }

        var selectedDayIndex = selectedDate.getDay();
        var selectedDay = getDayName(selectedDayIndex);
        var selectedMonth = getMonthName(selectedDate.getMonth());
        var selectedYear = selectedDate.getFullYear();

        resultText += ' pada hari ' + selectedDay + ', ' + selectedDate.getDate() + ' ' + selectedMonth + ' ' + selectedYear + ', pukul ' + selectedTime;

        resultElement.textContent = resultText;
    }
}

// Fungsi untuk menghapus histori pilihan
function clearSelections() {
    selectedCategories = [];
    selectedTime = '';
    const resultElement = document.getElementById('result');
    resultElement.textContent = '';
}

// _____________________________________________________________________________________________________________________________________________________________

