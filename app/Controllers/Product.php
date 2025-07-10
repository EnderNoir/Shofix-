<?php

// app/Controllers/ProductController.php
namespace App\Controllers;

use App\Models\ProductModel;

class Products extends BaseController {
    public function index() {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('/dmin', $data);
    }
}
