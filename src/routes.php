<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Rakeshsoft\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Rakeshsoft\Calculator\CalculatorController@subtract');