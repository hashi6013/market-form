<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\AddressEditController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [ItemController::class, 'index']);
Route::get('/item/{item_id}', [ItemController::class, 'itemDetail']);
Route::get('/purchase/{item_id}', [PurchaseController::class, 'purchase']);

// 仮
Route::get('/purchase/address/{item_id}', [AddressEditController::class, 'addressEdit']);
Route::get('/mypage', [MypageController::class, 'mypageIndex']);
Route::get('/mypage/profile', [MypageController::class, 'update']);
Route::get('/comment', [CommentController::class, 'comment']);

