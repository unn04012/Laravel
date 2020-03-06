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

// with()메서드를 이용
Route::get('/', function(){
  return view('welcome')->with([
    'name' => 'Foo',
    'greeting' => '안녕하세요',
  ]);
});

// view()함수의 두 번째 인자로 넘기는 방법
Route::get('/', function(){
  return view('welcome',[
    'name' => 'Foo',
    'greeting' => '안녕하세요',
  ]);
});
