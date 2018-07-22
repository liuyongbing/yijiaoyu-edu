<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\AccountsRepository;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
     |--------------------------------------------------------------------------
     | Login Controller
     |--------------------------------------------------------------------------
     |
     | This controller handles authenticating users for the application and
     | redirecting them to your home screen. The controller uses a trait
     | to conveniently provide its functionality to your applications.
     |
     */
    
    use AuthenticatesUsers;
    
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        
        parent::__construct();
        $this->init();
    }
    
    public function init()
    {
        $this->repository = new AccountsRepository();
    }
    
    /**
     * 登录 View
     */
    public function form()
    {
        return view('login.form');
    }
    
    /**
     * 登录 POST
     * @param Request $request
     */
    public function auth(Request $request)
    {
        $response = ['status' => 'success'];
        
        $data = $request->input('Login');
        $data = [
            'username' => $data['mobile'],
            'code' => $data['code'],
            'mac_token' => $data['mac_token'],
        ];
        $result = $this->repository->login($data);
        
        if(!empty($result['id']) && !empty($result['account']))
        {
            $request->session()->put('id', $result['id']);
            $request->session()->put('account', $result['account']);
            $request->session()->put('brand_id', $result['brand_id']);
        }
        else
        {
            $response = $result;
        }
        return $response;
    }
    
    /**
     * 注销
     * @param Request $request
     */
    public function logout(Request $request)
    {
        $request->session()->flush();
        
        return redirect('login');
    }
}
