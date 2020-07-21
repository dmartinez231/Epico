<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Hash;
use Auth;

class ConnectController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except('getLogout');
    }

    public function getLogin(){
      return view('connect.login');
    }

    public function postLogin(Request $request){
      $rules = [
        'email' => 'required|email',
        'password' => 'required'
      ];
      $messages = [
        'email.required' => 'El email es requerido.',
        'password.required'=>'La contraseña es requerida.'
      ];
      $validator = Validator::make($request->all(),$rules, $messages);
      if ($validator->fails()){
        return back()->withErrors($validator)->with('message','Se ha producido un error');
      }
      else {
        if (Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')],true)) {
          return redirect('/');
        }
        else{
          return back()->with('message','El email o contraseña están mal');
        }
      }
    }

    public function getLogout(){
      Auth::logout();
      return redirect('/login');
    }

    public function getRegister(){
      return view('connect.register');
    }

    public function postRegister(Request $request){
      $rules = [
        'name' => 'required',
        'lastName' => 'required',
        'email' =>'required|email|unique:users,email',
        'password' => 'required|min:8',
        'cpassword' => 'required|min:8|same:password',
        'sale' =>'required'
      ];
      $messages =[
        'name.required' =>'El nombre es requerido.',
        'lastName.required' =>'El apellido es requerido.',
        'email.required'=>'El email es requerido.',
        'email.email'=>'El email no tiene formato de email.',
        'email.unique'=>'El email ya está registrado.',
        'password.required'=>'La contraseña es requerida.',
        'password.min'=>'La contraseña debe tener 8 caracteres.',
        'cpassword.required'=>'La confirmacion de contraseña es requerida.',
        'cpassword.min'=>'La contraseña debe tener 8 caracteres.',
        'cpassword.same'=>'Las contraseñas no coinciden.',
        'sale.required'=>'Debe elegir una opcion si desea recibir ofertas.',
      ];
      $validator = Validator::make($request->all(),$rules, $messages);
      if ($validator->fails()){
        return back()->withErrors($validator)->with('message','Se ha producido un error');
      }
      else {
        $user = new User;
        $user->name = e($request->input('name'));
        $user->lastName = e($request->input('lastName'));
        $user->email = e($request->input('email'));
        $user->password = Hash::make($request->input('password'));
        $user->sale = $request->input('sale');

        if($user->save()){
            return redirect('/login');
        }
      }
    }
}
