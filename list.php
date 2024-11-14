<!doctype html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองห้องพัก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f5;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2em;
            color: #4CAF50;
            text-align: center;
            margin-bottom: 20px;
        }

        .room-map {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            margin-top: 20px;
        }

        .room {
            width: 100%;
            height: 100px;
            border: 2px solid #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: bold;
            color: #555;
            border-radius: 5px;
            background-color: #f8f9fa;
        }

        .room:hover {
            border-color: #4CAF50;
            background-color: #e8f5e9;
            color: #333;
        }

        .room.selected {
            background-color: #4CAF50;
            color: white;
            border-color: #4CAF50;
        }

        .summary-box {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .table-container {
            margin-top: 30px;
        }

        .table {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
        }

        .table thead th {
            background-color: #4CAF50;
            color: white;
            text-align: center;
        }

        .table td, .table th {
            text-align: center;
            vertical-align: middle;
        }

        .icon {
            width: 24px;
            height: 24px;
            cursor: pointer;
        }
       
        /* Basic Styling */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url("tree.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #333;
        }
        
    </style>
</head>

<body>

<div class="container">
    <h1>เลือกห้องพัก</h1>

    <!-- แผนผังห้องพัก -->
    <div class="room-map">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="room" onclick="selectRoom(this)">A<?php echo $i; ?></div>
        <?php endfor; ?>
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="room" onclick="selectRoom(this)">B<?php echo $i; ?></div>
        <?php endfor; ?>
    </div>

    <!-- สรุปการเลือกห้อง -->
    <div class="summary-box">
        <p>จำนวนห้องทั้งหมด: <span id="totalRooms">10</span> ห้อง</p>
        <p>จำนวนห้องที่เลือก: <span id="selectedRooms">0</span> ห้อง</p>
    </div>
</div>

<!-- Confirm Delete Script -->
<script>
    let totalRooms = 10;
    let selectedRooms = 0;

    function selectRoom(room) {
        if (room.classList.contains('unavailable')) return;
        room.classList.toggle('selected');
        updateRoomCount();
    }

    function updateRoomCount() {
        selectedRooms = document.querySelectorAll('.room.selected').length;
        document.getElementById('totalRooms').textContent = totalRooms;
        document.getElementById('selectedRooms').textContent = selectedRooms;
    }

    function checkDelete() {
        return confirm('ยืนยันการลบข้อมูลข่าว?');
    }
</script>

<!-- ตารางแสดงข้อมูล -->
<div class="table-container container">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">ห้อง</th>
                <th scope="col">วันและเวลา</th>
                <th scope="col">ดูเพิ่มเติม</th>
                <th scope="col">ลบ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // ข้อมูลตัวอย่าง (ไม่ต้องใช้ฐานข้อมูล)
            $sample_data = [
                ['id' => 1, 'header' => 'ข่าว A', 'room' => 'A1', 'time' => '2024-11-14 10:00:00'],
                ['id' => 2, 'header' => 'ข่าว B', 'room' => 'A2', 'time' => '2024-11-15 12:00:00'],
                ['id' => 3, 'header' => 'ข่าว C', 'room' => 'B1', 'time' => '2024-11-16 14:00:00']
            ];

            foreach ($sample_data as $row) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['header']; ?></td>
                    <td><?php echo $row['room']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td>
                       
                            <class="icon" alt="Edit">
                        </a>
                    </td>
                    <td>
                        
                            <class="icon" alt="Delete">
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- เรียกใช้ Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6/uj5Yzg6L1gqO41K/r5Ou1rI65QJYwxLkpFMrM3gk3i6qbdVV1" crossorigin="anonymous"></script>
</body>

</html>
