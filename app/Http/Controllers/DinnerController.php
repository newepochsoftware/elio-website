<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Dinner;
use Carbon\Carbon;

class DinnerController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function __construct()
  {
   $this->middleware('auth', ['except' => array('index')]);
  }

  public function index()
  {
    $dinner = Dinner::all()->sortBy('sort_id');
    // return dinner::all()->sortBy('name');
    return view('dinner', compact('dinner'));
  }

  public function show($id)
  {
      return Dinner::find($id);
  }

  public function dinner(Request $request)
  {
    $dinner = Dinner::all()->sortBy('sort_id');
    return view('admin.dinner', compact('dinner'));
  }
  public function create()
  {
    return view('admin.dinner-create');
  }
  public function store(Request $request)
  {
      $dinner = new Dinner();
      $dinner->sort_id = $request->get('sort_id');
      $dinner->category = $request->get('category');
      $dinner->name = $request->get('name');
      $dinner->desc = $request->get('desc');
      $dinner->price = $request->get('price');
      $dinner->save();

      return redirect('/admin/dinner')->with('success', 'dinner Have Been Added');
  }

  public function edit($id)
  {
      $dinner = Dinner::find($id);
      // $tickets = $shows->tickets;
      return view('admin.dinner-edit', compact('dinner'));
  }

  public function update(Request $request, $id)
  {
      $dinner = Dinner::findOrFail($id);
      // $dinner->update($request->all());
      $dinner->category = $request->get('category');
      $dinner->name = $request->get('name');
      $dinner->desc = $request->get('desc');
      $dinner->price = $request->get('price');
      $dinner->save();

      return redirect('/admin/dinner')->with('success', 'dinner Have Been Added');
  }


  // public function index(Request $request){
  //     $data = Menu::orderBy('sort_id','asc')->get();
  //     return view('menu',compact('data'));
  // }

  public function updateOrder(Request $request)
  {
      $dinner = Dinner::all();


      foreach ($dinner as $dinners) {
          foreach ($request->sort_id as $sort_id) {
              if ($sort_id['id'] == $dinners->id) {
                  $dinners->update(['sort_id' => $sort_id['position']]);
              }
          }
      }

      return response('dinner Order Updated.', 200);

      // return redirect('/admin/dinner')->with('success', 'dinner Have Been Updated');

  }

  public function destroy(Request $request, $id)
  {
      $dinner = Dinner::findOrFail($id);
      $dinner->delete();

      return redirect('/admin/dinner')->with('success', 'dinner Have Been Added');
  }
}
