<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index(){
        $data = User::where('role_id', 3)->latest()->get();
        return view('admin.pages.seller', compact('data'));
    }
}
