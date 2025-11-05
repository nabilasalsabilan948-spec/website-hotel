<?php

use App\Http\Controllers\TestController;
use App\Livewire\Dashboad;
use App\Livewire\Hotels\HotelCreate;
use App\Livewire\Hotels\HotelEdit;
use App\Livewire\Hotels\HotelList;
use App\Livewire\Login;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about',[TestController::class,'about']);

Route::get('/dashboad',Dashboad::class);
Route::get('/hotels',HotelList::class);
Route::get('/hotels/create',HotelCreate::class);
Route::get('/hotels/{id}/edit',HotelEdit::class);

Route::get('/login', Login::class);