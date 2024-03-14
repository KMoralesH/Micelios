<?php

use App\Http\Controllers\CategoryController;
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

Route::controller(ProductController::class)->group(function () {
    Route::get('productos', 'index');
});

//grupo de rutas para categorias
Route::controller(CategoryController::class)->group(function () {
    Route::get('categorias', 'index');
    Route::get('categoria/{id}', 'show');
    Route::post('categoria/store/{id}', 'store');
    Route::patch('');
    Route::delete('');
});

//GO TO
// Crear una ruta que muestre los productos por categoria usando Eloquent

Route::get('producto-categoria/{id}', function (Request $request) {
    $categoria_id = $request->id;
    return Product::find($categoria_id);
});

Route::get('categoria-productos', function (Request $request) {
    $categoria = new Category();
    $productos = $categoria->product->get();

    dd($productos);

    return $productos;
});
