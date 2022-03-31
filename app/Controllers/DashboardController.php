<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;

  
class DashboardController extends Controller
{
    public function index()
    {
        $session = session();
      // echo "Hey User : ".$session->get('name');
       echo view('templates/header');
       echo view('templates/sidebar');
       return view('dashboard');
       echo view('templates/footer');
        
    }

}