<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
  public function index()
  {
      // return Gallery::all();
      return view('gallery');

  }

  public function show($id)
  {
      return Gallery::find($id);
  }

  public function store(Request $request)
  {
      return Gallery::create($request->all());
  }

  public function update(Request $request, $id)
  {
      $Gallery = Gallery::findOrFail($id);
      $Gallery->update($request->all());

      return $Gallery;
  }

  public function delete(Request $request, $id)
  {
      $Gallery = Gallery::findOrFail($id);
      $Gallery->delete();

      return 204;
  }
}
