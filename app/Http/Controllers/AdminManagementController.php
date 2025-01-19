<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->except(['showLoginForm', 'login']);
    }

    public function index()
{
    // Check if the user is authenticated
    if (!auth()->guard('admin')->check()) {
        return redirect()->route('admin.signin');
    }

    return view('admin.index');
}

    public function create()
    {
        return view('admin.admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.admin.index')->with('success', 'Admin created successfully.');
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $id,
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        $admin = Admin::findOrFail($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        if ($request->password) {
            $admin->password = Hash::make($request->password);
        }
        $admin->save();

        return redirect()->route('admin.admin.index')->with('success', 'Admin updated successfully.');
    }

    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect()->route('admin.admin.index')->with('success', 'Admin deleted successfully.');
    }

    public function showLoginForm()
    {
        return view('admin.admin.signin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/admin/index_admin');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->withInput($request->only('email'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.signin');
    }
}
