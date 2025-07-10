<?php 

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'ProductID';
    protected $allowedFields = ['ProductName', 'Description', 'Price', 'Category', 'StockQuantity','Image'];
}   