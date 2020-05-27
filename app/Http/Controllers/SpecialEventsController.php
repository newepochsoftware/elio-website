<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialEventsController extends Controller
{
  public function index()
  {
      // return Home::all();
      return view('special-events');

  }
  public function show($id)
  {
      return Home::find($id);
  }

  public function store(Request $request)
  {
      return Home::create($request->all());
  }

  public function update(Request $request, $id)
  {
      $Home = Home::findOrFail($id);
      $Home->update($request->all());

      return $Home;
  }

  public function delete(Request $request, $id)
  {
      $Home = Home::findOrFail($id);
      $Home->delete();

      return 204;
  }
}
