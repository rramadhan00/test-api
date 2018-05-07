<?php

use Illuminate\Http\Request;
use App\anjing;

Route::get('fuck', function() {

    return anjing::all();

});
