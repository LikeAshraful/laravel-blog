<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Role;

class UsersController extends Controller
{
    public function index(){
        $users = User::paginate(5);
        return view('admin.users.index')->with('users', $users);
    }
}
