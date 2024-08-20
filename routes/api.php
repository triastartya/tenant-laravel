<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('health',function(){
    return response()->json(['success'=>true,'data'=>'health']);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');