<?php

// app/Controllers/ProductController.php
namespace App\Controllers;

use App\Models\OrdersModel;

class Orders extends BaseController {
    public function index() {
        $model = new OrdersModel();
        $data['orders'] = $model->findAll();
        return view('/', $data);
    }
}