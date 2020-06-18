@extends('layouts.admin')

@section('content')
<!-- <h4 class="header-title mb-3">Cocktails</h4> -->

<div class="col-lg-12">
    <h4 class="header-title">Cocktails</h4>
    <p class="sub-header">
    </p>

    <div class="table-responsive">
        <table class="table table-hover mb-0">
            <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($cocktails as $cocktail)
            <tr>
                <th scope="row">{{ $cocktail->id }}</th>
                <td>{{ $cocktail->cocktail_category }}</td>
                <td>{{ $cocktail->name }}</td>
                <td>{{ $cocktail->desc }}</td>
                <td>{{ $cocktail->price }}</td>
                <td><a href="{{ route('cocktails.edit', $cocktail->id)}}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="{{ route('cocktails.destroy', $cocktail->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
