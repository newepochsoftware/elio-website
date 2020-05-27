@extends('layouts.subpages')

@section('content')

<!-- Page Header -->
<section class="page_header page_header_special">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-uppercase">Special Events</h2>
                <!-- <p>Tomato is a delicious restaurant website template</p> -->
            </div>
        </div>
    </div>
</section>

<!-- Contact Form / Info -->
<div class="blog-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <article class="wow fadeInUp">
                    <div class="post-img">
                        <div class="blog-slider">
                            <div>
                                <img src="https://storage.googleapis.com/wynn-bucket/elio-special-event-header.jpg" class="img-responsive" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <h4><a href="./blog_single_image.html">4th Of July Party</a></h4>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="post-date">Jul-04-2020</div>
                        </div>
                    </div>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
                    <a href="#" class="btn btn-default">View Event Info</a>
                </article>

                <article class="wow fadeInUp">
                    <div class="post-img">
                        <div class="blog-slider">
                            <div>
                                <img src="https://storage.googleapis.com/wynn-bucket/elio-special-event-header-2.jpg" class="img-responsive" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <h4><a href="./blog_single_image.html">Influencer Food Tasting</a></h4>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="post-date">Jul-12-2020</div>
                        </div>
                    </div>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
                    <a href="#" class="btn btn-default">View Event Info</a>
                </article>

                <div class="clearfix"></div>
                <ul class="pagi_nation">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
