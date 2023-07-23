// tanggal
function displayCurrentDate() {
    var currentDate = new Date();
    var day = currentDate.getDate();
    var month = currentDate.getMonth() + 1; // Menggunakan indeks bulan dimulai dari 0
    var year = currentDate.getFullYear();

    var dateString = day + "/" + month + "/" + year;

    document.getElementById("currentDate").innerHTML = dateString;
}

function toggleButtonColor(button) {
    // Mendapatkan elemen baris (tr) yang mengandung tombol yang diklik
    var row = button.parentNode.parentNode;

    // Memeriksa apakah baris sudah memiliki kelas warna tertentu
    if (row.classList.contains('highlight')) {
      // Jika sudah memiliki kelas warna, maka hapus kelas tersebut
        row.classList.remove('highlight');
    } else {
      // Jika belum memiliki kelas warna, tambahkan kelas tersebut
        row.classList.add('highlight');
    }
}
