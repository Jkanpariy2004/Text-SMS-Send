<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\OTPController;

Route::get('/', function () {
    return view('sms');
});

Route::post('/sms',[SMSController::class,'sendSMS']);

Route::get('/otp', function () {
    return view('otp');
});

Route::post('/SendOtp',[OTPController::class,'SendOtp']);