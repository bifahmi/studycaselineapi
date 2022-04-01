<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/v2/bot/user/{userId}/linkToken', [\App\Http\Controllers\Wrapper::class, 'link'])->name('link');
Route::get('/v2/bot/profile/{userId}', [\App\Http\Controllers\Wrapper::class, 'profile'])->name('profile');
Route::get('/v2/bot/followers/ids', [\App\Http\Controllers\Wrapper::class, 'getlist'])->name('getlist');
Route::get('/v2/bot/richmenu/list', [\App\Http\Controllers\Wrapper::class, 'richmenu'])->name('richmenu');
Route::post('/v2/bot/message/push', [\App\Http\Controllers\Wrapper::class, 'push'])->name('push');
Route::get('/user/identitas', function (){
    return [
        'code' => '0',
        'data' => [
            'npm'=>'197006030',
            'nama'=>'Bifahmi Ahmad Athoillah',
            'email'=>'197006030@student.unsil.ac.id'
        ]
    ];
}) -> middleware('npm');
