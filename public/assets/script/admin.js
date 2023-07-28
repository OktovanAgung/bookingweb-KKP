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

function handleSearch() {
  var input, filter, table, tr, td1, td2, i, txtValue1, txtValue2;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.querySelector(".tabel table");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
      td1 = tr[i].getElementsByTagName("td")[1]; // Kolom dengan nama pelanggan
      td2 = tr[i].getElementsByTagName("td")[3]; // Kolom dengan pet
      if (td1 && td2) {
          txtValue1 = td1.textContent || td1.innerText;
          txtValue2 = td2.textContent || td2.innerText;
          if (
              txtValue1.toUpperCase().indexOf(filter) > -1 ||
              txtValue2.toUpperCase().indexOf(filter) > -1
          ) {
              tr[i].style.display = "";
          } else {
              tr[i].style.display = "none";
          }
      }
  }
}

document.getElementById("searchInput").addEventListener("keyup", handleSearch);