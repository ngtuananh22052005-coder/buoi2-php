<?php
require_once "db_connect.php";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $code = $_POST['student_code'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (fullname, student_code, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$fullname, $code, $email]);

    $message = "Thêm sinh viên thành công!";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Thêm sinh viên</title>
<style>
    body { background: #fafafa; font-family: Arial; }
    .box {
        width: 450px;
        margin: 80px auto;
        background: white;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 10px #ccc;
    }
    input, button {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
    }
    button {
        background: #9b59b6;
        color: white;
        border: none;
    }
    .success {
        margin-top: 15px;
        color: green;
        text-align: center;
    }
</style>
</head>
<body>

<div class="box">
    <h2>Thêm sinh viên</h2>
    <form method="post">
        <input type="text" name="fullname" placeholder="Họ tên" required>
        <input type="text" name="student_code" placeholder="Mã sinh viên" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Thêm mới</button>
    </form>

    <?php if ($message) echo "<div class='success'>$message</div>"; ?>
</div>

</body>
</html>
