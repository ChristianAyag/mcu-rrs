<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function store(Request $request){
        $validate = $request->validate([
            'adminFname' => 'required|string|max:255',
            'adminLname'=> 'required|string|max:255',
            'adminEmail'=> 'required|email|unique:admin',
        ]);
    }
}
