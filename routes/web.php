<?php

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

Route::get('/test', function(){

    // $connection = [];
    // foreach ($_SERVER as $key => $value) {
    //     if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
    //         continue;
    //     }
    //     $connection['dbhost'] = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    //     $connection['dbname'] = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    //     $connection['dbusername'] = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    //     $connection['dbpassword'] = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
    // }
    //
    // echo "<pre>"; print_r($connection); print_r($_SERVER); echo "<pre>";

	return 'Testing page';
});
