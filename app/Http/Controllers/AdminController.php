<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct(){
    	$this->middleware('admin');
    }

    public function index(){
        $data['user'] =  Auth::guard('admin')->user();
        $data['menu'] = 'dashboard';
    	return view('admin.dashboard',$data);
    }
}
