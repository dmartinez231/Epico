<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use IsAdmin;

class ProductsController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
    $this->middleware('isadmin');
  }

  public function getProducts(){
    return view('admin.products.products');
  }

  public function addProduct(){
    return view('admin.products.addProduct');
  }
}
