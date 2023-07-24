// tanggal
function displayCurrentDate() {
  var currentDate = new Date();
  var day = currentDate.getDate();
  var month = currentDate.getMonth() + 1; // Menggunakan indeks bulan dimulai dari 0
  var year = currentDate.getFullYear();

  var dateString = day + "/" + month + "/" + year;

  document.getElementById("currentDate").innerHTML = dateString;
}

// Fungsi untuk menangani klik tombol dan me-refresh halaman
function handleButtonClick(button) {
  // Panggil fungsi toggleButtonColor untuk mengubah tampilan tombol
  toggleButtonColor(button);
  // Refresh halaman
  location.reload();
}

//highlight
function toggleButtonColor(button) {
  // Mendapatkan elemen baris (tr) yang mengandung tombol yang diklik
  var row = button.parentNode.parentNode;

  // Mengambil ID dari baris yang diklik
  var id = button.getAttribute("data-id");

  // Mengirim data ke server menggunakan AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "/admin/update_status", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Proses respons dari server jika diperlukan
      // Jika respons dari server menyatakan berhasil, maka kita akan memperbarui tampilan highlight berdasarkan status yang benar dari server.
      var response = JSON.parse(xhr.responseText);
      if (response.status === 'success') {
        if (row.classList.contains('highlight')) {
          row.classList.remove('highlight');
        } else {
          row.classList.add('highlight');
        }
      }
    }
  };
  xhr.send("id=" + id);
}
