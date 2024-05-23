@extends('frontend.layouts.master')

@section('content')


<div class="banner-area contact">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact Us</h2>
                    <ul>
                        <li>
                            <a href="{{route('home')}}"> Home </a>
                            <i class="flaticon-fast-forward"></i>
                            <p class="active">Contact</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="shape-ellips-contact">
    <img src="assets/images/contact-shape.png" alt="shape" />
</div>

<div class="contact-service">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-service text-center">
                    <div class="service-icon">
                        <i class="flaticon-clock"></i>
                    </div>
                    <div class="service-content">
                        <p>Sun - Sat : 09:00AM - 06:00PM</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-service text-center">
                    <div class="service-icon">
                        <i class="flaticon-pin"></i>
                    </div>
                    <div class="service-content">
                        <p>No.9, Rajarajeswari street Thamizh thai nagar, Uppalam Road, Mudaliarpet,Puducherry-605004.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="single-service text-center sst-10">
                    <div class="service-icon">
                        <i class="flaticon-telephone"></i>
                    </div>
                    <div class="service-content">
                        <p>+91 9994037724</p>
                        <p>+91 9092576160</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="iframe-container">
           
            <iframe style="width:100%; height:500px; border:0; margin-bottom: -9px;"
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d15614.619828844348!2d79.8012511987627!3d11.929083612776054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDU1JzE3LjMiTiA3OcKwNDknMDcuMCJF!5e0!3m2!1sen!2sin!4v1716190231371!5m2!1sen!2sin"
                width="600" height="450" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
</section>


<section class="home-contact-area pb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 ps-0">
                <div class="contact-img">
                    <img src="{{asset('user/assets/images/Contactus.jpg')}}" alt="contact" style="padding: 10px;" />
                </div>
            </div>
            <div class="col-lg-6">


                @if(session('success'))
                    <div id="successAlert" class="alert alert-primary">
                        {{ session('success') }}
                    </div>
                    <script>
                        setTimeout(function () {
                            $('#successAlert').fadeOut('slow');
                        }, 8000); // 3000 milliseconds = 3 seconds
                    </script>
                @endif
                <div class="home-contact-content">
                    <h2>What Do You Want to Know?</h2>
                    <form action="{{route('contact.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="Your Name" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Your Email" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="contact" required data-error="Please enter your number"
                                        class="form-control" placeholder="Your Phone" />
                                    @error('contact')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" required
                                        data-error="Please enter your subject" placeholder="Your Subject" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" cols="30" rows="5" required
                                        data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn page-btn box-btn">
                                    Send Message
                                </button>
                                <div class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection