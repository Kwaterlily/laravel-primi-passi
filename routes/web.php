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

    return view('home', ['jumbotron' => 'La mia prima pagina con Laravel']);
});

Route::get('/admin', function () {
    return view('admin.home', ['jumbotron' => 'La mia seconda pagina con Laravel']);
});

Route::get('/products', function () {
    $products = [
        'pattini',
        'skateboard',
        'sport acquatici',
        'airtracks',
        'bike',
        'tavole surf',
        'mute',
        'snowboard',
    ];
    return view('products', compact('products'));
});
?>

 