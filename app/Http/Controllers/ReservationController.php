<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
  public function index()
  {
      // return Reservation::all();
      return view('reservations');

  }

  public function show($id)
  {
      return Reservation::find($id);
  }

  public function store(Request $request)
  {
      return Reservation::create($request->all());
  }

  public function update(Request $request, $id)
  {
      $Reservation = Reservation::findOrFail($id);
      $Reservation->update($request->all());

      return $Reservation;
  }

  public function delete(Request $request, $id)
  {
      $Reservation = Reservation::findOrFail($id);
      $Reservation->delete();

      return 204;
  }
}
