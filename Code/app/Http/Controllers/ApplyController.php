<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyController extends Controller
{
    // public function index($user) {
    //     $user = \App\Models\User::find($user);
    //     return view('apply', [
    //         'user' => $user,
    //     ]);
    // }

    public function create($user)
    {
        $user = \App\Models\User::find($user);
        return view('applies.create', [
            'user' => $user,
        ]);
    }

    public function store($user)
    {
        $data = request()->validate([
            'leaveType' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'subject' => '',
            'text' => '',
            'incharge' => '',
        ]);

        auth()->user()->applies()->create($data);
        $user = \App\Models\User::find($user);

        return view('apply', [
            'user' => $user,
        ]);
    }
}
