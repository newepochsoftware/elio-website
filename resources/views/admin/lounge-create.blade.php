@extends('layouts.admin')

@section('content')

<div class="col-lg-12">
  <h4 class="header-title">New Lounge</h4>
  <hr>
    <div class="row">
        <div class="col-12">
            <div>
                <form class="form-horizontal" method="post" action="{{ route('lounge.store') }}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="sort_id" value="0">

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="simpleinput">Name</label>
                        <div class="col-md-6">
                            <input type="text" name="name" id="simpleinput" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="example-textarea">Description</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="desc" rows="5" id="example-textarea"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="simpleinput">Price</label>
                        <div class="col-md-2">
                            <input type="text" id="simpleinput"  name="price" class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="simpleinput">Category</label>
                        <div class="col-md-3">
                          <select name="category" id="inputState" class="form-control">
                            <option>Lounge</option>
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
