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
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
       
        <p>ที่อยู่: 123 ถนนตัวอย่าง แขวงตัวอย่าง เขตตัวอย่าง กรุงเทพมหานคร 10200</p>
        <p>โทร: 02-123-4567</p>
    </div>

    <!-- ข้อมูลการจอง -->
    <table class="table table-bordered receipt-table">
        <tr>
            <td><strong>ลำดับการจอง:</strong></td>
            <td>00123</td>
        </tr>
        <tr>
            <td><strong>ชื่อผู้จอง:</strong></td>
            <td>นายสมชาย ตัวอย่าง</td>
        </tr>
        <tr>
            <td><strong>ห้องพัก:</strong></td>
            <td>Deluxe Room</td>
        </tr>
        <tr>
            <td><strong>วันที่และเวลา:</strong></td>
            <td>วันที่เข้าพัก: 15 พฤศจิกายน 2024, วันที่ออก: 17 พฤศจิกายน 2024</td>
        </tr>
    </table>

    <!-- ส่วนของการชำระเงิน -->
    <div class="receipt-footer">
        <p><strong>จำนวนเงิน:</strong> ฿7,000</p>
        <p><strong>ภาษีมูลค่าเพิ่ม (7%):</strong> ฿490</p>
        <p><strong>รวมทั้งหมด:</strong> ฿7,490</p>
    </div>

    <!-- ปุ่มพิมพ์ใบเสร็จ -->
    <div class="text-center">
        <button class="btn btn-primary btn-print" onclick="window.print()">พิมพ์ใบเสร็จ</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6/uj5Yzg6L1gqO41K/r5Ou1rI65QJYwxLkpFMrM3gk3i6qbdVV1" crossorigin="anonymous"></script>
</body>

</html>
