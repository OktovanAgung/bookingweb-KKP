<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style/schedule.css') ?>">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <title>Schedule</title>
</head>

<body>
    <div class="container">
        <div class="left">
            <h3>Nama Toko</h3>
            <p>Alamat Toko</p>
            <button class="button" onclick="toggleSelection('Doktor')">Doktor</button>
            <button class="button" onclick="toggleSelection('Hotel')">Hotel</button>
            <button class="button" onclick="toggleSelection('Grooming')">Grooming</button>
        </div>
        <div class="right">
            <div id="selectedDate"></div>
            <div class="schedule">
                <!-- Schedule content here -->
                <button class="button" onclick="selectTime('10:00')">10:00</button>
                <button class="button" onclick="selectTime('10:15')">10:15</button>
                <button class="button" onclick="selectTime('10:30')">10:30</button>
                <!-- Add more buttons with different time slots -->
            </div>
            <div class="datepicker-container">
                <input type="text" id="datepicker" placeholder="Pilih Tanggal" readonly>
            </div>
        </div>
    </div>

    <div id="result"></div>

    <button id="submitBtn" onclick="showFinalResult()">Tampilkan Hasil</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

    <script>
        var selectedButtons = [];
        var selectedDate = "";
        var selectedTime = "";

        function toggleSelection(buttonName) {
            var index = selectedButtons.indexOf(buttonName);
            if (index === -1) {
                selectedButtons.push(buttonName);
            } else {
                selectedButtons.splice(index, 1);
            }
        }

        function selectTime(time) {
            selectedTime = time;
        }

        function showFinalResult() {
            var output = "";

            if (selectedDate === "") {
                output = "Silahkan pilih tanggal terlebih dahulu.";
            } else if (selectedTime === "") {
                output = "Silahkan pilih waktu kunjungan terlebih dahulu.";
            } else if (selectedButtons.length === 0) {
                output = "Silahkan pilih layanan yang Anda inginkan.";
            } else {
                var selectedButtonCount = selectedButtons.length;
                if (selectedButtonCount === 1) {
                    var selectedButton = selectedButtons[0];
                    if (selectedButton === "Doktor") {
                        output = "Janji temu doktor pada " + selectedDate + ", pukul " + selectedTime;
                    } else if (selectedButton === "Hotel") {
                        output = "Check in hotel pada " + selectedDate + ", pukul " + selectedTime;
                    } else if (selectedButton === "Grooming") {
                        output = "Datang grooming pada " + selectedDate + ", pukul " + selectedTime;
                    }
                } else {
                    var selectedButtonNames = [];
                    for (var i = 0; i < selectedButtonCount; i++) {
                        var buttonName = selectedButtons[i];
                        if (buttonName === "Doktor") {
                            selectedButtonNames.push("janji temu doktor");
                        } else if (buttonName === "Hotel") {
                            selectedButtonNames.push("check in hotel");
                        } else if (buttonName === "Grooming") {
                            selectedButtonNames.push("datang grooming");
                        }
                    }
                    var selectedButtonNamesString = selectedButtonNames.join(", ");
                    output = selectedButtonNamesString + " pada hari " + selectedDate + ", pukul " + selectedTime;
                }
            }

            // Mengirim hasil ke halaman confirmation
            window.location.href = "confirmation?hasil=" + encodeURIComponent(output);
        }

        $(function() {
            $("#datepicker").datepicker({
                dateFormat: "dd/mm/yy",
                onSelect: function(dateText, inst) {
                    selectedDate = dateText;
                    $("#selectedDate").text("Tanggal Terpilih: " + selectedDate);
                }
            });
        });
    </script>
</body>

</html>