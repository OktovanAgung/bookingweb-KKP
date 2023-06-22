// Mengambil nilai dari URL parameter
const urlParams = new URLSearchParams(window.location.search);
const layananValue = urlParams.get('layanan');
const tanggalValue = urlParams.get('tanggal');
const waktuValue = urlParams.get('waktu');

// Menampilkan nilai-nilai tersebut di halaman
document.getElementById('layanan').textContent = layananValue;
document.getElementById('tanggal').textContent = tanggalValue;
document.getElementById('waktu').textContent = waktuValue;
