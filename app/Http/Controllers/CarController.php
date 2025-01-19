<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'year' => 'required|integer',
            'price' => 'required|numeric',
            'photo' => 'nullable|image'
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('cars', 'public');
        }

        Car::create([
            'name' => $request->name,
            'model' => $request->model,
            'year' => $request->year,
            'price' => $request->price,
            'photo' => $photoPath,
        ]);

        return redirect()->route('admin.cars.index')->with('success', 'Car created successfully.');
    }

    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'year' => 'required|integer',
            'price' => 'required|numeric',
            'photo' => 'nullable|image'
        ]);

        $photoPath = $car->photo;
        if ($request->hasFile('photo')) {
            if ($car->photo) {
                Storage::disk('public')->delete($car->photo);
            }
            $photoPath = $request->file('photo')->store('cars', 'public');
        }

        $car->update([
            'name' => $request->name,
            'model' => $request->model,
            'year' => $request->year,
            'price' => $request->price,
            'photo' => $photoPath,
        ]);

        return redirect()->route('admin.cars.index')->with('success', 'Car updated successfully.');
    }

    public function destroy(Car $car)
    {
        if ($car->photo) {
            Storage::disk('public')->delete($car->photo);
        }
        $car->delete();
        return redirect()->route('admin.cars.index')->with('success', 'Car deleted successfully.');
    }

    public function availableCars()
    {
        $cars = Car::where('status', 'available')->get();
        return view('cars.available', compact('cars'));
    }

}
