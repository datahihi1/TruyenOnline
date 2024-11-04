<?php

// Hàm tạo kết nối với cơ sở dữ liệu
function pdo_get_connection() {
    $host = "localhost";
    $dbname = "TruyenOnline";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    return $conn;
}

// Hàm thực thi câu lệnh SQL (dùng cho INSERT, UPDATE, DELETE)
function pdo_execute($sql, ...$args) {
    $conn = pdo_get_connection(); 
    $stmt = $conn->prepare($sql);
    $stmt->execute($args); 
}

// Hàm truy vấn lấy nhiều dòng dữ liệu (dùng cho SELECT nhiều kết quả)
function pdo_fetchAll($sql, ...$args) {
    $conn = pdo_get_connection(); 
    $stmt = $conn->prepare($sql);
    $stmt->execute($args); 
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // Lấy tất cả kết quả dưới dạng mảng
}

// Hàm truy vấn lấy một dòng dữ liệu (dùng cho SELECT một kết quả duy nhất)
function pdo_fetch($sql, ...$args) {
    $conn = pdo_get_connection(); 
    $stmt = $conn->prepare($sql);
    $stmt->execute($args); 
    return $stmt->fetch(PDO::FETCH_ASSOC); 
}

// Hàm truy vấn lấy một giá trị duy nhất (dùng cho SELECT một giá trị cụ thể)
function pdo_fetchValue($sql, ...$args) {
    $conn = pdo_get_connection(); 
    $stmt = $conn->prepare($sql);
    $stmt->execute($args);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    return $row[0]; 
}

