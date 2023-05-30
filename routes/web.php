<?php

use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BazmaController;

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
    return view('welcome');
});

Route::get("example", function(){
    return "example route get";
});

Route::get("coba", function(){
    return view("coba", ['nama' => 'rizqi']);
});

Route::get("/example/{exampleId}", function($exampleId){
    return "example number : $exampleId";
});
Route::get("/posts/{postId}/comments/{commentId}", function($postId, $commentId) {
    return "ini post ke : $postId dan comments ke : $commentId";
});


Route::get("post/{postId}", function ($postId = null) {
    return "post opsional: $postId";
});

Route::get("/coba/example", [CobaController::class, "example"]);


Route::get("/coba/request", [CobaController::class, "request"]);
Route::post("/coba/nested-request", [CobaController::class, "nestedRequest"]);


Route::get("/response/index", [BazmaController::class, 'responseFunction']);
Route::get("/response/header", [BazmaController::class, 'responseHeader']);

Route::get("/enkripsi/code", [BazmaController::class, 'encryptionData']);

route::get("redirect/to", [BazmaController::class, 'redirectTo']);
route::get("redirect/from", [BazmaController::class, 'redirectFrom']);

route::get("redirect/to/named", [BazmaController::class, 'redirectToNamedRoute'])->name("redirect.to");
route::get("redirect/from/named", [BazmaController::class, 'redirectFromNamedRoute']);

