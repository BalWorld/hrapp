<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;
 
class LoginController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
 
    /**
     * Call the view
     */
    public function index()
    {
        return view('login');
    }
 
    
}
