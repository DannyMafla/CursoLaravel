<?php

use App\Products;
use Illuminate\Support\Facades\DB;

Route::get('/Producto', function()
{
	dd('Hola')
	$productos = Products::hasActive()->get();
	return view('pages.products', compact('productos'));
});
