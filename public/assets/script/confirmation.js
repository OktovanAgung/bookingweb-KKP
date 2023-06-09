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
