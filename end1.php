<?php
include "include/conn.php";  // เชื่อมต่อกับฐานข้อมูล

// ตรวจสอบว่าได้ส่งค่า 'id' จากการจองมาหรือไม่
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // ดึงข้อมูลการจองตาม 'id' ที่ส่งมา
    $sql = "SELECT * FROM hotel WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        die("ไม่พบข้อมูลการจองที่ต้องการ");
    }
} else {
    die("ไม่พบรหัสการจอง");
}
?>

<!doctype html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบเสร็จการจองห้องพัก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 800px;
            margin-top: 20px;
        }

        .receipt-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .receipt-table td {
            padding: 8px 12px;
        }

        .receipt-footer {
            margin-top: 20px;
            text-align: right;
        }

        .btn-print {
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="receipt-header">
        <h1>ใบเสร็จการจองห้องพัก</h1>
        <p>โรงแรมของเรา</p>
        <p>ที่อยู่: [กรุณากรอกที่อยู่ของโรงแรม]</p>
        <p>โทร: [กรุณากรอกหมายเลขโทรศัพท์]</p>
    </div>

    <!-- ข้อมูลการจอง -->
    <table class="table table-bordered receipt-table">
        <tr>
            <td><strong>ลำดับการจอง:</strong></td>
            <td><?php echo $row['id']; ?></td>
        </tr>
        <tr>
            <td><strong>ชื่อผู้จอง:</strong></td>
            <td><?php echo $row['header']; ?></td>
        </tr>
        <tr>
            <td><strong>ห้องพัก:</strong></td>
            <td><?php echo $row['room']; ?></td>
        </tr>
        <tr>
            <td><strong>วันที่และเวลา:</strong></td>
            <td><?php echo $row['time']; ?></td>
        </tr>
    </table>

    <!-- ส่วนของการชำระเงิน (ถ้ามี) -->
    <div class="receipt-footer">
        <p><strong>จำนวนเงิน:</strong> [กรุณากรอกจำนวนเงิน]</p>
        <p><strong>ภาษี:</strong> [กรุณากรอกภาษี]</p>
        <p><strong>รวมทั้งหมด:</strong> [กรุณากรอกจำนวนเงินรวม]</p>
    </div>

    <!-- ปุ่มพิมพ์ใบเสร็จ -->
    <div class="text-center">
        <button class="btn btn-primary btn-print" onclick="window.print()">พิมพ์ใบเสร็จ</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6/uj5Yzg6L1gqO41K/r5Ou1rI65QJYwxLkpFMrM3gk3i6qbdVV1" crossorigin="anonymous"></script>
</body>

</html>
