<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <style>
        .container {
            display: flex;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .left {
            flex: 1;
            padding-right: 10px;
        }

        .center {
            flex: 1;
            padding: 0 10px;
        }

        .right {
            flex: 1;
            padding-left: 10px;
        }

        .calendar {
            border: 1px solid #ccc;
            padding: 10px;
        }

        .schedule {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
            height: 200px;
            overflow-y: scroll;
        }

        .button {
            display: block;
            width: 100%;
            margin-bottom: 5px;
            padding: 5px;
            text-align: left;
        }

        .button:hover {
            background-color: lightgray;
            cursor: pointer;
        }

        #selectedDate {
            margin-top: 10px;
            font-weight: bold;
        }

        #result {
            margin-top: 20px;
        }

        #submitBtn {
            margin-top: 20px;
        }
    </style>
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
        <div class="center">
            <div class="calendar">
                <!-- Calendar content here -->
                <input type="date" id="datepicker" onchange="selectDate()">
            </div>
        </div>
        <div class="right">
            <div id="selectedDate"></div>
            <div class="schedule">
                <!-- Schedule content here -->
                <button class="button" onclick="selectTime('10:00')">10:00</button>
                <button class="button" onclick="selectTime('10:15')">10:15</button>
                <button class="button" onclick="selectTime('10:30')">10:30</button>
                <button class="button" onclick="selectTime('10:45')">10:45</button>
                <button class="button" onclick="selectTime('11:00')">11:00</button>
                <button class="button" onclick="selectTime('11:15')">11:15</button>
                <button class="button" onclick="selectTime('11:30')">11:30</button>
                <button class="button" onclick="selectTime('11:45')">11:45</button>
                <button class="button" onclick="selectTime('12:00')">12:00</button>
                <!-- Add more buttons with different time slots -->
            </div>
        </div>
    </div>

    <div id="result"></div>

    <button id="submitBtn" onclick="showFinalResult()">Tampilkan Hasil</button>

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

        function selectDate() {
            selectedDate = document.getElementById("datepicker").value;
            var selectedDay = new Date(selectedDate).toLocaleDateString('en-US', {
                weekday: 'long'
            });
            document.getElementById("selectedDate").textContent = "Tanggal yang Dipilih: " + selectedDate + " (" + selectedDay + ")";
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

            document.getElementById("result").textContent = output;
        }
    </script>
</body>

</html>