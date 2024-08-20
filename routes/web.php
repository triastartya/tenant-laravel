<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::get('health',function(){
            return response()->json(['success'=>true,'data'=>'health']);
        });
        Route::get('/', function () {
            dd(\App\Models\User::all());
            return view('welcome');
        });
        // Route::get('tenant/create',[TenantController::class,'create']);
        // your actual routes
    });
}