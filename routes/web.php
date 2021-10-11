<?php

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

Route::get('/', function () {
    return view('main');
});

Route::get('about', function () {
    return view('about', [
        'title' => 'Nama saya adalah I Made Nara Kusuma orang sering memanggil saya Nara, saya lahir pada 14 Juli 2001 di Desa Sukawana, Kecamatan Kintamani, Kabupeten Bangli, saya adalah anak kedua dari 2 bersaudara, dan dulu bersekolah di SMKN 3 KINTAMANI mengambil jurusan multimedia dan saat ini saya melanjutkan ke Undiksha dengan mengambil jurusan Teknik Informatika selain memiliki keahlian di bidang multimedia saya juga memiliki hobi pada bidang olehraga dimana olahraga yang saya sukai adalah pencak silat karena selain melestarikan budaya sendiri melalui pencak silat ini saya dapat menjaga diri dari bahaya, dan saya juga sering mengikuti beberapa kejuaraan seperti porseni bali dan gebernur cap pada tahun 2018'
    ]);
});

Route::get('main', function () {
    return view('main');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('address', function () {
    return view('address');
});
