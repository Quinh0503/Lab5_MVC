<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:hover { background-color: #f5f5f5; }
    </style>
</head>
<body>
    <h1>Danh sách sản phẩm từ Database</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên học sinh</th>
                <th>Mã sinh viên</th>
                <th>Email</th>
                <th>Mật khẩu</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $item): ?>
            <tr>
                <td><?= $item['ID'] ?></td>
                <td><?= $item['Fullname'] ?></td>
                <td><?= $item['Student_code'] ?></td>
                <td><?= $item['Email'] ?></td>
                <td><?= $item['Password'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>