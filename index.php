<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin Key</title>
    <style>
        body {
            background: #111;
            color: #00ffcc;
            font-family: 'Courier New', monospace;
            text-align: center;
            padding-top: 100px;
        }
        .box {
            background: #222;
            border: 2px solid #00ffcc;
            display: inline-block;
            padding: 30px 50px;
            border-radius: 10px;
        }
        .key {
            font-size: 24px;
            color: #ffeb3b;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Chào mừng bạn đến với hệ thống xác thực</h1>
        <p class="key" id="key">Đang xử lý...</p>
    </div>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const key = urlParams.get('ma');
        const keyElement = document.getElementById('key');
        if (key) {
            keyElement.textContent = `Key của bạn là: ${key}`;
        } else {
            keyElement.textContent = 'Không có key nào được truyền!';
        }
    </script>
</body>
</html>
