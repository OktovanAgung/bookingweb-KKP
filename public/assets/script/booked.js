window.onload = function() {
    var urlParams = new URLSearchParams(window.location.search);
    var layananValue = urlParams.get('layanan');
    var tanggalValue = urlParams.get('tanggal');
    var waktuValue = urlParams.get('waktu');

    document.getElementById('layananValue').textContent = layananValue;
    document.getElementById('tanggalValue').textContent = tanggalValue;
    document.getElementById('waktuValue').textContent = waktuValue;
};