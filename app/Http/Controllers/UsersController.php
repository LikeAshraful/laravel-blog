<?php

namespace App\Http\Controllers;

use App\Role;

use App\User;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.users.index')->with('users', $users);
    }

    public function create()
    {

        $roles = Role::pluck('name', 'id')->all();

        return view('admin.users.create')->with('roles', $roles);
    }

    public function store(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'name' => 'required | max:255',
            'email' => 'required | unique:users',
            'role_id' => 'required',
            'is_active' => 'required',
            'password' => 'required | min:6',

        ]);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->is_active = $request->is_active;

        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('admin.users.index')->with('message', 'Successfully Created User');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::lists('name', 'id')->all();
        return view('admin.users.edit')->with('user', $user)->with('roles', $roles);
    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [

            'name' => 'required | max:255',
            'email' => 'required',
            'role_id' => 'required',
            'is_active' => 'required',

        ]);

        if ($validation->fails()) {

            return redirect()->back()->withInput()->withErrors($validation);
        }

        $user = User::find($id);

        if ($request->password == '') {
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->role_id = $request['role_id'];
            $user->is_active = $request['is_active'];
            $user->password = $user->password;

            $user->save();
        } else {
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->role_id = $request['role_id'];
            $user->is_active = $request['is_active'];
            $user->password = bcrypt($request['password']);

            $user->save();
        }

        return redirect('/admin/users')->with('message', 'Users Successfully Updated!');
    }
}
