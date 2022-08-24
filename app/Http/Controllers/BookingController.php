<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
       
 
         return View('bookings.index',compact('bookings'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingRequest $booking)
    {
       $mensaje =  Booking::create([
            'nombre' => $booking->nombre,
            'descripcion' => $booking->descripcion,
            'product_id' => $booking->product_id
        ]);
        if($mensaje)
        {
            toast('Reserva agregada','success');
            
        }else{
            toast('Reserva no agregada','warning');
        }

        return redirect()->route('bookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('bookings.edit',compact('booking'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingRequest  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $mensaje = $booking->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'product_id' => $request->product_id
        ]);
        if($mensaje)
        {
            toast('Reserva actualizada','success');
            
        }else{
            toast('Reserva no actualizada','warning');
        }
        return redirect()->route('bookings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $mensaje = $booking->delete();
        if($mensaje)
        {
            toast('Reserva eliminada','success');
            
        }else{
            toast('Reserva no eliminada','warning');
        }
        return redirect()->route('bookings.index');
    }
}
