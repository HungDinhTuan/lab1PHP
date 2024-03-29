<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function authLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dasboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function index()
    {
        return view('admin.Login');
    }

    public function showDashboard()
    {
        $this->authLogin();
        return view('admin.Dashboard');
    }

    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('admin_table')->where('admin_email', $admin_email)
                                                ->where('admin_password', $admin_password)
                                                ->first();

        if($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message', 'Failed to sign in. Please! Enter the correct email or password.');
            return Redirect::to('/admin');
        }
    }

    public function logout()
    {
        $this->authLogin();
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
    }
}
