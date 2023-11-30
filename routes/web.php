<?php

// use App\Http\Controllers\BlogController;
// use App\Http\Controllers\DosenController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


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


// Route::get('/blog', [BlogController::class, 'beranda']);
// Route::get('/blog/tentang', [BlogController::class, 'tentang']);

// Route::get('/home', [DosenController::class, 'home']);
// Route::post('/welcome', [DosenController::class, 'welcome']);

Route::get('/', [HomeController::class, 'utama']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/welcome', [AuthController::class, 'welcome']);

Route::get('/master',function(){
    return view('layout.master');
}
);

Route::get('/table',function(){
    return view('halaman.table');
}
);

Route::get('/data-tables',function(){
    return view('halaman.data-tables');
});

Route::middleware(['auth'])->group(function () {
    //CRUD CAST

//CREATE
//menampilkan form untuk membuat data pemain film baru
Route::get('/cast/create', [CastController::class, 'create']);
// menyimpan data baru ke tabel Cast
Route::post('/cast', [CastController::class, 'store']);

// READ
//menampilkan list data para pemain film (boleh menggunakan table html atau bootstrap card)
Route::get('/cast', [CastController::class, 'index']);
// menampilkan detail data pemain film dengan id tertentu
Route::get('/cast/{cast_id}', [CastController::class, 'show']);

// UPDATE
// menampilkan form untuk edit pemain film dengan id tertentu
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
// menyimpan perubahan data pemain film (update) untuk id tertentu
Route::put('/cast/{cast_id}', [CastController::class, 'update']);

// DELETE
// menghapus data pemain film dengan id tertentu
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});



//CRUD Cast
Route::resource('post', CastController::class,);

Auth::routes();