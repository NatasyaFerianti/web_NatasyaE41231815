<?php

// ----------------------------Acara 3-------------------------------//

// mengimport kelas route dari laravel
use Illuminate\Support\Facades\Route;
//Route untuk menampilkan halaman utama
Route::get('/', function () {
    return view('welcome');
});
// Route yang mengembalikan teks
Route::get('foo', function () {
    return ('Hello World');
});
// Route dengan parameter {id}, untuk mengembalikan 'User {id}'
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});

// Route menuju metode index di UserController
Route::get('/user', 'UserController@index');

// Route dengan berbagai metode http dalam routing laravel
//Route::get($uri, $callback);
//Route::post($uri, $callback);
//Route::put($uri, $callback);
//Route::patch($uri, $callback);
//Route::delete($uri, $callback);
//Route::options($uri, $callback);

// Route::match(['get', 'post'], '/', function () {
//     //
// });

Route::any('/', function () {
    //
});

// Regedit otomatis
Route::redirect('/coba', '/sini');
// Route untuk menampilkan halaman utama
Route::get('/', function() {
    return view('profile', [// mengembalikan view dengan data nama dan nim
        'nama' => 'Natasya',
        'nim' => 'e41231815'
    ]);
});
// Route dengan menampilkan parameter optional 
Route::get('user1/{name?}', function ($name = null) {
    return $name? "Hallo, $name!" : "Hallo"; 
});
// Route dengan menampilkan parameter opsional, dan ada nilai default 'natasya'
Route::get('user2/{name?}', function ($name = 'natasya') {
    return $name? "Hallo, $name!" : "Hallo Natasya";
});
//Route dengan paramater wajib 'name', harus huruf
Route::get('user3/{name?', function ($name) {
    return "selamat, $name!";
})->where('nama', '[A-Za-z]+');
//Route dengan parameter 'id' berupa angka
Route::get('user4/{id}', function ($id) {
    return "User ID: $id";
})->where('id', '[0-9]+');
//Route dengan parameter 'name' harus huruf kecil, 'id' harus angka
Route::get('user5/{id}/{name}', function ($id, $name) {
    return "User ID: $id, Name: $name";
})->where(['id'=>'[0-9]+','name' => '[a-z]+']);
//Route dengan parameter 'search' menerima semua jenis karakter
Route::get('search/{search}', function ($search) {
    return $search;
})->where('search', '.*');  // menerima semua yang diinputkan


//-------------------------------------Acara 4------------------------------------------//
use App\Http\Controllers\Controller;

Route::get('user/profile', function () {
   return "Ini halaman user!";
})->name('profile.user');

// Route::get('user/profile'['ProfileController@show'])->name('profile');

// Route::get('/redirect-profile', function() {
//     return redirect()->route('profile', ['id' =>1, 'photos'=>'yes']);
// });
Route::middleware(['check.user'])->group(function() {
    Route::get('/profileLogin', ['UserController::class', 'profile'])->name('profile');
});
Route::namespace('App\Http\Controller\User')->group(function() {
    Route::get('/user/info', 'UserController@info')->name('user.info');
});
Route::domain('{account}.example.com')->group(function() {
    Route::get('/', function($account) {
        return "ini halaman akun : ".$account;
    });
});
Route::prefix('pengguna')->group(function() {
    Route::get('/dashboard', function() {
        return "ini halaman dashboard pengguna";
    });
});
// Route::name('pre')->prefix('cobalagi')->group(function (
//     Route::get('/dashboard', function () {
//         return "ini halaman dashboard prefix name";
//     });
// ));

Route::get('admin', 'ManagementUserController@index');

//Home
Route::get("/home", function() {
    return view('home');
});

