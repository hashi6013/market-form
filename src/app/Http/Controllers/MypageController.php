<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function mypageIndex()
    {
        return view('user.mypage');
    }

    public function update()
    {
        return view('user.profile');
    }
}
