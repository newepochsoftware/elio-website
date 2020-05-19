<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lounge;

class LoungeController extends Controller
{
  public function index()
  {
    $Lounge = Lounge::all()->sortBy('name');
    // return Lounge::all()->sortBy('name');
    return view('Lounge', compact('Lounge'));

  }

  public function show($id)
  {
      return Lounge::find($id);
  }

  public function store(Request $request)
  {
      return Lounge::create($request->all());
  }

  public function update(Request $request, $id)
  {
      $Lounge = Lounge::findOrFail($id);
      $Lounge->update($request->all());

      return $Lounge;
  }

  public function delete(Request $request, $id)
  {
      $Lounge = Lounge::findOrFail($id);
      $Lounge->delete();

      return 204;
  }
}
