<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dinner;

class DinnerController extends Controller
{
  public function index()
  {
    $dinner = Dinner::all()->sortBy('name');
    // return Dinner::all()->sortBy('name');
    return view('dinner', compact('dinner'));

  }

  public function show($id)
  {
      return Dinner::find($id);
  }

  public function store(Request $request)
  {
      return Dinner::create($request->all());
  }

  public function update(Request $request, $id)
  {
      $Dinner = Dinner::findOrFail($id);
      $Dinner->update($request->all());

      return $Dinner;
  }

  public function delete(Request $request, $id)
  {
      $Dinner = Dinner::findOrFail($id);
      $Dinner->delete();

      return 204;
  }
}
