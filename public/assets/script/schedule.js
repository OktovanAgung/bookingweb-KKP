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

    var buttons = document.querySelectorAll('.button');
    buttons.forEach(function(button) {
        if (button.textContent === category) {
            button.classList.toggle('active');
        }
    });
}

// Fungsi untuk mengatur pilihan waktu
function selectTime(time) {
    selectedTime = time;

    // Cek apakah kategori dan tanggal sudah dipilih
    if (selectedCategories.length > 0 && selectedDate) {
        // Redirect ke halaman konfirmasi dengan hasil pilihan
        showResults();
    }
}

// Fungsi untuk menampilkan hasil pilihan pada input field
function displayResults() {
    const categoryInput = document.getElementById('category');
    const dateInput = document.getElementById('date');
    const timeInput = document.getElementById('time');

    // Menampilkan hasil pilihan pada input field
    categoryInput.value = selectedCategories.join(', ');
    dateInput.value = selectedDate.toLocaleDateString('en-US');
    timeInput.value = selectedTime;
}

// Fungsi untuk menampilkan hasil pilihan pengguna
function showResults() {
    const resultElement = document.getElementById('result');

    if (selectedCategories.length === 0 || !selectedTime || !selectedDate) {
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

        var confirmationUrl = "confirmation?hasil=" + encodeURIComponent(resultText);
        window.location.href = confirmationUrl;

        // Tampilkan hasil pada input field
        displayResults();
    }
}
