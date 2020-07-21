<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use IsAdmin;
use App\User;

class UsersController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
    $this->middleware('isadmin');
  }
  public function getUsers(){
    $data=User::orderby('id','desc')->get();
    $users=['users'=> $data];
    return view('admin.users.users',$users);
  }
}
