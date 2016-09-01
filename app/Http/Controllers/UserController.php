<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    function index()
    {
        return view('users.form');

    }

    function users()
    {
        $users = User::all();
        return view('users.list');
    }

}
