<?php

namespace App\Controllers;
use App\Models\OrdersModel;
use App\Models\ProductModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new ProductModel();
        $ordermodel = new OrdersModel();
        $data['products'] = $model->findAll();
        $data['orders'] = $ordermodel->findAll();
        return view("Home/index", $data);
    }
    public function add($id){
        $productmodel = new ProductModel();
        $ordermodel = new OrdersModel();
        $orderDate = date('Y-m-d H:i:s');
        $price = $productmodel->find($id);
        $data = [
            'OrderDate' => $orderDate,
            'ProductID' => $price['ProductName'],
            'Price' => $price['Price'],
            'Status' => "Pending",
            'TotalQuantity' => 1,
        ];
        // Save to database
        if($ordermodel->save($data)){
            return redirect()->to('/')->with('success', 'Order placed successfully.');
        }else {
            return redirect()->to('/')->with('error', 'Failed to place order.');
        }
    }
    public function show($id)
    {
        $productmodel = new ProductModel();
        $ordermodel = new OrdersModel();
        $order = $ordermodel->find('ProductID');
        $product = $productmodel->find($order);
        return $product;
    }
    public function deliver()
    {
    $ordermodel = new OrdersModel();

    // Data to be updated
    $data = [
        'Status' => "Delivered",
    ];

    // Update the orders where status is 'pending'
    $ordermodel->where('Status', 'Pending')->set($data)->update();

    // Check if the update was successful
    if ($ordermodel->db->affectedRows() > 0) {
        session()->setFlashdata('Update', 'Items Ordered');
    } else {
        session()->setFlashdata('Error', 'No items ');
    }
    return redirect()->to('/');
    }
    public function delete($id)
    {
        $model = new OrdersModel();
        $data = $model->find($id);
        if($model->delete($id)){
            session()->setFlashdata('Update', 'Item Deleted');
        } else {
            session()->setFlashdata('Error', 'No items ');
        }
        return redirect()->to('/');
    }
}