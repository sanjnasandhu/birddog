<?php 

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
      'name',
      'password',
      'c_password',
      'email',
      'role'
      
    ];
}



https://github.com/PemaRekdenDorjee/ci_admin/blob/master/app/Controllers/Users.php