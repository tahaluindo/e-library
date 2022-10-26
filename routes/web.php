<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookOnlineController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
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

//home

Route::middleware('guest')->group(function () {
    Route::get('/', [PageController::class,'index'])->name('index');
    Route::get('/signup', [PageController::class,'signup'])->name('signup');
    Route::post('/signin', [PageController::class, 'login'])->name('signin');
    Route::post('/register', [PageController::class, 'register'])->name('register');
});

Route::get('/logout', [PageController::class, 'logout'])->name('logout');


Route::middleware('auth.admin', 'auth')->group(function () {
    //home
    Route::get('/home', [HomeController::class,'home'])->name('home');

    //genre
    Route::get('/datagenre', [GenreController::class,'index'])->name('add-genre');
    Route::get('/formgenre', [GenreController::class,'formgenre'])->name('form');
    Route::post('/insertgenre',[GenreController::class,'insertgenre'])->name('insertgenre');
    Route::get('/updategenre/{id}',[GenreController::class,'update'])->name('update');
    Route::post('/updategenre/{id}',[GenreController::class,'updateuser'])->name('updategenre');
    Route::get('/deletegenre/{id}',[GenreController::class,'delete'])->name('delete');

    // user/anggota
    Route::get('/datauser', [UsersController::class,'user'])->name('user');
    Route::get('/deleteuser/{id}',[UsersController::class,'deleteUser'])->name('delete');

    //buku
    Route::get('/databuku', [BookController::class,'buku'])->name('buku');
    Route::get('/detailbuku/{id}', [BookController::class,'detailBuku'])->name('DetailBuku');
    Route::get('/formbuku', [BookController::class,'formBuku'])->name('formbuku');
    Route::post('/insertbuku',[BookController::class,'insertBook'])->name('insertBuku');
    Route::get('/updatebuku/{id}',[BookController::class,'editForm'])->name('update');
    Route::post('/updatebuku/{id}',[BookController::class,'updateBook'])->name('updateBuku');
    Route::get('/deletebuku/{id}',[BookController::class,'delete'])->name('delete');

    //online
    Route::get('/buku-online', [BookOnlineController::class, 'index'])->name('Online-Book');
    Route::get('/detailonline/{id}', [BookOnlineController::class,'detailOnline'])->name('Detail-Buku-Online');
    Route::get('/formonline', [BookOnlineController::class,'formBukuOnline'])->name('Form-Buku-Online');
    Route::post('/insertbukuonline',[BookOnlineController::class,'insertBookOnline'])->name('insert-Buku-Online');
    Route::get('/updatebukuonline/{id}',[BookOnlineController::class,'editFormOnline'])->name('Update-Buku-Online');
    Route::post('/updatebukuonline/{id}',[BookOnlineController::class,'updateBookOnline'])->name('Update-Buku');
    Route::get('/deletebukuonline/{id}',[BookOnlineController::class,'deleteOnline'])->name('Delete-Buku');

    // // Transaction
    Route::get('/transaksi',[TransactionController::class,'index'])->name('admin.transaksi');
    Route::get('/form-transaksi',[TransactionController::class,'formTransaksi'])->name('form-transaksi');
    Route::post('/add-transaction',[TransactionController::class,'addTransaction'])->name('insert-transaksi');
    Route::get('/update-transaksi/{id}',[TransactionController::class,'updateTransaksi'])->name('update-transaksi');
    Route::post('/update-transaction/{id}',[TransactionController::class,'updatetransaction'])->name('Update-transaction');
    Route::get('/detail-transaksi/{id}',[TransactionController::class,'detailTransaksi'])->name('detail-transaksi');
    Route::get('/update-status/{id}',[TransactionController::class,'success'])->name('update-status');


});



Route::middleware('auth.user', 'auth')->group(function () {
    //view all
    Route::get('/all-book',[ProductController::class,'viewall'])->name('viewall');
    Route::get('genre/{nama_genre}',[ProductController::class, 'genre'])->name('genre');

    // Home User
    Route::get('/dashboard', [ProductController::class,'index'])->name('dashboard');
    Route::get('/detail', [ProductController::class,'detail'])->name('detail');
    Route::get('/search', [ProductController::class,'index'])->name('search');
    Route::get('/detailbukuuser/{id}', [ProductController::class,'detailBukuUser'])->name('DetailBukuUser');

    // Online Book
    Route::get('/detailbukuonline/{id}', [ProductController::class, 'detailBukuOnline'])->name('Buku-Online');

    // cart
    Route::get('/cart', [ProductController::class, 'viewcart'])->name('Cart');
    Route::get('data-cart', [ProductController::class, 'cart'])->name('getDataCart');
    Route::get('add-data-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add-to-cart');
    Route::delete('remove-from-cart/{id}', [ProductController::class, 'removeFromCart'])->name('remove-from-cart');
    Route::get('remove-from-bigcart/{id}', [ProductController::class, 'removeFromBigCart'])->name('remove-from-bigcart');
    Route::get('cancel-order/{id}', [ProductController::class, 'cancelOrder'])->name('cancel-order');



    // Favorite
    Route::get('/favorite', [FavoriteController::class, 'index'])->name('favorite');
    Route::get('add-data-to-favorite/{id}', [ProductController::class, 'addToCart'])->name('add-to-favorite');
    Route::get('remove-from-favorite/{id}', [ProductController::class, 'removeFromBigCart'])->name('remove-from-favorite');

    // Historry
    Route::get('/history', [TransactionController::class, 'history'])->name('history');

    //
    Route::get('/checkout', [TransactionController::class, 'checkout'])->name('checkout');


});


