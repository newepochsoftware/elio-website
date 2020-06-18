<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
  {
      // return Admin::all();
      return view('admin.home');

  }
  public function show($id)
  {
      return Admin::find($id);
  }

  public function store(Request $request)
  {
      return Admin::create($request->all());
  }

  public function update(Request $request, $id)
  {
      $Admin = Admin::findOrFail($id);
      $Admin->update($request->all());

      return $Admin;
  }

  public function delete(Request $request, $id)
  {
      $Admin = Admin::findOrFail($id);
      $Admin->delete();

      return 204;
  }
}
