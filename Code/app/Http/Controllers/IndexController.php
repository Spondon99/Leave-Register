<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($user) {
        $user = \App\Models\User::find($user);
        return view('index', [
            'user' => $user,
        ]);
    }

    public function create($user)
    {
        $user = \App\Models\User::find($user);
        return view('index', [
            'user' => $user,
        ]);
    }

    public function store($user)
    {

        $info = new Information();
        $info->phone = request()->input('phone');
        $file = request()->file('profile_pic');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('images/', $filename);
        $info->profile_pic = $filename;
        $info->user_id = $user;
        $info->save();

        $email = request()->input('email');
        \App\Models\User::where('id', $user)->update([
            'email' => $email
        ]);

        // $path = request('profile_pic')->store('images', 'public');

        // auth()->user()->information()->create([
        //     'phone' => $data['phone'],
        //     'profile_pic' => $path,
        // ]);
        $user = \App\Models\User::find($user);

        return view('index', [
            'user' => $user,
        ]);
    }
}
