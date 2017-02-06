<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    public $data = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->data['menu'] = 'users_list';
        $this->data['user'] =  Auth::guard('admin')->user();
        $this->middleware('admin');
    }
    public function index()
    {
        return view('admin.user.index',$this->data);
    }

    public function getUsers()
    {
        $orders = User::select(['id', 'name', 'email', 'created_at']);
        return Datatables::of($orders)
            ->addColumn('action', function ($user) {
                return '<a href="'. route('admin.user.edit',$user->id) .'"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a href="javascript:;" id="'.$user->id.'" class="red delete_btn"><i class="fa fa-trash text-red"></i></a>';
            })
            ->editColumn('created_at', '{{ date("d-m-Y",strtotime($created_at)) }}')
            ->make(true);
    }

    public function create()
    {
        return view('admin.user.create',$this->data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $request['password'] =bcrypt($request['password']);
        $record  = new User($request->all());
        $record->save();

        return redirect('admin/user');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $this->data['record'] = User::findOrFail($id);
        return view('admin.user.create',$this->data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id.',id,deleted_at,NULL',
            'password' => 'required|min:6',
        ]);

        $request['password'] =bcrypt($request['password']);


        $record = User::findOrFail($id);
        $record->update($request->all());
        return redirect('admin/user');

    }

    public function destroy($id)
    {
        $record = User::findOrFail($id);
        $record->delete();
    }
}
