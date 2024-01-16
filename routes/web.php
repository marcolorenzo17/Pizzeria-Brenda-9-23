<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PruebatextojsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\RecogerController;
use App\Http\Controllers\PagardomicilioController;
use App\Http\Controllers\PagarController;
use App\Http\Controllers\CrearpizzaController;
use App\Http\Controllers\ReciboController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WhoareweController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\PremiosController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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
    $products = DB::select('select * from products order by id desc');
    return view('welcome', ['products' => $products]);
})->name('indexAnon');


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
})->name('whoareweAnon');

Route::get('/faqAnon', function() {
    return view('faqAnon');
})->name('faqAnon');

Route::get('/contactAnon', function() {
    return view('contactAnon');
})->name('contactAnon');

Route::get('/privacyAnon', function() {
    return view('privacyAnon');
})->name('privacyAnon');

Route::get('/premiosAnon', function() {
    return view('premiosAnon');
})->name('premiosAnon');

Route::get('/cartaAnon', function() {
    $products = DB::table('products')->get();
    return view('cartaAnon', ['products' => $products]);
})->name('cartaAnon');


Route::resource('products', ProductController::class);
Route::get('indexValoraciones', [ProductController::class, 'indexValoraciones'])->name('products.indexValoraciones');
Route::get('indexComentarios', [ProductController::class, 'indexComentarios'])->name('products.indexComentarios');
Route::get('crearproducto', [ProductController::class, 'crear'])->name('products.crear');
Route::get('editarproducto/{id}', [ProductController::class, 'editar'])->name('products.editar');
Route::post('aniadirproducto', [ProductController::class, 'aniadir'])->name('products.aniadir');
Route::post('actualizarproducto/{id}', [ProductController::class, 'actualizar'])->name('products.actualizar');
Route::post('addValoracion/{id}', [ProductController::class, 'addValoracion'])->name('products.addValoracion');
Route::delete('destroyValoracion/{idProduct}/{idValoracion}', [ProductController::class, 'destroyValoracion'])->name('products.destroyValoracion');
Route::delete('destroyValoracionAdmin/{idValoracion}', [ProductController::class, 'destroyValoracionAdmin'])->name('products.destroyValoracionAdmin');
Route::post('actualizarValoracion/{idProduct}/{idValoracion}', [ProductController::class, 'actualizarValoracion'])->name('products.actualizarValoracion');
Route::post('addComentario/{idProduct}/{idValoracion}', [ProductController::class, 'addComentario'])->name('products.addComentario');
Route::delete('destroyComentario/{idProduct}/{idComentario}', [ProductController::class, 'destroyComentario'])->name('products.destroyComentario');
Route::delete('destroyComentarioAdmin/{idComentario}', [ProductController::class, 'destroyComentarioAdmin'])->name('products.destroyComentarioAdmin');
Route::post('actualizarComentario/{idProduct}/{idComentario}', [ProductController::class, 'actualizarComentario'])->name('products.actualizarComentario');
Route::post('habilitarproducto/{id}', [ProductController::class, 'habilitar'])->name('products.habilitar');
Route::post('deshabilitarproducto/{id}', [ProductController::class, 'deshabilitar'])->name('products.deshabilitar');


Route::resource('promociones', PromotionController::class);


Route::resource('eventos', EventoController::class);
Route::post('addEvento', [EventoController::class, 'add'])->name('eventos.addEvento');
Route::post('eventosi/{id}', [EventoController::class, 'eventosi'])->name('eventos.eventosi');
Route::post('eventono/{id}', [EventoController::class, 'eventono'])->name('eventos.eventono');
Route::post('pagadoevento/{id}', [EventoController::class, 'pagado'])->name('eventos.pagado');
Route::post('nopagadoevento/{id}', [EventoController::class, 'nopagado'])->name('eventos.nopagado');


Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('inmediato', [CartController::class, 'inmediato'])->name('cart.inmediato');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('add', [CartController::class, 'addData'])->name('cart.add');

Route::get('/recoger', RecogerController::class)->name('recoger.index');

Route::get('/pagardomicilio', PagardomicilioController::class);

Route::get('/pagar', PagarController::class);

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

/*
Route::get('/home', HomeController::class)->name('home');

Route::post('single-charge', [HomeController::class, 'singleCharge'])->name('single.charge');
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


Route::get('/whoarewe', WhoareweController::class)->name('whoarewe');


Route::get('/contact', ContactController::class)->name('contact');


Route::get('/faq', FaqController::class)->name('faq');


Route::get('/privacy', PrivacyController::class)->name('privacy');


Route::get('/premios', PremiosController::class)->name('premios');


// Route::get('/pruebatextojs', PruebatextojsController::class);


Route::get('/clientes', UserController::class)->name('clientes.index');
Route::delete('/borrarcliente/{id}', [UserController::class, 'destroy'])->name('clientes.destroy');
Route::post('adminsicliente/{id}', [UserController::class, 'adminsi'])->name('clientes.adminsi');
Route::post('adminnocliente/{id}', [UserController::class, 'adminno'])->name('clientes.adminno');
Route::post('validarcliente/{id}', [UserController::class, 'validar'])->name('clientes.validar');
Route::post('desvalidarcliente/{id}', [UserController::class, 'desvalidar'])->name('clientes.desvalidar');
Route::post('/validacion', [UserController::class, 'validacion'])->name('clientes.validacion');
Route::post('actualizarrol/{id}', [UserController::class, 'actualizarrol'])->name('clientes.actualizarrol');
Route::post('actualizarpuntos/{id}', [UserController::class, 'actualizarpuntos'])->name('clientes.actualizarpuntos');

Route::get('/recibos', ReciboController::class)->name('recibos.index');
Route::get('/todosRecibos', [ReciboController::class, 'todosRecibos'])->name('recibos.todosRecibos');
Route::get('/recibosAdmin', [ReciboController::class, 'recibosIndexAdmin'])->name('recibos.index.admin');
Route::get('/todosRecibosAdmin', [ReciboController::class, 'todosRecibosAdmin'])->name('recibos.todosRecibos.admin');
Route::delete('/borrarrecibo/{id}', [ReciboController::class, 'destroy'])->name('recibos.destroy');
Route::post('actualizarrecibo/{id}', [ReciboController::class, 'actualizar'])->name('recibos.actualizar');
Route::post('pagadorecibo/{id}', [ReciboController::class, 'pagado'])->name('recibos.pagado');
Route::post('nopagadorecibo/{id}', [ReciboController::class, 'nopagado'])->name('recibos.nopagado');


Route::get('/curriculum', CurriculumController::class)->name('curriculum.index');
Route::post('addCurriculum', [CurriculumController::class, 'add'])->name('curriculum.addCurriculum');
Route::delete('borrarCurriculum/{id}', [CurriculumController::class, 'destroy'])->name('curriculum.destroy');

Route::get('/rolesIndex', CurriculumController::class)->name('roles.index');

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/factura/{id}', [ReciboController::class, 'factura'])->name('recibos.factura');
/*
Route::get('/generate-pdf', function () {
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('welcomeAntiguo');
    return $pdf->stream();
});
*/

require __DIR__.'/auth.php';
