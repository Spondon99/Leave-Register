<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index($user) {
        $user = \App\Models\User::find($user);
        return view('admin', [
            'user' => $user,
        ]);
    }
}
