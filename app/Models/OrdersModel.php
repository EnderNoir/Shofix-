<?php 

namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'OrderID';
    protected $allowedFields = ['OrderDate', 'ProductID', 'Price', 'Status', 'TotalQuantity'];
}   