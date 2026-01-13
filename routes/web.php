<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BedsController;
use App\Http\Controllers\ChairsController;
use App\Http\Controllers\ChandelierProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientVideoController;
use App\Http\Controllers\DoorsProductController;
use App\Http\Controllers\GatesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RaillingsProductController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\InquiriesController;
use Illuminate\Support\Facades\Auth;
Use App\Models\Chairs;
use App\Models\Table;
use App\Models\Beds;
use App\Models\ChandelierProduct;
use App\Models\DoorsProduct;
use App\Models\Gates;

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
    $chair = Chairs::find('9');
    $table = Table::find('5');
    $Beds = Beds::find('1');
    $Chandelier = ChandelierProduct::find('11');
    $Doors = DoorsProduct::find('1');
    $Gates = Gates::find('12');
    return view('welcome')->with('chair', $chair)->with('table', $table)->with('Beds', $Beds)->with('Chandelier', $Chandelier)->with('Doors', $Doors)->with('Gates', $Gates);
});



Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::get('chairs', [ChairsController::class, 'index'])->name('chairs');
Route::get('tables', [TableController::class,'index'])->name('tables');
Route::get('beds', [BedsController::class, 'index'])->name('beds');
Route::get('home',[HomeController::class,'index'])->name('home');
Route::get('gates',[GatesController::class,'index'])->name('gate');
Route::get('doors', [DoorsProductController::class, 'index'])->name('doors');
Route::get('railings', [RaillingsProductController::class, 'index'])->name('railings');
Route::get('chandelier', [ChandelierProductController::class, 'index'])->name('chandelier');
Route::get('client', [ClientController::class, 'index'])->name('client');
Route::get('client-video', [ClientVideoController::class,'index'])->name('client.video');
Route::post('upload-client-video', [ClientVideoController::class,'store'])->name('client.video.upload');

Route::post('inquire', [InquiriesController::class, 'create'])->name('inquiry');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth']], function(){
    Route::post('add-chair', [ChairsController::class, 'create'])->name('add.chair');
    Route::post('add-table', [TableController::class, 'create'])->name('add.table');
    Route::post('add-beds', [BedsController::class, 'create'])->name('add.bed');
    Route::post('add-gate', [GatesController::class, 'create'])->name('add.gate');
    Route::post('add-doors', [DoorsProductController::class, 'create'])->name('add.doors');
    Route::post('add-rails', [RaillingsProductController::class, 'create'])->name('add.railings');
    Route::post('add-chandelier', [ChandelierProductController::class, 'create'])->name('add.chandelier');
    Route::post('add-client', [ClientController::class, 'create'])->name('add.client');
});