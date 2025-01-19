<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function approve($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'approved';
        $booking->save();

        return redirect()->route('admin.bookingcustomer.index')->with('success', 'Booking approved successfully');
    }

    public function reject($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'rejected';
        $booking->save();

        return redirect()->route('admin.bookingcustomer.index')->with('success', 'Booking rejected successfully');
    }

    public function showInvoice(Booking $booking)
    {
        return view('invoice', compact('booking'));
    }

    public function book($carId)
    {
        $car = Car::findOrFail($carId);
        return view('book-car', compact('car'));
    }

    public function handleBooking(Request $request, $carId)
{
    // Validate the request data
    $request->validate([
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
    ]);

    // Create a new booking
    $booking = Booking::create([
        'car_id' => $carId,
        'user_id' => auth()->id(),
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
    ]);

    // Add a session flash message for SweetAlert
    return redirect()->route('book.invoice', $booking->id)->with('success', 'Booking created successfully!');
}



    // Admin methods
    public function index()
    {
        $bookings = Booking::with(['user', 'car'])->get(); // Load user and car relationships

        return view('admin.bookingcustomer.index', compact('bookings'));
    }

    public function edit($id)
    {
        $booking = Booking::with('user', 'car')->findOrFail($id);
        return view('admin.bookingcustomer.edit', compact('booking'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'start_date' => 'required|date|after:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect()->route('admin.bookingcustomer.index')->with('success', 'Booking updated successfully!');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('admin.bookingcustomer.index')->with('success', 'Booking deleted successfully!');
    }
}

