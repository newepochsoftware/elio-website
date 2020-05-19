@extends('layouts.subpages')

@section('content')

<!-- Page Header -->
<section class="page_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-uppercase">Dinner</h2>
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
                    <h1><small>Browse Our List Of Dinner</small></h1>
                </div>
            </div>
        </div>
        <div class="food-menu wow fadeInUp">
            <div class="row menu-items">
              @foreach ($Dinner as $dinners)
                <div class="menu-item col-sm-6 col-xs-12 starter dinner Dinner">
                    <div class="clearfix menu-wrapper">
                        <h4>{{ $dinners->name }}</h4>
                        <span class="price">{{ $dinners->price }}</span>
                        <div class="dotted-bg"></div>
                    </div>
                    <p>{{ $dinners->desc }}</p>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</section>


@endsection
