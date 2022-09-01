<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;

class BookingController extends Controller
{
   
    public function index()
    {
        $bookings = Booking::all();
         return View('bookings.index',compact('bookings'));
    }
    
    public function create()
    {
        return view('bookings.create');
    }

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

   
    public function show(Booking $booking)
    {
        //
    }

 
    public function edit(Booking $booking)
    {
        return view('bookings.edit',compact('booking'));
    
    }


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
