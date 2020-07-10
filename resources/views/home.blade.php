@extends('layouts.app')

@section('content')

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Restaurant",
  "name": "Elio at Wynn Las Vegas",
  "description": "Inspired by Mexico's rich heritage of celebratory food and gatherings",
  "openingHours": "Th,Fr,Sa,Su 17:30-01:00",
  "image":"https://storage.googleapis.com/wynn-bucket/elio-food-pic-7.jpg",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Las Vegas",
    "addressRegion": "NV",
    "postalCode": "89109",
    "streetAddress": "3131 S Las Vegas Blvd"
  },
  "priceRange": "$$",
  "servesCuisine": [
    "Spanish"
  ],
  "telephone": "+17027707000",
  "hasMenu":{
      "@type":"Menu",
      "name":"Dine-In Menu",
      "description":"Dinner is served Thursday and Sunday from 5:30 – 10 p.m. in the dining room and 5:30 – 11 p.m. in the lounge; Friday and Saturday from 5:30 – 11 p.m. in the dining room and 5:30 p.m. – 1 a.m. in the lounge.",
      "hasMenuSection": [
        {
        "@type": "MenuSection",
        "name": "Desserts",
        "hasMenuItem": [
          @foreach ($desserts as $dessert)
          {
           "@type": "MenuItem",
           "name": "{{ $dessert->name }}",
           "description": "{{ $dessert->desc }}",
           "offers": {
           "@type": "Offer",
           "price": "{{ $dessert->price }}",
           "priceCurrency": "USD"
           }
          }
          @if (!$loop->last),@endif
          @endforeach
        ]
      },
      {
      "@type": "MenuSection",
      "name": "Cocktails",
      "hasMenuItem": [
        @foreach ($cocktails as $cocktail)
        {
         "@type": "MenuItem",
         "name": "{{ $cocktail->name }}",
         "description": "{{ $cocktail->desc }}",
         "offers": {
         "@type": "Offer",
         "price": "{{ $cocktail->price }}",
         "priceCurrency": "USD"
         }
        }
        @if (!$loop->last),@endif
        @endforeach
      ]
      },
      {
      "@type": "MenuSection",
      "name": "Dinner",
      "hasMenuItem": [
        @foreach ($dinner as $dinners)
        {
         "@type": "MenuItem",
         "name": "{{ $dinners->name }}",
         "description": "{{ $dinners->desc }}",
         "offers": {
         "@type": "Offer",
         "price": "{{ $dinners->price }}",
         "priceCurrency": "USD"
         }
        }
        @if (!$loop->last),@endif
        @endforeach
      ]

      },
      {
      "@type": "MenuSection",
      "name": "Lounge",
      "hasMenuItem": [
        @foreach ($lounge as $lounges)
        {
         "@type": "MenuItem",
         "name": "{{ $lounges->name }}",
         "description": "{{ $lounges->desc }}",
         "offers": {
         "@type": "Offer",
         "price": "{{ $lounges->price }}",
         "priceCurrency": "USD"
         }
        }
        @if (!$loop->last),@endif
        @endforeach
      ]
      }
      ]
    }
}
</script>

<!-- Home page-->
<section class="home">
    <div class="overlay"></div>

    <div class="tittle-block">
        <div class="logo">
            <a href="./index.html">
                <img src="https://storage.googleapis.com/wynn-bucket/elio-header-icon.png" alt="logo">
            </a>
        </div>
        <div class="container">
          <div class="row">
            <h1>Inspired by Mexico's rich heritage of<br/> celebratory food and gatherings</h1>
            <h2>Enrique Olvera, Daniela Soto-Innes and Santiago Perez bring their much anticipated contemporary Mexican restaurant Elio to Encore at Wynn Las Vegas.</h2>
          </div>
        </div>
    </div>
    <div class="scroll-down">
        <a href="#about">
            <img src="img/arrow-down.png" alt="down-arrow">
        </a>
    </div>
</section>

<div class="main-wrapper">
    <!-- About page-->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header wow fadeInDown">
                        <h1>the restaurant</h1>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-4">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 hidden-sm about-photo">
                                <div class="image-thumb">
                                    <img src="https://storage.googleapis.com/wynn-bucket/elio-food-pic-6.jpg" data-mfp-src="https://storage.googleapis.com/wynn-bucket/elio-food-pic-6.jpg" class="img-responsive" alt="logo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 about-photo hidden-xs">
                                <img src="https://storage.googleapis.com/wynn-bucket/food-pic-4.jpg" data-mfp-src="https://storage.googleapis.com/wynn-bucket/food-pic-4.jpg" class="img-responsive" alt="logo">
                            </div>
                            <div class="col-sm-6 about-photo hidden-xs">
                                <img src="https://storage.googleapis.com/wynn-bucket/food-pic-3.jpg" data-mfp-src="https://storage.googleapis.com/wynn-bucket/food-pic-3.jpg" class="img-responsive" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                      Guests of Elio will be immersed in a sleek and seductive environment. Day turns to night as guests move from the energy of the bar and lounge to the warmth of the dining room. The modern and minimal architectural lines are paired with rich textures and beautiful art that creates a backdrop for lively gatherings and exceptional food.
                      <br/><br/>Elio will showcase a thoughtful menu of recipes grounded in Mexico’s rich culinary traditions, infusing the finest regional and seasonal ingredients. The bar and lounge will add to the celebration by showcasing Mexico’s best hand-selected agave-based spirits.
                    </p>
                    <!-- <img src="img/signature.png" alt="signature"> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <div class="gallery-content gallery-sect">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item" data-mfp-src="https://storage.googleapis.com/wynn-bucket/elio-food-pic-5.jpg">
                        <img src="https://storage.googleapis.com/wynn-bucket/elio-food-pic-5.jpg" class="img-responsive" alt="" />
                        <div class="gi-overlay">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item" data-mfp-src="https://storage.googleapis.com/wynn-bucket/elio-food-pic-7.jpg">
                        <img src="https://storage.googleapis.com/wynn-bucket/elio-food-pic-7.jpg" class="img-responsive" alt="" />
                        <div class="gi-overlay">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item" data-mfp-src="https://storage.googleapis.com/wynn-bucket/elio-food-pic-8.jpg">
                        <img src="https://storage.googleapis.com/wynn-bucket/elio-food-pic-8.jpg" class="img-responsive" alt="" />
                        <div class="gi-overlay">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Map -->
    <!-- Set latitude and Longitude (Get it from http://google.com/maps) -->
    <div id="mapid" style="width:100%; height:500px;"></div>


@endsection
