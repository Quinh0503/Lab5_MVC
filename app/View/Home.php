<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ MVC</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        .container { max-width: 600px; margin: auto; border: 1px solid #ddd; padding: 20px; border-radius: 8px; }
        h1 { color: #2c3e50; }
        .info { background: #f9f9f9; padding: 10px; border-left: 5px solid #3498db; }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $message; ?></h1>
        <div class="info">
            <p><strong>Thông tin từ Model:</strong> <?php echo $studentInfo; ?></p>
        </div>
        <p><em>Đây là nội dung được hiển thị từ file View.</em></p>
    </div>
</body>
</html>