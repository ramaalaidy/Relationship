<?php

namespace App\Http\Controllers;
use App\Models\phone;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $phone = phone::find(1);
        return $phone; 
    }
}
