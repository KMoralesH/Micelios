<?php

use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use OpenApi\Annotations\Get;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('productos', [ProductController::class, 'index']);

Route::get('categories', function () {
    return Category::all();
});

//GO TO
// Crear una ruta que muestre los productos por categoria usando Eloquent

Route::get('producto-categoria/{id}', function(Request $request){

    $categoria = $request->id;

    $producto = new Product();
    return $producto->where('category_id', '=', $categoria)->get();
});

Route::get('categoria-productos', function(Request $request){
    $categoria = new Category();
    $productos = $categoria->product->get();

    dd($productos);

    return $productos;
});

