<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveTrackerController extends Controller
{
    public function index($user) {
        $user = \App\Models\User::find($user);
        $approvals = \App\Models\Approval::all();

        return view('leaveTracker', [
            'user' => $user,
            'approvals' => $approvals,
        ]);
    }
}
