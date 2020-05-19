@extends('layouts.subpages')

@section('content')

<!-- Page Header -->
<section class="page_header page_header_cocktails">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-uppercase">Cocktails</h2>
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
                    <h1><small>Browse Our List Of Cocktails</small></h1>
                </div>
            </div>
        </div>
        <div class="food-menu wow fadeInUp">
            <div class="row menu-items">
              @foreach ($cocktails as $cocktail)
                <div class="menu-item col-sm-6 col-xs-12 starter dinner desserts">
                    <div class="clearfix menu-wrapper">
                        <h4>{{ $cocktail->name }}</h4>
                        <span class="price">{{ $cocktail->price }}</span>
                        <div class="dotted-bg"></div>
                    </div>
                    <p>{{ $cocktail->desc }}</p>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</section>


@endsection
