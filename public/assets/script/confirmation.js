function batal() {
    window.location.href = "calender"; // Ubah menjadi halaman "calender.html" atau sesuaikan dengan halaman tujuan Anda
}

window.onload = function() {
    var urlParams = new URLSearchParams(window.location.search);
    var hasil = urlParams.get('hasil');
    var resultElement = document.getElementById('result');
    resultElement.textContent = hasil;
};