<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Copy;

use Illuminate\Http\Request;

class UserCopyController extends Controller
{
    public function index()
    {
        $users = User::all();
        $copies = Copy::all();
       
        return view('ejemplar.asociar', compact('users', 'copies'));
    }

    public function store(Request $request)
    {
        $user = User::find($request->user_id);
        $user->copies()->attach($request->copy_id);
         
        return 'Registro Exitoso';
    }
}
