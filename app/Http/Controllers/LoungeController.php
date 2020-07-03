<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Lounge;
use Carbon\Carbon;

class LoungeController extends Controller
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
    $lounge = Lounge::all()->sortBy('sort_id');
    // return Lounge::all()->sortBy('name');
    return view('lounge', compact('lounge'));

  }

  public function show($id)
  {
      return Lounge::find($id);
  }

  public function lounge(Request $request)
  {
    $lounge = Lounge::all()->sortBy('sort_id');
    return view('admin.lounge', compact('lounge'));
  }
  public function create()
  {
    return view('admin.lounge-create');
  }

  public function store(Request $request)
  {
      $lounge = new Lounge();
      $lounge->sort_id = $request->get('sort_id');
      $lounge->category = $request->get('category');
      $lounge->name = $request->get('name');
      $lounge->desc = $request->get('desc');
      $lounge->price = $request->get('price');

      $lounge->save();

      return redirect('/admin/lounge')->with('success', 'Lounge Have Been Added');

  }

  public function edit($id)
  {
      $lounge = Lounge::find($id);
      // $tickets = $shows->tickets;
      return view('admin.lounge-edit', compact('lounge'));
  }

  public function update(Request $request, $id)
  {
      $lounge = Lounge::findOrFail($id);
      // $dinner->update($request->all());
      $lounge->category = $request->get('category');
      $lounge->name = $request->get('name');
      $lounge->desc = $request->get('desc');
      $lounge->price = $request->get('price');
      $lounge->save();

      return redirect('/admin/lounge')->with('success', 'Lounge Have Been Added');
  }
  // public function index(Request $request){
  //     $data = Menu::orderBy('sort_id','asc')->get();
  //     return view('menu',compact('data'));
  // }

  public function updateOrder(Request $request)
  {
      $lounge = Lounge::all();


      foreach ($lounge as $lounges) {
          foreach ($request->sort_id as $sort_id) {
              if ($sort_id['id'] == $lounges->id) {
                  $lounges->update(['sort_id' => $sort_id['position']]);
              }
          }
      }

      return response('Lounge Order Updated.', 200);

      // return redirect('/admin/dinner')->with('success', 'dinner Have Been Updated');

  }

  public function destroy(Request $request, $id)
  {
      $lounge = Lounge::findOrFail($id);
      $lounge->delete();

      return redirect('/admin/lounge')->with('success', 'Lounge Have Been Added');
  }
}
