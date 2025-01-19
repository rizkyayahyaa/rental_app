<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\User;
use App\Models\Car;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::all();
        return view('admin.rentals.index', compact('rentals'));
    }

    public function create()
    {
        $users = User::all();
        $cars = Car::all();
        return view('admin.rentals.create', compact('users', 'cars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        // Create a new rental record
        Rental::create($request->all());

        return redirect()->route('admin.rentals.index')->with('success', 'Rental added successfully.');
    }

    public function edit($id)
    {
        // Fetch the rental record
        $rental = Rental::findOrFail($id); // Replace Rental with your actual model name

        // Fetch users and cars for the dropdowns
        $users = User::all();
        $cars = Car::all(); // Replace Car with your actual model name

        return view('admin.rentals.edit', compact('rental', 'users', 'cars'));
    }

    public function update(Request $request, Rental $rental)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'user_id' => 'required|exists:users,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $rental->update($request->all());
        return redirect()->route('admin.rentals.index');
    }

    public function destroy(Rental $rental)
    {
        $rental->delete();
        return redirect()->route('admin.rentals.index');
    }
}
