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

    // Mengambil nilai input nama, namaPet, dan whatsapp
    var namaValue = document.getElementById('nama').value;
    var namaPetValue = document.getElementById('nama_pet').value;
    var whatsappValue = document.getElementById('no_whatsapp').value;

    // Validasi
    var namaError = document.getElementById('namaError');
    var namaPetError = document.getElementById('namaPetError');
    var whatsappError = document.getElementById('whatsappError');

    namaError.textContent = '';
    namaPetError.textContent = '';
    whatsappError.textContent = '';

    if (namaValue === '') {
        namaError.textContent = 'Nama Anda harus diisi';
        return;
    }

    if (namaPetValue === '') {
        namaPetError.textContent = 'Nama Hewan Peliharaan harus diisi';
        return;
    }

    if (whatsappValue === '') {
        whatsappError.textContent = 'Nomor Whatsapp harus diisi';
        return;
    }

    // Melakukan submit formulir
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


