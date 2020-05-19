@extends('layouts.subpages')

@section('content')

<!-- Page Header -->
<section class="page_header page_header_reservations">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-uppercase">Desserts</h2>
                <!-- <p></p> -->
            </div>
        </div>
    </div>
</section>

<!-- menu-->
<section class="menu space60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header wow fadeInDown">
                    <h1><small>Browse Our List Of Desserts</small></h1>
                </div>
            </div>
        </div>
        <div class="food-menu wow fadeInUp">
            <div class="row menu-items">
              @foreach ($Desserts as $dessert)
                <div class="menu-item col-sm-6 col-xs-12 starter dinner desserts">
                    <div class="clearfix menu-wrapper">
                        <h4>{{ $dessert->name }}</h4>
                        <span class="price">{{ $dessert->price }}</span>
                        <div class="dotted-bg"></div>
                    </div>
                    <p>{{ $dessert->desc }}</p>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</section>


@endsection
