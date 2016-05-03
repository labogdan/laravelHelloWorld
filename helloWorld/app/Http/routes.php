<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/createUser', function () {
    return view('newView');
});

Route::get('/user/{id}', function($id) {
    return view('user')->with('userId', $id);
});

Route::get('user/{id}/{name}', function($id, $name) {
    return view('user')->with(array('userId' => $id, 'name' => $name));
})
    ->where(array('id' => '[0-9]+', 'name' => '[a-z]+'));

Route::post('user/createUser', function ()
{
    $password = Input::get("password");

    $insertData = array(
        "name" => Input::get("name"),
        "email" => Input::get("email"),
        "password" => Hash::make($password)
    );

    $user = new \App\User;

    $save = $user::create($insertData);
    return "saved";

});