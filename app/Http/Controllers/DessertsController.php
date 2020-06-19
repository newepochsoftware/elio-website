<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Dessert;
use Carbon\Carbon;

class DessertsController extends Controller
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
    $desserts = Dessert::all()->sortBy('sort_id');
    // return Desserts::all()->sortBy('name');
    return view('desserts', compact('desserts'));

  }
  public function desserts(Request $request)
  {
    $desserts = Dessert::all()->sortBy('sort_id');
    return view('admin.desserts', compact('desserts'));
  }
  public function create()
  {
    return view('admin.desserts-create');
  }
  public function show($id)
  {
      return Dessert::find($id);
  }

  public function edit($id)
  {
      $desserts = Dessert::find($id);
      // $tickets = $shows->tickets;
      return view('admin.desserts-edit', compact('desserts'));
  }

  public function store(Request $request)
  {
    $desserts = new dessert();
    $desserts->sort_id = $request->get('sort_id');
    $desserts->category = $request->get('dessert_category');
    $desserts->name = $request->get('name');
    $desserts->desc = $request->get('desc');
    $desserts->price = $request->get('price');
    $desserts->save();

    return redirect('/admin/desserts')->with('success', 'Desserts Have Been Added');
  }

  public function update(Request $request, $id)
  {
      $desserts = Dessert::findOrFail($id);
      $desserts->category = $request->get('dessert_category');
      $desserts->name = $request->get('name');
      $desserts->desc = $request->get('desc');
      $desserts->price = $request->get('price');
      $desserts->save();

      return redirect('/admin/desserts')->with('success', 'Desserts Have Been Updated');
  }

  public function updateOrder(Request $request)
  {
      $desserts = Dessert::all();

      foreach ($desserts as $dessert) {
          foreach ($request->sort_id as $sort_id) {
              if ($sort_id['id'] == $dessert->id) {
                  $dessert->update(['sort_id' => $sort_id['position']]);
              }
          }
      }

      return response('Desserts Order Updated.', 200);

      // return redirect('/admin/cocktails')->with('success', 'Cocktails Have Been Updated');

  }

  public function destroy(Request $request, $id)
  {
      $desserts = Dessert::findOrFail($id);
      $desserts->delete();

      return redirect('/admin/desserts')->with('success', 'Desserts Have Been Added');
  }
}
