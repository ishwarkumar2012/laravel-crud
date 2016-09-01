<?php

namespace App\Http\Controllers;

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

        return view('users.list');
    }

}
