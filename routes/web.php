<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// 메인 페이지 -> 로그인 또는 대시보드로 이동
Route::get('/', function(){
    return Auth::check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
});

// 로그인 페이지
Route::get('/login', \App\Livewire\Auth\Login::class)
    ->name('login')
    ->middleware('guest');


// 인증된 사용자 전용 라우트
Route::middleware('auth')->group(function () {
    // 대시보드
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // 로그아웃
    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    })->name('logout');
});
