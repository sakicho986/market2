<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function mypage()
    {
        $user = Auth::user();
        return view('mypage', compact('user'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function edit(Request $request)
    {
        $users = User::find($request->id);
        $users->name = $request->name;
        $users->post = $request->post;
        $users->address = $request->address;
        $users->building = $request->building;
        $users->save();

        return view('profile', ['user' => $users]);

        //        return redirect('/mypage');
    }
}