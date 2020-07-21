<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use IsAdmin;

class DashboardController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
      $this->middleware('isadmin');
    }
    public function getAdmin(){
      return view('admin.dashboard');
    }
}
