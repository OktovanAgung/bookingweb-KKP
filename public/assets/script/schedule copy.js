function showResults() {
    const resultElement = document.getElementById('result');
    const layananInput = document.getElementById('layanan');
    const tanggalInput = document.getElementById('tanggal');
    const waktuInput = document.getElementById('waktu');

    if (selectedCategories.length === 0 || !selectedTime || !selectedDate) {
        // ...
    } else {
        // ...
        var selectedDayIndex = selectedDate.getDay();
        var selectedDay = getDayName(selectedDayIndex);
        var selectedMonth = getMonthName(selectedDate.getMonth());
        var selectedYear = selectedDate.getFullYear();

        resultText += ' pada hari ' + selectedDay + ', ' + selectedDate.getDate() + ' ' + selectedMonth + ' ' + selectedYear + ', pukul ' + selectedTime;

        // Set nilai input berdasarkan hasil pilihan
        layananInput.value = resultText;
        tanggalInput.value = selectedDay + ', ' + selectedDate.getDate() + ' ' + selectedMonth + ' ' + selectedYear;
        waktuInput.value = selectedTime;

        var confirmationUrl = "confirmation?hasil=" + encodeURIComponent(resultText);
        window.location.href = confirmationUrl;
    }
}
