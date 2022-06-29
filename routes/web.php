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

Route::prefix('knox')
    ->group(function () {     
        Route::post('/api/ApiController/login', function () {

            return response()->json([
                'status'  => true,
                'company' => 110,
                'user'    => 123,
                'first_name' => 'Jason',
                'last_name'  => 'Dela Pena',
                'user_company' => 'Mynd',
                'user_status' => true,
            ]);

            return response()->json([
                'status' => false,
                'message' => 'Something is wrong my dude!'
            ]);
        });
    });

Route::get('/', function () {
    return 'Main Site';
});
