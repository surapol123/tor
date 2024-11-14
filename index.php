<?php
session_start();
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ยินดีต้อนรับสู่โรงแรมของเรา</title>
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

        /* Welcome Container */
        .welcome-container {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.85);
            border-radius: 15px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.15);
            max-width: 400px;
            width: 90%;
        }

        /* Settings Icon */
        .settings {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 50px;
            height: auto;
        }

        /* Text Styling */
        h1 {
            color: #0077b6;
            margin-bottom: 10px;
        }
        h2 {
            color: #023e8a;
            margin-bottom: 15px;
        }
        p {
            color: #555;
            font-size: 1rem;
            line-height: 1.5;
        }

        /* Booking Button */
        .booking-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 25px;
            background-color: #00b4d8;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .booking-button:hover {
            background-color: #0096c7;
        }
    </style>
</head>
<body>
    <a href="login.php" target="_blank" rel="noopener noreferrer">
        <img src="ff.webp" alt="เข้าหน้า admin" class="settings">
    </a>
    <main class="welcome-container">
        <h1>ยินดีต้อนรับสู่โรงแรมของเรา</h1>
        <h2>กระบี่ สายลม Hotel</h2>
        <p>ขอบคุณที่เข้ามาใช้บริการของเรา กรุณาคลิกที่ปุ่มด้านล่างเพื่อเริ่มการจองห้องพักของคุณ</p>
        <a href="add.php" class="booking-button" target="_blank" rel="noopener noreferrer">เริ่มจองห้อง</a>
    </main>
</body>
</html>
