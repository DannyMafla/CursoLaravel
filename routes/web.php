<?php

use App\products;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
	$products = DB::table('products')->where('status', 'A' )->get();
	dd($products);
	return view('index');
	
});
Route::get('/', function () {
	$products1 = DB::table('products')->where('status', 'I' )->get();
	dd($products1);
	return view('index');
});
*/
Route::get('/Productos', function()
{
	//Activos
	$products = DB::table('products')->where('status', 'A' )->get();
	//Inactivos Menores a 100
	$products1 = DB::table('products')
	->where([
	['status','=','I'],
	['price','<=',100],])
	->get();
	//Inactivos de mayor a menor
	$products2 = DB::table('products')
	->where('status','=','I')
	->orderBy('price', 'desc')
	->get();
	//return view('products', array('productsA'=> $products,'products1'=> $products1,'products2'=> $products2  ));
	return view('products', ['products'=> $products,'products1'=> $products1,'products2'=> $products2]);
});
