<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {
        if (Auth::user()->isAdmin()) {
            $appointments = Appointment::all();
        } else {
            $appointments = Appointment::where('user_id', Auth::id())->get();
        }
        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        return view('appointments.create');
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);

        if (Auth::user()->role !== 'admin' && $appointment->user_id !== Auth::id()) {
            return redirect()->route('appointments.index')->with('error', 'No tienes permiso para ver esta cita.');
        }

        return view('appointments.show', compact('appointment'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        Appointment::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        return redirect()->route('appointments.index')->with('success', 'Cita creada exitosamente.');
    }

    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);

        if (Auth::user()->role !== 'admin' && $appointment->user_id !== Auth::id()) {
            return redirect()->route('appointments.index')->with('error', 'No tienes permiso para editar esta cita.');
        }

        return view('appointments.edit', compact('appointment'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        $appointment = Appointment::findOrFail($id);

        if (Auth::user()->role !== 'admin' && $appointment->user_id !== Auth::id()) {
            return redirect()->route('appointments.index')->with('error', 'No tienes permiso para actualizar esta cita.');
        }

        $appointment->update([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        return redirect()->route('appointments.index')->with('success', 'Cita actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);

        if (Auth::user()->role !== 'admin' && $appointment->user_id !== Auth::id()) {
            return redirect()->route('appointments.index')->with('error', 'No tienes permiso para eliminar esta cita.');
        }

        $appointment->delete();

        return redirect()->route('appointments.index')->with('success', 'Cita eliminada exitosamente.');
    }
}
