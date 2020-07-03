@extends('layouts.subpages')

@section('content')

<!-- Page Header -->
<section class="page_header page_header_reservations">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-uppercase">Private Events</h2>
                <!-- <p>Tomato is a delicious restaurant website template</p> -->
            </div>
        </div>
    </div>
</section>

<!-- Contact Form / Info -->
<section class="main-content contact-content">
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-left no-margin-top">Address</h3>
                    <div class="footer-address contact-info">
                        <p><i class="fa fa-map-marker"></i>3131 S Las Vegas Blvd, Las Vegas, NV 89109</p>
                        <p><i class="fa fa-phone"></i>Phone: (702) 770-7000</p>
                        <!-- <p><i class="fa fa-envelope-o"></i>groupsales@eliolv.com</p> -->
                    </div>
                    <br>

                    <h3 class="text-left no-margin-top">Hours of Operation</h3>
                    <div class="contact-info text-muted">
                        <p>Dinner is served Thursday and Sunday from 5:30 – 10 p.m. in the dining room and 5:30 – 11 p.m. in the lounge;</p>
                        <p>Friday and Saturday from 5:30 – 11 p.m. in the dining room and 5:30 p.m. – 1 a.m. in the lounge.</p>
                        <p>The attire is stylish casual. Children under five are not permitted.</p>
                        <p>No one under 21 years of age is allowed after 10 pm.</p>
                    </div>
                    <br>
                    <h3 class="text-left no-margin-top">Cuisine</h3>
                    <div class="contact-info text-muted">
                        <p>Spanish</p>
                    </div>
                    <br>

                    <h3 class="text-left no-margin-top">Follow Us</h3>
                    <div class="contact-social">
                        <a href="http://www.facebook.com/elio.lasvegas"><i class="fa fa-facebook"></i></a>
                        <a href="http://www.twitter.com/elio_lv"><i class="fa fa-twitter"></i></a>
                        <a href="http://www.instagram.com/elio_lv"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6 billing-details">
                    <h3 class="text-left no-margin-top">Book A Private Event</h3>
                    <form class="contact-form" id="contactForm" action="php/contact.php" method="post">
                        <div class="form-group">
                            <input class="form-control" name="name" id="name" placeholder="Full Name" type="text" required="required" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="company" id="company" placeholder="Company" type="text" />
                        </div>
                        <div class="form-group">
                          <select class="form-control" name="party-size" id="party-size" type="text" required="required" />
                            <option selected>Party Size...</option>
                            <option value="2">2 Guests</option>
                            <option value="3">3 Guests</option>
                            <option value="4">4 Guests</option>
                            <option value="5">5 Guests</option>
                            <option value="6">6 Guests</option>
                            <option value="7">7 Guests</option>
                            <option value="8">8 Guests</option>
                            <option value="9">9 Guests</option>
                            <option value="10">10 Guests</option>
                            <option value="11">11 Guests</option>
                            <option value="12">12 Guests</option>
                            <option value="13">13 Guests</option>
                            <option value="13+">13+ Guests</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" id="email" placeholder="E-Mail Address" type="text" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="date" class="form-control" id="datepicker" placeholder="Pick a date" title="Please choose a date" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="timepicker" name="time" placeholder="Pick a time" title="Choose Preferred Time" required>
                        </div>
                        <button class="btn btn-default btn-lg btn-block" id="js-contact-btn">Send Inquiry</button>
                    </form>
                    <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
