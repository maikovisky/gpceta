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

//Route::get('/', function () {
//    return view('app');
//});

Route::get('/',  ['as' => 'home', 'uses' => 'DashboardController@index']);
Route::get('home', 'DashboardController@index');
Route::get('dashboard', 'DashboardController@index');

Route::resource('project', "ProjectController");
Route::resource('user', "UserController");
Route::resource('companytype', "CompanyTypeController");
Route::resource('room', "ReservationRoomController");
Route::resource('car', "ReservationCarController");


// Authentication routes...
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Menu::make('MyNavBar', function($menu){
    $menu->add(trans('general.Projects'), array('route'=>'project.index')); 
    $menu->add(trans('general.Users'),  array('route'=>'user.index'));
    $menu->add(trans('general.CompanyType'),  array('route'=>'companytype.index'));
   
    $reservation = $menu->add(trans('general.Reservation'), 
            array('class' => 'treeview'));
    $reservation->add(trans('general.Room'), array('route'=>'room.index'));
    $reservation->add(trans('general.Car'),  array('route'=>'car.index'));
    //$reservation->attr('class', 'treeview-menu');
   
//   $menu->item(trans('general.Reservation'))->add(trans('general.Room'));
//   $menu->item(trans('general.Reservation'))->add(trans('general.Car'));
//    
    //$menu->add(trans('general.About'));
    //$menu->add(trans('general.Users'), array('route'=>'user.index')); 
   
});

