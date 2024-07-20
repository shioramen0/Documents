<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});
// 商品マスタ ルーティング一覧(showは使わない)
Route::resource('product', ProductsController::class, ['except' => ['show']]);
