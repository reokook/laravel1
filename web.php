<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//task1
// Route::get('/hello', function () {
//     return ('Hello World');
// });


//task2
// Route::get('/hello/{name}', function ($name) {
//     return "Hello, {$name}!";
// });

//task3
// Route::get('/age/{age?}', function ($age = null) {
//     if ($age) {
//         return "You are {$age} years old.";
//     } else {
//         return "Age not provided.";
//     }
// });


//task4
// Route::get('/welcome', [WelcomeController::class, 'index']);

//task5




//task6
// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', function () {
//         return "Welcome to the Admin Dashboard!";
//     });

//     Route::get('/settings', function () {
//         return "Admin Settings Page";
//     });

//     Route::get('/users', function () {
//         return "Manage Users";
//     });
// });




// //task7
// Route::get('/user/{id}', function ($id) {
//     return "User ID: $id";
// })->where('id', '[0-9]+');


// //task8
// Route::fallback(function () {
//     return response()->json(['message' => 'Page not found.'], 404);
// });

// //task9
// Route::resource('posts', PostController::class);



// //task10`

// Route::get('/{category}/{id}', function ($category, $id) {
//     return "Category: $category, ID: $id";
// })->where('id', '[0-9]+');
// //task11



// Route::get('/blog/{page?}', function ($page = 1) {
//     return "Viewing page $page";
// })->where('page', '[0-9]+');


// //task12
// Route::redirect('/home', '/welcome');



// //task13

// Route::get('/welcome', function () {
//     return view('welcome');
// });