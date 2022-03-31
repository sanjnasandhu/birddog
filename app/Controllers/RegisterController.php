<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;

use App\Models\UserModel;

  
class RegisterController extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('templates/header');
        echo view('user_register', $data);
        echo view('templates/footer');
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]'
            // 'password'      => 'required|min_length[4]|max_length[50]',
            // 'c_password'  => 'matches[password]'
    
        ];
          
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'), 
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'c_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'email'    => $this->request->getVar('email')
                
                
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('user_register', $data);
        }
          
    }
  
}