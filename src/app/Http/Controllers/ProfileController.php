<?php

namespace App\Http\Controllers;

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
        return view('profile');
    }

    public function edit(Request $request)
    {  
        $users = users::find($request->id);
        return view('profile', ['user' => $author]);

        return redirect('/mypage');
    }
}