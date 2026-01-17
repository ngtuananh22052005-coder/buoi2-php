<?php
require_once "db_connect.php";
$stmt = $conn->query("SELECT * FROM students");
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Danh sách sinh viên</title>
<style>
    body { font-family: Arial; background: #eef2f3; }
    table {
        width: 80%;
        margin: 60px auto;
        border-collapse: collapse;
        background: white;
    }
    th {
        background: #34495e;
        color: white;
    }
    th, td {
        padding: 12px;
        border: 1px solid #ccc;
        text-align: center;
    }
    a {
        color: #e74c3c;
        text-decoration: none;
    }
</style>
</head>
<body>

<table>
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Mã SV</th>
        <th>Email</th>
        <th>Hành động</th>
    </tr>

    <?php foreach ($students as $stu): ?>
    <tr>
        <td><?= $stu['id'] ?></td>
        <td><?= $stu['fullname'] ?></td>
        <td><?= $stu['student_code'] ?></td>
        <td><?= $stu['email'] ?></td>
        <td>
            <a href="#">Sửa</a> | <a href="#">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
