<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Cars;

class CarsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Controllers;

    public static function index(){
        $cars = Car::all();
        return view('cars', compact('cars'));
    }
    public function show($id) {
        $car = Car::find($id);
        return view('cars:id', compact('car'));
    }
}
