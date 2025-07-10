<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'UserId';
    protected $allowedFields = ['Username', 'Password', 'Email', 'FirstName', 'lastname'];
}