<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Category Routes

Route::apiResource('/category','CategoryController');

//Article Routes

Route::apiResource('/article','ArticleController');



//Comment Controller

Route::apiResource('/comment','CommentController');


