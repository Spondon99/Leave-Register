<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function index($user) {
        $user = \App\Models\User::find($user);
        return view('lr', [
            'user' => $user,
        ]);
    }

    
    public function create($user)
    {
        $user = \App\Models\User::find($user);
        $approvals = \App\Models\Approval::all();

        return view('lr', [
            'user' => $user,
            'approvals' => $approvals,
        ]);
    }

    public function store($user)
    {
        $data = request()->validate([
            'approved' => 'required',
            'apply_id' => 'required',
        ]);

        \App\Models\Approval::create($data);

        $user = \App\Models\User::find($user);
        $approvals = \App\Models\Approval::all();

        return view('lr', [
            'user' => $user,
            'approvals' => $approvals,
        ]);
    }
}
