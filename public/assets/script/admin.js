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

function toggleButtonColor(button) {
  var row = button.parentNode.parentNode;
  var orderId = button.getAttribute('data-id');

  if (row.classList.contains('highlight')) {
      row.classList.remove('highlight');
      // Panggil fungsi untuk mengirimkan data status selesai ke server dengan nilai 0 (belum selesai)
      updateStatusSelesai(orderId, 0);
  } else {
      row.classList.add('highlight');
      // Panggil fungsi untuk mengirimkan data status selesai ke server dengan nilai 1 (selesai)
      updateStatusSelesai(orderId, 1);
  }
}

function updateStatusSelesai(orderId, status) {
  // Kirim permintaan AJAX ke server
  fetch('/update_status_selesai', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: 'order_id=' + encodeURIComponent(orderId) + '&status=' + encodeURIComponent(status),
  })
  .then(response => response.json())
  .then(data => {
      // Berhasil mendapatkan respons dari server
      if (data.success) {
          console.log('Status selesai berhasil diperbarui.');
      } else {
          console.log('Gagal memperbarui status selesai.');
      }
  })
  .catch(error => {
      console.error('Terjadi kesalahan:', error);
  });
}
