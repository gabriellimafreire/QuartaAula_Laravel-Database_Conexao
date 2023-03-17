<?php
use App\Models\Servico;
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
    $meuPrimeiroServico = new Servico;
    $meuPrimeiroServico->nome = "DevWeb";
    $meuPrimeiroServico->telefone = "(11) 99551-1010";
    $meuPrimeiroServico->save();
    
    return view('welcome');
});
