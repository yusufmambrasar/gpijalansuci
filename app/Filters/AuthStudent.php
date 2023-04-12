<?php namespace App\Filters;
 
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
 
class AuthStudent implements FilterInterface
{
    
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('logged_in')){
            return redirect()->to('/account/logout'); 
        }
        if(session()->get('auth_id')<>1){
            return redirect()->to('/account'); 
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }

}