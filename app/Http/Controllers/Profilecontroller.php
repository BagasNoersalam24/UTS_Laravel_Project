<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $data=
        [
            "id" => Auth('sanctum')->user()->id,
            "name" => Auth('sanctum')->user()->name,
            "email" => Auth('sanctum')->user()->email
        ];
        return view('profile', compact('data'));
    }
}
