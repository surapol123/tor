<?php
session_start();

$msg = ''; // ตัวแปรสำหรับแสดงข้อความ

// ตรวจสอบว่าฟอร์มถูกส่งหรือไม่
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // รับข้อมูลที่ผู้ใช้กรอก
    $username = $_POST['username'];
    $password = $_POST['password'];

    // เก็บชื่อผู้ใช้ใน session
    session_regenerate_id(true); // ป้องกันการโจมตีแบบ session fixation
    $_SESSION['username'] = $username; // เก็บชื่อผู้ใช้ใน session

    // เปลี่ยนหน้าไปที่ 'list.php' โดยไม่ต้องตรวจสอบข้อมูล
    header('Location: list.php');
    exit();
}
?>

<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="ta.css">
</head>
<body>

<div class="container fontthai">
    <div class="login-card">
        <h2>เข้าสู่ระบบ</h2>
        
        <!-- แสดงข้อความหากการล็อกอินไม่สำเร็จ -->
        <?php if (!empty($msg)) : ?>
            <h4><?php echo htmlspecialchars($msg); ?></h4>
        <?php endif; ?>

        <!-- ฟอร์มล็อกอิน -->
        <form method="post" action="">
            <div class="mb-3">
                <label for="username" class="form-label">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
            </div>
            <button class="btn-primary" type="submit" name="submit" value="submit">เข้าสู่ระบบ</button>
        </form>
    </div>
</div>


<style>
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
</body>
</html>
