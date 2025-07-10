<?php

namespace App\Controllers;
use App\Models\ProductModel;

class Admin extends BaseController
{
    public function index(): string
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view("Admin/index.php", $data);
    }
    public function login(): string
    {
        return view("Admin/login.php");
    }
    public function add()
    {
        return view('Admin/add.php');
    }
    public function Create()
    {
        
        // Load the model
        $Model = new ProductModel();
        $imageName = '';
        $file = $this->request->getFile('img');
        if($file->isValid() && ! $file->hasMoved()){
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }
        $data = [
            'ProductName' => $this->request->getPost('ProductName'),
            'Description' => $this->request->getPost('Description'),
            'Category' => $this->request->getPost('Category'),
            'Price' => $this->request->getPost('Price'),
            'StockQuantity' => $this->request->getPost('StockQuantity'),
            'Image'         => $imageName,
        ];
        // Save to database
        if($Model->save($data)){
            return redirect()->to('/dmin')->with('status', 'Product added successfully');
        } else {
            return redirect()->back()->with('status', 'Failed to add product');
        }
    }
    public function edit($id)
    {
        $model = new ProductModel();
        $data['products'] = $model->find($id);
        return view('/Admin/edit', $data);
    }

    public function update($id)
    {
        // Load the model
        $imageName = '';
        $Model = new ProductModel();
        $model_item = $Model->find($id);
        $old_img_name = $model_item['Image'];
        $file = $this->request->getFile('img');
        if($file->isValid() && ! $file->hasMoved())
        {
            if(file_exists('uploads/'.$old_img_name))
            {
                unlink("uploads/".$old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
            }else{
            $imageName = $old_img_name;
            }
        // Get form data
        $data = [
            'ProductName'   => $this->request->getPost('ProductName'),
            'Description'   => $this->request->getPost('Description'),
            'Category'      => $this->request->getPost('Category'),
            'Price'         => $this->request->getPost('Price'),
            'StockQuantity' => $this->request->getPost('StockQuantity'),
            "Image"         => $imageName
        ];
        
        if($Model->update($id, $data)){
            return redirect()->to('/dmin')->with('status', 'Updated successfully');
        } else {
            return redirect()->back()->with('status', 'Failed to Update');
        }
    }

    public function delete($id)
    {
        $model = new ProductModel();
        $data = $model->find($id);
        $imagefile = $data['Image'];
        if(file_exists('uploads'.$imagefile)){
            unlink("uploads/".$imagefile);
        }
        $model->delete($id);
        return redirect()->to('/dmin');
    }
}
