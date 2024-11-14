<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองห้อง</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .form-container {
            width: 700px;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            font-size: 16px;
        }
        .btn-submit:hover {
            background-color: #45a049;
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
    <div class="container mt-5">
        <div class="form-container mx-auto">
            <h2>จองห้องพัก</h2>
            <form method="post" id="stayForm" action="b.room.html">

                <div class="mb-3">
                    <label for="name" class="form-label">ชื่อผู้จอง</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="id_card" class="form-label">เลขบัตรประชาชน</label>
                    <input type="text" class="form-control" id="id_card" name="id_card" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">เบอร์โทร</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="mb-3">
                    <label for="cidate" class="form-label">วันเริ่มต้น (เข้าพัก):</label>
                    <input type="date" id="cidate" name="cidate" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="codate" class="form-label">วันออก:</label>
                    <input type="date" id="codate" name="codate" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="adu" class="form-label">จำนวนผู้ใหญ่</label>
                    <input type="number" id="adu" name="adu" class="form-control" min="1" value="1" required>
                </div>

                <div class="mb-3">
                    <label for="chi" class="form-label">จำนวนเด็ก</label>
                    <input type="number" id="chi" name="chi" class="form-control" min="0" value="0" required>
                </div>

                <button type="submit" class="btn-submit" name="submit">ยืนยันการจอง</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('stayForm').addEventListener('submit', function(event) {
            const cidate = document.getElementById('cidate').value;
            const codate = document.getElementById('codate').value;

            if (new Date(codate) < new Date(cidate)) {
                event.preventDefault();
                alert('วันที่ออกต้องไม่ก่อนวันที่เข้าพัก');
            }
        });
    </script>
</body>
</html>
