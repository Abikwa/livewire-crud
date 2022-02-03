<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Plancomptables\PlanComptable;
use App\Http\Livewire\Products\Product;
use App\Http\Livewire\EquilibreComptables\EquilibreComptable;

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
    return view('home/index');
});

Route::get('plancomptables', PlanComptable::class);
Route::get('products', Product::class);
Route::get('equilibrecomptables', EquilibreComptable::class);
