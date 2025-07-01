<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/signup', function () {
    return view('signup');
});
// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/dasboard', function () {
//     return view('dasboard');
// });

Route::post('/signup', [RegisterController::class, 'store'])->name('signup.store');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/dashboard', function () {
    return view('dashboard', [
        'user' => auth()->user()
    ]);
})->middleware('auth');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

// Route::post('login', LoginController::class)->name('login.submit');

// $request->validate([
// 	'email' => 'required|min:3|max:20|email',
// 	'password' => 'required|min:8|max:20',

// 	]);

//    	 $email = $request->input('email');
// 	 $name = $request->input('name');
// 	 $password = $request->input('password');

// 	return "Your name is $name and email is $email"; Or use "your name is {$request->input('name')} if the first method did not work 