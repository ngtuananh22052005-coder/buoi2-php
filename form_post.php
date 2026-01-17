<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form POST</title>
    <style>
        body {
            background: linear-gradient(120deg, #84fab0, #8fd3f4);
            font-family: Arial;
        }
        .box {
            width: 420px;
            margin: 100px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
        }
        h2 { text-align: center; }
        input, button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
        }
        button {
            background: #2ecc71;
            border: none;
            color: white;
            font-weight: bold;
        }
        .msg {
            margin-top: 15px;
            text-align: center;
            color: #27ae60;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Đăng ký</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Tên của bạn" required>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <button type="submit">Đăng ký</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<div class='msg'>Đã nhận thông tin của <b>{$_POST['name']}</b></div>";
    }
    ?>
</div>

</body>
</html>
