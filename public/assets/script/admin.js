// tanggal
function displayCurrentDate() {
    var currentDate = new Date();
    var day = currentDate.getDate();
    var month = currentDate.getMonth() + 1; // Menggunakan indeks bulan dimulai dari 0
    var year = currentDate.getFullYear();

    var dateString = day + "/" + month + "/" + year;

    document.getElementById("currentDate").innerHTML = dateString;
}