<?php 

namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;


class RouteFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
   
    { 
        if (!session()->get('isSignedIn'))
        {
            return redirect()
                ->to('index/login');
        }
    //    else if (session()->get('isSignedIn'))
    //       {

    //            if (session()->get('role') == "admin") {
    //              //return redirect()->to(base_url('dashboard'));
    //               // return redirect()->to('dashboard');
    //                echo view('dashboard');
    //            }

    //            if (session()->get('role') == "user") {
    //               //return redirect()->to(base_url('dashboard'));
    //               // return redirect()->to('dashboard');
    //               echo view('dashboard');
    //            }
    //      }

    }     
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}