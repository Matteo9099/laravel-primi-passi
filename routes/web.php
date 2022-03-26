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

    $data = [
        'title' => "Hello World!",
        'paragraph' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam obcaecati exercitationem inventore perferendis! Cum deserunt corporis excepturi! Laboriosam, laudantium pariatur. Veritatis eaque vero distinctio pariatur molestiae illum impedit quidem officiis.",
        'name' => 'Matteo',
        'lastname' => 'Morganti',
        'links' => ['Home', 'Team', 'Progetti']
    ];

    return view('home', $data);
});

Route::get('/team', function () {

    $data = [
        'name' => ['Matteo', 'Mario', 'Elisa'],
        'lastname' => ['Morganti', 'Rossi', "Verdi"],
        'paragraph' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam obcaecati exercitationem inventore perferendis! Cum deserunt corporis excepturi! Laboriosam, laudantium pariatur. Veritatis eaque vero distinctio pariatur molestiae illum impedit quidem officiis.",
        'links' => ['Home', 'Team', 'Progetti']
    ];

    return view('team', $data);
});
