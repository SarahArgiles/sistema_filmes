<?php
use App\Http\Controllers\FilmesController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('iniciar');
})->name('index');

Route::get('/filmes', [FilmesController::class, 'index'])->name('filmes');

Route::get('/filmes/cadastrar', [FilmesController::class, 'cadastrar'])->name('filmes.cadastrar');

Route::post('/filmes/cadastrar',[FilmesController::class, 'gravar'])->name('filmes.gravar');

Route::get('/filmes/apagar/{filme}', [FilmesController::class, 'apagar'])->name('filmes.apagar');

Route::delete('/filmes/apagar/{filme}', [FilmesController::class, 'deletar']);

Route::get('/filmes/editar/{filme}', [FilmesController::class, 'editar'])-> name('filmes.editar');

Route::put('/filmes/editar/{filme}', [FilmesController::class, 'editarGravar']);

Route::prefix('usuarios')->middleware('auth')->group(function() {
    Route::get('/', [UsuariosController::class, 'index'])->name('usuarios');

    
    
    Route::get('/apagar/{usuario}', [UsuariosController::class, 'remove'])->name('usuarios.apagar');

    Route::get('/editar/{usuario}', [FilmesController::class, 'editar'])-> name('usuarios.editar');

    Route::put('/editar/{usuario}', [FilmesController::class, 'editarGravar']);
});

Route::get('/cadastrar', [UsuariosController::class, 'create'])->name('usuarios.cadastrar');
    
Route::post('/cadastrar', [UsuariosController::class, 'insert'])->name('usuarios.gravar');

Route::get('/login', [UsuariosController::class, 'login'])->name('login');

Route::post('/login', [UsuariosController::class, 'login']);

Route::get('logout', [UsuariosController::class, 'logout'])->name('logout');

