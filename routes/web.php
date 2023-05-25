<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/home.index');
});

Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('admin.dashboard.index');
    //, 'verified'
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::view('/about','about/index')->name('aboutus');
Route::view('/home','home/index')->name('homes');
Route::view('/shop','/shop')->name('shop');

Route::view('/menu','menu/index')->name('menus');
Route::view('/store','store/index')->name('stores');
Route::view('/plantilla','plantilla.index')->name('plantilla');
Route::view('/item','item/index')->name('items');
Route::view('/order','order/index')->name('orders');
Route::view('/error','error/index')->name('errors');


// Route::view('/admin','admin.dashboard.index')->name('admin');

/** Revisar si extiende de menu o de items  */
Route::view('/admin/productos','admin.product.index')->name('admin.product');
Route::view('/admin','admin.dashboard.index')->name('admin');
Route::view('/admin/ordenes','admin.order.index')->name('admin.order');
Route::view('/admin/categorias','admin.category.index')->name('admin.category');
Route::view('/admin/tiendas','admin.store.index')->name('admin.store');
Route::view('/admin/usuarios','admin.user.index')->name('admin.user');
Route::view('/admin/medidas','admin.size.index')->name('admin.size');

// Revisar si la routa de arriba correspondientes a productos se modifica tal y como viene en el video
Route::resource('/admin/productos', ProductController::class)->middleware(['auth']);
Route::resource('/admin/tiendas', StoreController::class);
Route::resource('/admin/categorias', CategorieController::class);
Route::resource('/admin/usuarios', UserController::class);
Route::resource('/admin/medidas', SizeController::class);
Route::resource('/admin/ordenes', OrderController::class);

//Rutas carrito
Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');