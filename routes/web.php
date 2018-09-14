<?php

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

Route::get('/', function () {
    // 'uses' => 'HomeController@index',
    // 'as' => 'home',
    return view('welcome');
}
);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'],
    function () 
    {
        Route::get('/', ['uses' => 'AdminDashController@index', 'as' => 'admin.index']);
        Route::resource('anggota', 'AnggotaController');
        Route::resource('kelompok', 'KelompokController');
        Route::resource('wilayah', 'WilayahController');
        Route::resource('fasesapi', 'FaseSapiController');
        Route::resource('tipesapi', 'TipeSapiController');
        Route::resource('users', 'UsersController');
        Route::group(['prefix' => 'populasi'], function () {
            Route::get('anggota/{x}', ['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@anggota', 'as' => 'admin-populasi.anggota']);
            Route::get('kelompok/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@kelompok', 'as' => 'admin-populasi.kelompok']);
            Route::get('wilayah/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@wilayah', 'as' => 'admin-populasi.wilayah']);
            Route::get('jeniskel/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@jeniskel', 'as' => 'admin-populasi.jeniskel']);
            Route::get('tipe/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@tipe', 'as' => 'admin-populasi.tipe']);
            Route::get('fase/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@fase', 'as' => 'admin-populasi.fase']);
        });
    }
);

Route::group(['prefix' => 'ketua', 'namespace' => 'Ketua'],
    function () 
    {
        Route::get('/', 'KetuaDashController@index')->name('ketua.index');
        Route::group(['prefix' => 'populasi'], function () {
            Route::get('anggota/{x}', ['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@anggota', 'as' => 'ketua-populasi.anggota']);
            Route::get('kelompok/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@kelompok', 'as' => 'ketua-populasi.kelompok']);
            Route::get('wilayah/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@wilayah', 'as' => 'ketua-populasi.wilayah']);
            Route::get('jeniskel/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@jeniskel', 'as' => 'ketua-populasi.jeniskel']);
            Route::get('tipe/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@tipe', 'as' => 'ketua-populasi.tipe']);
            Route::get('fase/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@fase', 'as' => 'ketua-populasi.fase']);
        });
    }
);

Route::group(['prefix' => 'koordinator', 'namespace' => 'Koordinator'],
    function () 
    {
        Route::get('/', 'KoordinatorDashController@index')->name('koordinator.index');
        Route::group(['prefix' => 'populasi'], function () {
            Route::get('anggota/{x}', ['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@anggota', 'as' => 'koordinator-populasi.anggota']);
            Route::get('kelompok/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@kelompok', 'as' => 'koordinator-populasi.kelompok']);
            Route::get('wilayah/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@wilayah', 'as' => 'koordinator-populasi.wilayah']);
            Route::get('jeniskel/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@jeniskel', 'as' => 'koordinator-populasi.jeniskel']);
            Route::get('tipe/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@tipe', 'as' => 'koordinator-populasi.tipe']);
            Route::get('fase/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@fase', 'as' => 'koordinator-populasi.fase']);
        });
    }
);

Route::group(['prefix' => 'pengurus', 'namespace' => 'Pengurus'],
    function () 
    {
        Route::get('/', 'PengurusDashController@index')->name('pengurus.index');
        Route::group(['prefix' => 'populasi'], function () {
            Route::get('anggota/{x}', ['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@anggota', 'as' => 'pengurus-populasi.anggota']);
            Route::get('kelompok/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@kelompok', 'as' => 'pengurus-populasi.kelompok']);
            Route::get('wilayah/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@wilayah', 'as' => 'pengurus-populasi.wilayah']);
            Route::get('jeniskel/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@jeniskel', 'as' => 'pengurus-populasi.jeniskel']);
            Route::get('tipe/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@tipe', 'as' => 'pengurus-populasi.tipe']);
            Route::get('fase/{x}',['uses' => '\Populasi\Http\Controllers\Populasi\PopulasiController@fase', 'as' => 'pengurus-populasi.fase']);
        });
    }
);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
