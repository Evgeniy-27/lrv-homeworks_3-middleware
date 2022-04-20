<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $value = User::all();
        return view('user', [
            'name' => $value[0]['name'],
            'email' => $value[0]['email'],
            'id' => $value[0]['id'],
        ]);
    }
}
