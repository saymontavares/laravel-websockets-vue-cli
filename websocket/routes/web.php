<?php

use Illuminate\Support\Facades\Route;
use App\Events\MsgEvent;
use Illuminate\Http\Request;

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

Route::post('send-msg', function (Request $request) {
    $request->validate([
        'nome' => 'required',
        'menssagem' => 'required',
    ]);

    broadcast(new MsgEvent([
        'id' => md5(date('Y-m-d H:i:s')),
        'nome' => $request->nome,
        'menssagem' => $request->menssagem,
        'data' => $request->data
    ]));

    return response()->json(['status' => 'menssagem enviada'], 200);
});

Route::get('fire', function () {
    broadcast(new MsgEvent([
        'id' => md5(rand(1, 100)),
        'nome' => 'Saymon',
        'menssagem' => 'Olá mundo',
        'data' => date("d/m H:i")
    ]));
    return 'ok';
});

Route::post('broadcasting/auth', function (Request $request) {
    return response()->json(['status' => 'ok'], 200);
});

Route::get('/', function () {
    return view('welcome');
});
