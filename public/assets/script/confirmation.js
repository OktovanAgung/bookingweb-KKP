function batal() {
    window.location.href = "calender"; // Ubah menjadi halaman "calender.html" atau sesuaikan dengan halaman tujuan Anda
}

window.onload = function() {
    var urlParams = new URLSearchParams(window.location.search);
    var hasil = urlParams.get('hasil');
    var resultElement = document.getElementById('result');
    resultElement.textContent = hasil;
};

function konfirmasi() {
    // Mendapatkan nilai dari input form
    var nama = document.getElementById('nama').value;
    var namaPet = document.getElementById('nama_pet').value;
    var whatsapp = document.getElementById('no_whatsapp').value;

    // Validasi
    var namaError = document.getElementById('namaError');
    var namaPetError = document.getElementById('namaPetError');
    var whatsappError = document.getElementById('whatsappError');

    namaError.textContent = '';
    namaPetError.textContent = '';
    whatsappError.textContent = '';

    if (nama === '') {
        namaError.textContent = 'Nama Anda harus diisi';
        return;
    }

    if (namaPet === '') {
        namaPetError.textContent = 'Nama Hewan Peliharaan harus diisi';
        return;
    }

    if (whatsapp === '') {
        whatsappError.textContent = 'Nomor Whatsapp harus diisi';
        return;
    }

    // Jika validasi berhasil, submit form
    document.forms[0].submit();
}
// Ambil nilai dari parameter hasil pada URL
const urlParams = new URLSearchParams(window.location.search);
const hasil = urlParams.get('hasil');

// Setel nilai input field dengan hasil pilihan
const categoryInput = document.getElementById('category');
const dateInput = document.getElementById('date');
const timeInput = document.getElementById('time');

// Memisahkan hasil menjadi kategori, tanggal, dan waktu
const resultParts = hasil.split(' pada hari ');
const kategori = resultParts[0];
const tanggalWaktu = resultParts[1].split(', pukul ');
const tanggal = tanggalWaktu[0];
const waktu = tanggalWaktu[1];

// Mengatur nilai input field dengan hasil pilihan
categoryInput.value = kategori;
dateInput.value = tanggal;
timeInput.value = waktu;
