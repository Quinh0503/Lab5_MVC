<?php
namespace App\Models;
use PDO;

class Product extends BaseModel {
    public function getAllProducts() {
        $sql = "SELECT * FROM students"; // Đảm bảo bảng này đã tồn tại trong DB
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}