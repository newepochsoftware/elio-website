<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index()
  {
      // return About::all();
      return view('about');

  }
  public function show($id)
  {
      return About::find($id);
  }

  public function store(Request $request)
  {
      return About::create($request->all());
  }

  public function update(Request $request, $id)
  {
      $About = About::findOrFail($id);
      $About->update($request->all());

      return $About;
  }

  public function delete(Request $request, $id)
  {
      $About = About::findOrFail($id);
      $About->delete();

      return 204;
  }
}
