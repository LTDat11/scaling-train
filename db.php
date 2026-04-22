<?php
// 1. Cấu hình báo lỗi
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// 2. Các ini_set bảo vệ Session (Phải chạy TRƯỚC session_start)
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_samesite', 'Lax');

// Nếu web của bạn có HTTPS (SSL), hãy bật dòng này:
// ini_set('session.cookie_secure', 1); 

// 3. Khởi tạo Session
session_start();

// 4. Kết nối Database
try {
    $conn = new mysqli(
        "127.0.0.1",
        "root",
        "123456",
        "practice_db"
    );
} catch (mysqli_sql_exception $e) {
    error_log($e->getMessage()); // Ghi lỗi vào file log
    die("Lỗi kết nối cơ sở dữ liệu. Vui lòng thử lại sau.");
}
