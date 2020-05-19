<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cocktails;

class CocktailsController extends Controller
{
  public function index()
  {
    $cocktails = Cocktails::all()->sortBy('name');
    // return Cocktails::all()->sortBy('name');
    return view('cocktails', compact('cocktails'));

  }

  public function show($id)
  {
      return Cocktails::find($id);
  }

  public function store(Request $request)
  {
      return Cocktails::create($request->all());
  }

  public function update(Request $request, $id)
  {
      $Cocktails = Cocktails::findOrFail($id);
      $Cocktails->update($request->all());

      return $Cocktails;
  }

  public function delete(Request $request, $id)
  {
      $Cocktails = Cocktails::findOrFail($id);
      $Cocktails->delete();

      return 204;
  }
}
