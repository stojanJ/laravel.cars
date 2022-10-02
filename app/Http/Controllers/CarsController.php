<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Cars;

class CarsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function index(){
        $cars = Cars::all();
        return view('layouts.cars', compact('cars'));
    }
    public function show($id) {
        $car = Cars::find($id);
        return view('layouts.cars:id', compact('car'));
    }

}
