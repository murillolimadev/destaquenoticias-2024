<?php

use App\Http\Controllers\Admin\ParceirosController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Home\ContatoController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CategoriaClassificadosController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\ClassificadoController;
use App\Http\Controllers\DenunciaController;
use App\Http\Controllers\DepoimentoController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ParceiroController;
use App\Http\Controllers\InformativoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicidadeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Home\RifaController;
use App\Models\Noticia;
use Illuminate\Support\Facades\Route;

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
// home
Route::get('/', [HomeController::class, 'index'])->name('home.pages.index');
Route::post('newsletter/', [HomeController::class, 'newsletter'])->name('home.newsletter');
Route::get('contatos/', [ContatoController::class, 'index'])->name('home.pages.contatos.index');
Route::post('contatos/store', [HomeController::class, 'store'])->name('home.pages.contatos.store');
//noticias
Route::get('categoria/{slug}', [NoticiaController::class, 'index'])->name('home.pages.noticias.index');
Route::get('view/{slug}', [HomeController::class, 'view'])->name('home.pages.noticias.view');
Route::get('noticias/{slug}', [HomeController::class, 'noticias'])->name('home.pages.noticias.index');

Route::post('pagamento/', [HomeController::class, 'pagamento'])->name('home.pages.pagamento.store');
Route::get('pagamento/qrcode/', [HomeController::class, 'qrcode'])->name('home.pages.pagamento.qrcode');

// classificados
Route::get('classificados/', [HomeController::class, 'classificados'])->name('home.pages.classificados.index');
Route::get('classificados/{slug}', [ClassificadoController::class, 'show'])->name('home.pages.show');

//categoria/cidades
Route::get('cidade/{slug}', [CidadeController::class, 'index'])->name('home.pages.cidade.index');

//denuncia
Route::get('denuncia/', [DenunciaController::class, 'create'])->name('home.pages.denuncia.create');
Route::post('denuncia/store', [DenunciaController::class, 'store'])->name('home.pages.denuncia.store');

//app
Route::get('app/', [AppController::class, 'index'])->name('home.pages.app.index');

//assinatura
Route::post('assinatura/store', [DenunciaController::class, 'pagamento'])->name('home.pages.pagamento.store');

//cadastro
Route::get('cadastro/', [CadastroController::class, 'index'])->name('home.pages.cadastro.index');

//registro payment
Route::post('register/user/', [RegisterController::class, 'store'])->name('home.pages.register.store');

//login
Route::get('login/', [HomeController::class, 'login'])->name('home.pages.login.index');

//privacy
Route::get('privacy/', [HomeController::class, 'privacy'])->name('home.pages.privacy.index');

//sobre
Route::get('sobre/', [HomeController::class, 'sobre'])->name('home.pages.sobre.index');

//pesquisar
Route::post('pesquisar/', [HomeController::class, 'search'])->name('home.pages.search.index');

//rifas
Route::get('parceiros/rifas/', [RifaController::class, 'index'])->name('home.pages.rifas.index');
Route::get('parceiros/rifas/{id}', [RifaController::class, 'show'])->name('home.pages.rifas.show');
Route::post('rifa/store', [RifaController::class, 'store'])->name('home.pages.rifas.store');




Route::get('/dashboard', function () {
    $totalnews = Noticia::all();
    return view('admin.pages.index',  compact('totalnews'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // categorias
    Route::get('/admin/categorias', [CategoriaController::class, 'index'])->name('admin.pages.categoria.index');
    Route::get('/admin/categorias/create', [CategoriaController::class, 'create'])->name('admin.pages.categoria.create');
    Route::post('/admin/categorias/store', [CategoriaController::class, 'store'])->name('admin.pages.categoria.store');
    Route::get('admin/categorias/edit/{id}', [CategoriaController::class, 'edit'])->name('admin.pages.categorias.edit')->middleware(['auth']);;
    Route::post('/admin/categoria/update', [CategoriaController::class, 'update'])->name('admin.pages.categoria.update');
    Route::get('admin/categoria/delete/{id}', [CategoriaController::class, 'destroy'])->name('admin.pages.categoria.destroy')->middleware(['auth']);

    // informativo
    Route::get('/admin/info', [InformativoController::class, 'index'])->name('admin.pages.info.index');
    Route::post('/admin/info/update', [InformativoController::class, 'update'])->name('admin.pages.info.update');

    //noticias
    Route::get('/admin/noticias', [NoticiaController::class, 'index'])->name('admin.pages.noticias.index');
    Route::get('/admin/noticias/create', [NoticiaController::class, 'create'])->name('admin.pages.noticias.create');
    Route::post('/admin/noticias/store', [NoticiaController::class, 'store'])->name('admin.pages.noticias.store');
    Route::get('admin/noticias/edit/{id}', [NoticiaController::class, 'edit'])->name('admin.pages.noticias.edit')->middleware(['auth']);;
    Route::post('/admin/noticias/update', [NoticiaController::class, 'update'])->name('admin.pages.noticias.update');
    Route::get('admin/noticias/delete/{id}', [NoticiaController::class, 'destroy'])->name('admin.pages.noticias.destroy')->middleware(['auth']);;

    //publicidade
    Route::get('/admin/publicidade', [PublicidadeController::class, 'index'])->name('admin.pages.publicidade.index');
    Route::get('/admin/publicidade/create', [PublicidadeController::class, 'create'])->name('admin.pages.publicidade.create');
    Route::get('admin/publicidade/edit/{id}', [PublicidadeController::class, 'edit'])->name('admin.pages.publicidade.edit');
    Route::post('/admin/publicidade/store', [PublicidadeController::class, 'store'])->name('admin.pages.publicidade.store');
    Route::post('/admin/publicidade/update', [PublicidadeController::class, 'update'])->name('admin.pages.publicidade.update');
    Route::get('admin/publicidade/delete/{id}', [PublicidadeController::class, 'destroy'])->name('admin.pages.publicidade.destroy');

    // users
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //depoimentos
    Route::get('/admin/depoimento', [DepoimentoController::class, 'index'])->name('admin.pages.depoimento.index');
    Route::get('/admin/depoimento/create', [DepoimentoController::class, 'create'])->name('admin.pages.depoimento.create');
    Route::post('/admin/depoimento/store', [DepoimentoController::class, 'store'])->name('admin.pages.depoimento.store');
    Route::get('admin/depoimento/delete/{id}', [DepoimentoController::class, 'destroy'])->name('admin.pages.depoimento.destroy');

    //denuncias
    Route::get('/admin/denuncia', [DenunciaController::class, 'index'])->name('admin.pages.denuncia.index');
    //classificados
    Route::get('/admin/classificados', [ClassificadoController::class, 'index'])->name('admin.pages.classificados.index');

    //categorias classificados admin
    Route::get('/admin/classificados/categorias', [CategoriaClassificadosController::class, 'index'])->name('admin.pages.classificados.categoria.index');
    Route::post('/admin/classificados/categorias/store', [CategoriaClassificadosController::class, 'store'])->name('admin.pages.classificados.categoria.store');
    Route::delete('/admin/classificados/destroy/{id}', [CategoriaClassificadosController::class, 'destroy'])->name('admin.pages.classificados.categoria.destroy');

    //classificados cliente
    Route::get('admin/classificado', [ClassificadoController::class, 'index'])->name('admin.pages.cliente.classificado.index');
    Route::get('admin/classificado/create', [ClassificadoController::class, 'create'])->name('admin.pages.cliente.classificado.create');
    Route::post('admin/classificado/store', [ClassificadoController::class, 'store'])->name('admin.pages.classificado.store');
    Route::delete('admin/classificado/destroy{id}', [ClassificadoController::class, 'destroy'])->name('admin.pages.classificado.destroy');

    //classificados imagens cliente
    Route::get('admin/classificado/fotos/{id}', [ClassificadoController::class, 'index'])->name('admin.pages.foto.create');
    Route::post('admin/classificado/fotos/store', [ClassificadoController::class, 'store'])->name('admin.pages.foto.store');

    //rifa
    Route::get('admin/rifas', [RifaController::class, 'index'])->name('admin.pages.rifa.index');
    Route::post('admin/rifa/store', [RifaController::class, 'store'])->name('admin.pages.rifa.store');

    //parceiro
    Route::get('admin/parceiros', [ParceirosController::class, 'index'])->name('admin.pages.parceiros.index');
    Route::post('admin/parceiro/destroy', [ParceirosController::class, 'destroy'])->name('admin.pages.parceiros.destroy')->middleware(['auth']);;
});


require __DIR__ . '/auth.php';
