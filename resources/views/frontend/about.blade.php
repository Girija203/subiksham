@extends('frontend.layouts.master')

@section('content')


<div class="banner-area about">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>About Us</h2>
                    <ul>
                        <li>
                            <a href="{{route('home')}}"> Home </a>
                            <i class="flaticon-fast-forward"></i>
                            <p class="active"> About</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="about-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-12">
                <div class="about-contnet">
                    <div class="text-background">
                        <h1 style="color: white;" class="about_contnet_title">SUBIKSHAM ACADEMY</h1>
                    </div>
                    <p>
                        Subiksham Abacus is part of Subiksham Academy India. The programme was started in 2011. Now
                        Subiksham Abacus has grown into a large team of passionate professionals who believe that
                        every child is potentially smart. We believe that systematic training can make a huge impact
                        on every child. We have offices across all major cities across India and we are constantly
                        learning to improve ourselves. We blend traditional abacus education with innovative
                        teaching methodologies. Abacus training boosts brain power, increases and strengthens the
                        math skill. The optimal age range for children to learn abacus is between 6 and 14 years.
                    </p>
                </div>

            </div>
            <div class="col-lg-6 col-md-12">
                <div class="single-about">
                    <div class="about-img">
                        <img src="{{asset('user/assets/images/abacus/pleased.jpg')}}" alt="about" />
                    </div>

                    <div class="about-btn mt-3">
                       
                        {{-- <a href="https://youtu.be/ZxaKb_u7oXM?si=aBaA3Y0CwPwnUmh-" class="video-pop" target="blank">
                            <span class="video"> <i class="fa fa-play"></i> </span> Quick View at SA
                            
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="choose-area">
    <div class="container-fluid ">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="home-choose-img">
                    <img src="{{asset('user/assets/images/abacus/medium.jpg')}}" alt="choose" />
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row" style="margin: 10px;">

                    <div class="col-lg-12 col-md-12">
                        <div class="">
                            <h5>Our Vision</h5>

                            <p style="text-indent: 10px;">
                                Our vision is to achieve world-class recognition in abacus education and enhance our
                                student’s memory power to higher levels of concentration.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 mt-3">
                        <div class="">
                            <h5>Our Values</h5>
                            <p style="text-indent: 10px;">
                                Unlock the power of mental math and elevate your child's academic journey with our
                                comprehensive abacus course. Designed to cultivate sharp minds and accuracy
                                mathematical excellence with ease.

                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-------teachers----->
<section class="home-teachers-slider mb-5 mt-4">
    <div class="container">
        <div class="section-tittle text-center">
            <h2>Honorable Teachers</h2>
            <p>
                A Abacus course is a class offered by a school. These courses are <br> usually part of a
                program leading.
            </p>
        </div>

        <div class="teachers-slider">
            <div class="single-home-teacher">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">LAKSHMI. V</h5>
                        <h6 class="card-subtitle mb-2 text-muted">MUDALIARPET </h6>
                        <p class="card-text">Contact-No:90925 76160 ,
                            9994037724</p>
                    </div>
                </div>
            </div>
            <div class="single-home-teacher">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">KRISHNA PRIYA</h5>
                        <h6 class="card-subtitle mb-2 text-muted">MOOLAKULAM </h6>
                        <p class="card-text">Contact-No:90037 64974 ,
                            95979 75774 </p>
                    </div>
                </div>
            </div>
            <div class="single-home-teacher">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">KRISHNA PRIYA</h5>
                        <h6 class="card-subtitle mb-2 text-muted">GORIMEDU </h6>
                        <p class="card-text">Contact-No:-90037 64974 ,
                            95979 75774 </p>
                    </div>
                </div>
            </div>
            <div class="single-home-teacher">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">T. ANITHA</h5>
                        <h6 class="card-subtitle mb-2 text-muted">KANNIKOIL </h6>
                        <p class="card-text">Contact-No:9894816005 </p>
                    </div>
                </div>
            </div>
            <div class="single-home-teacher">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CHITHRA PANDIYAN</h5>
                        <h6 class="card-subtitle mb-2 text-muted">LAWSPET </h6>
                        <p class="card-text">Contact-No:8015693732</p>
                    </div>
                </div>
            </div>
            <div class="single-home-teacher">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">JOTHI</h5>
                        <h6 class="card-subtitle mb-2 text-muted">LAWSPET KURINJINAGAR </h6>
                        <p class="card-text">Contact-No:9943810438</p>
                    </div>
                </div>
            </div>
            <div class="single-home-teacher">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">SATHIYA PRIYA</h5>
                        <h6 class="card-subtitle mb-2 text-muted">THAVALAKUPPPAM </h6>
                        <p class="card-text">Contact-No:9791969785</p>
                    </div>
                </div>
            </div>
            <div class="single-home-teacher">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">VADIVAMBIGAI</h5>
                        <h6 class="card-subtitle mb-2 text-muted">THIRUVANDARKOIL </h6>
                        <p class="card-text">Contact-No:9514443508 </p>
                    </div>
                </div>
            </div>
            <div class="single-home-teacher">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">SHANMUGAPRIYA </h5>
                        <h6 class="card-subtitle mb-2 text-muted">VILLIANUR </h6>
                        <p class="card-text">Contact-No:8667735058</p>
                    </div>
                </div>
            </div>
            <div class="single-home-teacher">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">VADIVAMBIGAI</h5>
                        <h6 class="card-subtitle mb-2 text-muted">ARIYUR </h6>
                        <p class="card-text">Contact-No:9944146543</p>
                    </div>
                </div>
            </div>
            <div class="single-home-teacher">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">RUBY</h5>
                        <h6 class="card-subtitle mb-2 text-muted">THIRUKKANUR </h6>
                        <p class="card-text">Contact-No:7094206321</p>
                    </div>
                </div>
            </div>
            <div class="single-home-teacher">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">UMA RAMKUMAR </h5>
                        <h6 class="card-subtitle mb-2 text-muted">VILLUPURAM </h6>
                        <p class="card-text">Contact-No:9791365105,8248158423</p>
                    </div>
                </div>
            </div>
            <div class="single-home-teacher">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">SHANTHA</h5>
                        <h6 class="card-subtitle mb-2 text-muted">HOSUR </h6>
                        <p class="card-text">Contact-No:9159148989</p>
                    </div>
                </div>
            </div>
            <div class="single-home-teacher">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CHAMUDESWARI</h5>
                        <h6 class="card-subtitle mb-2 text-muted">MUGLIVAKKAM CHENNAI </h6>
                        <p class="card-text">Contact-No:9791177492</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------end------>



@endsection