<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public $data = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->data['menu'] = 'profile';
        $this->data['user'] =  Auth::guard('admin')->user();
        $this->middleware('admin');
    }

    public function edit($id)
    {
        return view('admin.profile.profile',$this->data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id.',id,deleted_at,NULL',
        ]);

        $record = Admin::findOrFail($id);
        $record->update($request->all());
        $val =  route('admin.profile.edit',$id);
        return redirect($val);

    }
    public function changepassword(Request $request)
    {
        $id = $this->data['user']['id'];
        $record = Admin::findOrFail($id);
        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
            'cpassword' => 'required',
        ]);

        $request['password'] = bcrypt($request['password']);

        $record->update($request->all());
        $val =  route('admin.profile.edit',$id);
        return redirect($val);
    }
}
