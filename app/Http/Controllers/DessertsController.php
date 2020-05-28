<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dessert;

class DessertsController extends Controller
{
  public function index()
  {
    $desserts = Dessert::all()->sortBy('name');
    // return Desserts::all()->sortBy('name');
    return view('desserts', compact('desserts'));

  }

  public function show($id)
  {
      return Dessert::find($id);
  }

  public function store(Request $request)
  {
      return Dessert::create($request->all());
  }

  public function update(Request $request, $id)
  {
      $desserts = Dessert::findOrFail($id);
      $desserts->update($request->all());

      return $desserts;
  }

  public function delete(Request $request, $id)
  {
      $desserts = Dessert::findOrFail($id);
      $desserts->delete();

      return 204;
  }
}
