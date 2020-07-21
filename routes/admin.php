<?php

Route::prefix('/admin')->group(function(){
  Route::get('/','Admin\DashboardController@getAdmin');
  //Usuarios//
  Route::get('/users','Admin\UsersController@getUsers');
  //Productos//
  Route::get('/products','Admin\ProductsController@getProducts');
  //Agregar Productos//
  Route::get('/product/add','Admin\ProductsController@addProduct');
});
?>
