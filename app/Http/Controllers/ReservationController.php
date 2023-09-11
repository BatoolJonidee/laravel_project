<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\time;
use App\Models\Docters;
use App\Models\reservation;
use App\Models\specialties;
use Illuminate\Http\Request;
use GrahamCampbell\ResultType\Success;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $appointments=reservation::all();
        
        $date = Carbon::parse();
        return view('adminapoint',compact('appointments','date'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $docters=Docters::all();
        $sp = specialties::all();
        $times = time::all();
        
        $selectedTime = time::findOrFail($request->input('time'));
        
        $request->validate([
            
            'appointment_date' => 'required|date|after_or_equal:today',
            
        ]);

        $appointmentDate = date('Y-m-d', strtotime($request->input('appointment_date')));
        $appointmentTime = date('H:i:s', strtotime($request->input('time')));

        reservation::create([
            'user_id' => $request->input('user_id'),
            'docter_id' => $request->input('docter_id'),
            'appointment_date' => $appointmentDate,
            'appointment_time' => $selectedTime->time,
        ]);

        // $request->session()->flash('success', 'Appointment booked successfully.');
       
        return view('user/index',compact('docters' ,'sp','times'));
    }

    /**
     * Display the specified resource.
     */
    public function show(reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservation $reservation)
    {
        //
    }
}
