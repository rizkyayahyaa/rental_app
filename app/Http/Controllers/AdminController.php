<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Car;
use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch data from users, cars, and bookings tables
        $users = User::all();
        $cars = Car::all();
        $bookings = Booking::with('user', 'car')->get();

        // Pass the data to the view
        return view('admin.index_admin', compact('users', 'cars', 'bookings'));
    }
}

