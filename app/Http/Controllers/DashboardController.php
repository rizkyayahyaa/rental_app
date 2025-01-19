<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cars = Car::all();
        return view('index-5', compact('cars'));
    }
}
