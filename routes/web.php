<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SomeController;

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

Route::get('/', [SomeController::class, "home"]);
Route::get("/lib/{chapter}", [SomeController::class, "lib1"])
    ->whereIn('chapter',['character', 'inventory']);
Route::get("/lib/{table}", [SomeController::class, "lib2"])
    ->whereIn('table',['bestiary']);
Route::get("/lib/workshop", [SomeController::class, "lib3"]);
Route::get("/lib/character/{table}", [SomeController::class, "lib2"])
    ->whereIn('table',['nation','class', 'race','traits','class_feature','history']);
Route::get("/lib/inventory/{table}", [SomeController::class, "lib2"])
    ->whereIn('table',['magic', 'weapon', 'armor', 'equipment']);
Route::get('/info', [SomeController::class, "info"]);

