<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Rental;
use App\Models\User;
use App\Models\Car;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::with(['user', 'car'])->get();
        return view('admin.reports.index', compact('reports'));
    }

    public function create()
    {
        $users = User::all();
        $cars = Car::all();
        return view('admin.reports.create', compact('users', 'cars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'report_details' => 'required|string',
        ]);

        Report::create($request->all());

        return redirect()->route('admin.reports.index')->with('success', 'Report created successfully.');
    }

    public function edit(Report $report)
    {
        $users = User::all();
        $cars = Car::all();
        return view('admin.reports.edit', compact('report', 'users', 'cars'));
    }

    public function update(Request $request, Report $report)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'report_details' => 'required|string',
        ]);

        $report->update($request->all());

        return redirect()->route('admin.reports.index')->with('success', 'Report updated successfully.');
    }

    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->route('admin.reports.index')->with('success', 'Report deleted successfully.');
    }
}



