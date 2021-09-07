<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

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

    public function updatePerfil(StoreUserRequest $request, $id){
        $user = User::find($id);
        if (
            $user->name == $request->input('nome') &&
            $user->email == $request->input('email')){
                return redirect()->back()->with('msg', 'Nenhum campo alterado!!');
            }
        $user->name = $request->input('nome');
        $user->email = $request->input('email'); 
        $user->save();
        return redirect()->back()->with('msg', 'Informações Alteradas com Sucesso!!');
    }

    public function update(StoreUserRequest $request, $id)
    {
        $user = Auth::user();
 
        $this->validate($request, [
 
        'current_password' => 'required',
        'password' => 'required',
        ]);
 
 
       $hashedPassword = $user->password;
 
       if (Hash::check($request->current_password , $hashedPassword )) {
           if (!Hash::check($request->password , $hashedPassword)) {
               if($request->input('password') == $request->input('password-confirm')){
                    $user = User::find($user->id);
                    $user->password = bcrypt($request->password);
                    User::where( 'id' , $user->id)->update( array( 'password' =>  $user->password));
                    session()->flash('msg','Informações alteradas com sucesso!');
                    return redirect()->back();
                }else{
                    session()->flash('msg','As senhas não conferem!');
                    return redirect()->back();
                }
            }else{
                session()->flash('msg','A nova senha não pode ser igual a sua atual!');
                return redirect()->back();
            }
        }else{
            session()->flash('msg','Senha Atual inválida');
            return redirect()->back();
        }
    } 
}
