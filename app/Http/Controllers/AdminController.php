<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(Request $request){
            $admins = Admin::all();

        if ($request->wantsJson()) {
        return response()->json([
            'status' => 'success',
            'count' => $admins->count(),
            'data' => $admins
        ]);
        }

        return view('superadmin.permission-control', compact(('admins')));
    }

public function store(Request $request)
{
    $validate = $request->validate([
        'adminFname' => 'required|string|max:255',
        'adminMI' => 'nullable|string|max:4',
        'adminLname'=> 'required|string|max:255',
        'adminEmail'=> 'required|email|unique:tbl_admin,adminEmail',
        'adminPassword' => [
            'required',
            'string',
            'min:8',
            'confirmed',
        ],
        'adminAccess'=> 'required',
    ]);

    $admin = new Admin();
    $admin->adminID = $this->generateCustomID($validate['adminAccess']);
    $admin->adminFname = $validate['adminFname'];
    $admin->adminMI = $validate['adminMI'];
    $admin->adminLname = $validate['adminLname'];
    $admin->adminEmail = $validate['adminEmail'];
    $admin->adminPassword = Hash::make($validate['adminPassword']);
    $admin->adminAccess = $validate['adminAccess'];
    $admin->save();

    Storage::makeDirectory('users/' . $admin->adminID);

    if ($request->wantsJson()) {
        return response()->json([
            'status'  => 'success',
            'message' => 'New user added successfully.',
            'data'    => $admin
        ], 201);
    }

    return redirect()->route('permission-control')
                     ->with('success', 'New user added successfully.');
}

    private function generateCustomID(string $adminAccess): string
    {
        $prefixMap = [
            'reviewer' => 'r',
            'iacucadmin' => 'i',
            'erbadmin' => 'e',
            'superadmin' => 's',
        ];

        $prefix = $prefixMap[$adminAccess] ?? 'x';

        $latest = Admin::where('adminAccess', $adminAccess)
            ->where('adminID','like',$prefix . '%')
            ->orderByDesc('adminID')
            ->first();
        
        if(!$latest){
            return $prefix . '000001';
        }

        $number = (int) substr($latest->adminID, 1);
        $next = $number + 1;

        return $prefix . str_pad($next, 6, '0', STR_PAD_LEFT);
    }
}
