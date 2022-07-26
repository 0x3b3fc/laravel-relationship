<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
//        $user = User::find(2);
//        return $user->roles;
        $role = Role::find(2);
        return $role->users;
    }
}
