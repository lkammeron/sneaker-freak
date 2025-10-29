<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::withCount('sneakers')->get();
         return view('admin-dashboard', compact('users'));
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('admin-dashboard.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|unique:sneakers|max:255',
            'email' => 'required',
        ]);
        $user->update($validated);
        return redirect()->route('dashboard');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->destroy($id);
    }
}
