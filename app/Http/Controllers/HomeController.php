<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cocktails;
use App\Dessert;
use App\Dinner;
use App\Lounge;


class HomeController extends Controller
{
  public function index()
  {
      $cocktails = Cocktails::all()->sortBy('sort_id');
      $dinner = Dinner::all()->sortBy('sort_id');
      $desserts = Dessert::all()->sortBy('sort_id');
      $lounge = Lounge::all()->sortBy('sort_id');

      return view('home', compact('cocktails', 'dinner','desserts','lounge'));

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
