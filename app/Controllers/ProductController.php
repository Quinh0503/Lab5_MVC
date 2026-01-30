<?php
namespace App\Controllers;
use App\Models\Product;

class ProductController {
    public function index() {
        // 1. Lấy dữ liệu từ Model
        $productModel = new Product();
        $products = $productModel->getAllProducts();

        // 2. Truyền dữ liệu sang View
        // Lưu ý: Sử dụng đường dẫn dựa trên cấu trúc folder app/View bạn đang có
        include __DIR__ . '/../View/product_list.php';
    }
}