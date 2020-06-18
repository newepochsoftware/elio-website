<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Cocktails;
use Carbon\Carbon;

class CocktailsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function __construct()
  {
   $this->middleware('auth', ['except' => array('show')]);
  }

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

  public function cocktails(Cocktails $cocktails)
  {
    $cocktails = Cocktails::all();
    return view('admin.cocktails', compact('cocktails'));
  }

  public function store(Request $request)
  {
      return Cocktails::create($request->all());
  }

  public function edit($id)
  {
      $cocktails = Cocktails::find($id);
      // $tickets = $shows->tickets;
      return view('admin.cocktails-edit', compact('cocktails'));
  }

  public function update(Request $request, $id)
  {
      $Cocktails = Cocktails::findOrFail($id);
      // $Cocktails->update($request->all());
      $Cocktails->cocktail_category = $request->get('cocktail_category');
      $Cocktails->name = $request->get('name');
      $Cocktails->desc = $request->get('desc');
      $Cocktails->price = $request->get('price');
      $Cocktails->save();

      return redirect('/admin/cocktails')->with('success', 'Cocktails Have Been Added');
  }

  public function delete(Request $request, $id)
  {
      $Cocktails = Cocktails::findOrFail($id);
      $Cocktails->delete();

      return 204;
  }
}
