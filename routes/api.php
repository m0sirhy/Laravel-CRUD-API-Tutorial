<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Person;
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

Route::get('/personس/{person}',function(Person $person){
    return $person;
});
Route::apiResource('/person','personController');
