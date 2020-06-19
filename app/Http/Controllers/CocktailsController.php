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
    $cocktails = Cocktails::all()->sortBy('sort_id');
    // return Cocktails::all()->sortBy('name');
    return view('cocktails', compact('cocktails'));
  }

  public function show($id)
  {
      return Cocktails::find($id);
  }

  public function cocktails(Request $request)
  {
    $cocktails = Cocktails::all()->sortBy('sort_id');
    return view('admin.cocktails', compact('cocktails'));
  }
  public function create()
  {
    return view('admin.cocktails-create');
  }
  public function store(Request $request)
  {
      $cocktails = new cocktails();
      $cocktails->sort_id = $request->get('sort_id');
      $cocktails->cocktail_category = $request->get('cocktail_category');
      $cocktails->name = $request->get('name');
      $cocktails->desc = $request->get('desc');
      $cocktails->price = $request->get('price');
      $cocktails->save();

      return redirect('/admin/cocktails')->with('success', 'Cocktails Have Been Added');
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


  // public function index(Request $request){
  //     $data = Menu::orderBy('sort_id','asc')->get();
  //     return view('menu',compact('data'));
  // }

  public function updateOrder(Request $request)
    {
        $cocktails = Cocktails::all();


        foreach ($cocktails as $cocktail) {
            foreach ($request->sort_id as $sort_id) {
                if ($sort_id['id'] == $cocktail->id) {
                    $cocktail->update(['sort_id' => $sort_id['position']]);
                }
            }
        }

        return response('Cocktails Order Updated.', 200);

        // return redirect('/admin/cocktails')->with('success', 'Cocktails Have Been Updated');

    }

  public function destroy(Request $request, $id)
  {
      $cocktails = Cocktails::findOrFail($id);
      $cocktails->delete();

      return redirect('/admin/cocktails')->with('success', 'Cocktails Have Been Added');
  }
}
