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
    // Mengambil nilai input layanan, tanggal, dan waktu dari class left-side
    var layananValue = document.getElementById('layanan').value;
    var tanggalValue = document.getElementById('tanggal').value;
    var waktuValue = document.getElementById('waktu').value;
    
    // Menyimpan nilai-nilai tersebut ke dalam input tersembunyi di class right-side
    document.getElementById('layanan_hidden').value = layananValue;
    document.getElementById('tanggal_hidden').value = tanggalValue;
    document.getElementById('waktu_hidden').value = waktuValue;

    // Melakukan submit formulir
    document.querySelector('form').submit();
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

    setHiddenInputValues();
    document.forms[0].submit();
}
// Ambil nilai dari parameter hasil pada URL
const urlParams = new URLSearchParams(window.location.search);
const hasil = urlParams.get('hasil');

// Setel nilai input field dengan hasil pilihan
const categoryInput = document.getElementById('layanan');
const dateInput = document.getElementById('tanggal');
const timeInput = document.getElementById('waktu');

// Memisahkan hasil menjadi kategori, tanggal, dan waktu
const resultParts = hasil.split(' ');
const kategori = resultParts.slice(0, -5).join(' ');
const tanggal = resultParts.slice(-5, -1).join(' ');
const waktu = resultParts.slice(-1)[0];

categoryInput.value = kategori;
dateInput.value = tanggal;
timeInput.value = waktu;
