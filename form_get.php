<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form GET</title>
    <style>
        body {
            background: #f0f8ff;
            font-family: Arial, sans-serif;
        }
        .box {
            width: 400px;
            margin: 100px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }
        h2 { text-align: center; color: #2c3e50; }
        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 12px;
        }
        button {
            background: #3498db;
            color: white;
            border: none;
            cursor: pointer;
        }
        .result {
            margin-top: 15px;
            color: #e67e22;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Tìm kiếm (GET)</h2>
    <form method="get">
        <input type="text" name="keyword" placeholder="Nhập từ khóa..." required>
        <button type="submit">Tìm kiếm</button>
    </form>

    <?php
    if (isset($_GET['keyword'])) {
        echo "<div class='result'>Bạn đang tìm kiếm từ khóa: {$_GET['keyword']}</div>";
    }
    ?>
</div>

</body>
</html>
