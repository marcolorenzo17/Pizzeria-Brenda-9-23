<?php

use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\RecogerController;
use App\Http\Controllers\PagardomicilioController;
use App\Http\Controllers\PagarController;
use App\Http\Controllers\CrearpizzaController;
use App\Http\Controllers\ReciboController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WhoareweController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Factura;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});


Route::get('/pizzasAnon', function() {
    $products = DB::table('products')->where('type', '=', 'Pizza')->get();
    return view('productsAnon', ['products' => $products]);
});

Route::get('/burgersAnon', function() {
    $products = DB::table('products')->where('type', '=', 'Hamburguesa')->get();
    return view('productsAnon', ['products' => $products]);
});

Route::get('/sandwichAnon', function() {
    $products = DB::table('products')->where('type', '=', 'Sándwich')->get();
    return view('productsAnon', ['products' => $products]);
});

Route::get('/pastasAnon', function() {
    $products = DB::table('products')->where('type', '=', 'Pasta')->get();
    return view('productsAnon', ['products' => $products]);
});

Route::get('/arrocesAnon', function() {
    $products = DB::table('products')->where('type', '=', 'Arroz')->get();
    return view('productsAnon', ['products' => $products]);
});

Route::get('/baguettesAnon', function() {
    $products = DB::table('products')->where('type', '=', 'Baguette')->get();
    return view('productsAnon', ['products' => $products]);
});

Route::get('/ensaladasAnon', function() {
    $products = DB::table('products')->where('type', '=', 'Ensalada')->get();
    return view('productsAnon', ['products' => $products]);
});

Route::get('/complementosAnon', function() {
    $products = DB::table('products')->where('type', '=', 'Complemento')->get();
    return view('productsAnon', ['products' => $products]);
});

Route::get('/perritosAnon', function() {
    $products = DB::table('products')->where('type', '=', 'Perrito')->get();
    return view('productsAnon', ['products' => $products]);
});

Route::get('/cervezasAnon', function() {
    $products = DB::table('products')->where('type', '=', 'Cerveza')->get();
    return view('productsAnon', ['products' => $products]);
});

Route::get('/vinosAnon', function() {
    $products = DB::table('products')->where('type', '=', 'Vino')->get();
    return view('productsAnon', ['products' => $products]);
});

Route::get('/refrescosAnon', function() {
    $products = DB::table('products')->where('type', '=', 'Refresco')->get();
    return view('productsAnon', ['products' => $products]);
});

Route::get('/whoareweAnon', function() {
    return view('whoareweAnon');
});

Route::get('/faqAnon', function() {
    return view('faqAnon');
});

Route::get('/contactAnon', function() {
    return view('contactAnon');
});


Route::resource('products', ProductController::class);
Route::get('crearproducto', [ProductController::class, 'crear'])->name('products.crear');
Route::get('editarproducto/{id}', [ProductController::class, 'editar'])->name('products.editar');
Route::post('aniadirproducto', [ProductController::class, 'aniadir'])->name('products.aniadir');
Route::post('actualizarproducto/{id}', [ProductController::class, 'actualizar'])->name('products.actualizar');
Route::post('addValoracion/{id}', [ProductController::class, 'addValoracion'])->name('products.addValoracion');
Route::post('addComentario/{idProduct}/{idValoracion}', [ProductController::class, 'addComentario'])->name('products.addComentario');
Route::post('habilitarproducto/{id}', [ProductController::class, 'habilitar'])->name('products.habilitar');
Route::post('deshabilitarproducto/{id}', [ProductController::class, 'deshabilitar'])->name('products.deshabilitar');


Route::resource('promociones', PromocionController::class);


Route::resource('eventos', EventoController::class);
Route::post('addEvento', [EventoController::class, 'add'])->name('eventos.addEvento');


Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('add', [CartController::class, 'addData'])->name('cart.add');

Route::get('/recoger', RecogerController::class);

Route::get('/pagardomicilio', PagardomicilioController::class);

Route::get('/pagar', PagarController::class);

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/*
Route::controller(IndexController::class)->group(function(){
    Route::get('/index', 'index');
    Route::get('/index/create', 'create');
    Route::get('/index/{plato}', 'show');
});
*/

Route::get('crearpizza', [CrearpizzaController::class, 'index'])->name('crearpizza');
Route::delete('/borraringrediente/{id}', [CrearpizzaController::class, 'destroy'])->name('crearpizza.destroy');
Route::get('crearingrediente', [CrearpizzaController::class, 'crear'])->name('crearpizza.crear');
Route::get('editaringrediente/{id}', [CrearpizzaController::class, 'editar'])->name('crearpizza.editar');
Route::post('aniadiringrediente', [CrearpizzaController::class, 'aniadir'])->name('crearpizza.aniadir');
Route::post('actualizaringrediente/{id}', [CrearpizzaController::class, 'actualizar'])->name('crearpizza.actualizar');
Route::post('habilitaringrediente/{id}', [CrearpizzaController::class, 'habilitar'])->name('crearpizza.habilitar');
Route::post('deshabilitaringrediente/{id}', [CrearpizzaController::class, 'deshabilitar'])->name('crearpizza.deshabilitar');


Route::get('/whoarewe', WhoareweController::class);


Route::get('/contact', ContactController::class);


Route::get('/faq', FaqController::class);


Route::get('/recibos', ReciboController::class)->name('recibos.index');
Route::delete('/borrarrecibo/{id}', [ReciboController::class, 'destroy'])->name('recibos.destroy');


Route::get('/curriculum', CurriculumController::class);
Route::post('addCurriculum', [CurriculumController::class, 'add'])->name('curriculum.addCurriculum');

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});

require __DIR__.'/auth.php';
