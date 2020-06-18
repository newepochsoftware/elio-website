@extends('layouts.admin')

@section('content')
<!-- <h4 class="header-title mb-3">Cocktails</h4> -->

<div class="col-lg-12">
  <h4 class="header-title">Cocktail</h4>
  <hr>
    <div class="row">
        <div class="col-12">
            <div>
                <form class="form-horizontal" role="form" method="post" action="{{ route('cocktails.update', $cocktails->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="simpleinput">Name</label>
                        <div class="col-md-6">
                            <input type="text" name="name" id="simpleinput" class="form-control" value="{{ $cocktails->name }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="example-textarea">Description</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="desc" rows="5" id="example-textarea">{{ $cocktails->desc }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="simpleinput">Price</label>
                        <div class="col-md-2">
                            <input type="text" id="simpleinput"  name="price" class="form-control" value="{{ $cocktails->price }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="simpleinput">Category</label>
                        <div class="col-md-3">
                          <select name="cocktail_category" id="inputState" class="form-control">
                            <option>{{ $cocktails->cocktail_category }}</option>
                          </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger">Update</button>

                </form>
            </div>
        </div>

    </div>
    <!-- end row -->

</div>

@endsection
