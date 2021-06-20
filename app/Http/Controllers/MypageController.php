<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class MypageController extends Controller
{
    public function show()
    {
        return view('mypage');
    }
}
    
   