<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $user = Auth::user();
        return view('profile.show')->with('user', $user);
    }

    public function update(StoreUserRequest $request)
    {
        $user = Auth::user();

        if(
            $user->name==$request->input('nome') &&
            $user->email==$request->input('email') 
        ){
            return redirect()->back()->with('msg', 'Nenhum campo alterado!!');
        }else{
            $user->name = $request->input('nome');
            $user->email = $request->input('email');
            $user->save();
            return redirect()->back()->with('msg', 'Informações Atualizadas!!');
        }
    }
}
