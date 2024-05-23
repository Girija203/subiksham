@extends('frontend.layouts.master')

@section('content')

<section class="slider-area">
    <div class="home-slider owl-carousel owl-theme">
        <div class="single-slider single-slider-bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center ">
                            <div class="col-lg-12 text-center">
                                <div class="slider-tittle one">
                                    <h1>
                                        We Focus on Your <span>Children’s Development</span>
                                    </h1>
                                    <p>
                                        <b>SUBIKSHAM ACADEMY</b> is a well known best abacus training classes in
                                        Pondicherry and Tamil nadu, Our program has empowered numerous young minds,
                                        enhancing their mathematical prowess and problem-solving abilities by
                                        twofold.We designed our training method in a very easy and fun way.
                                    </p>
                                </div>
                                <div class="slider-btn bnt1 text-center">
                                    <!-- <a href="admission.html" class="box-btn">Admission</a> -->
                                    <a href="{{route('courses')}}" class="border-btn">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider single-slider-bg-2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 text-center">
                                <div class="slider-tittle two">
                                    <h1>
                                        We Focus on Your <span>Children’s Development</span>
                                    </h1>
                                    <p>
                                        <b>SUBIKSHAM ACADEMY</b> is a well known best abacus training classes in
                                        Pondicherry and Tamil nadu, Our program has empowered numerous young minds,
                                        enhancing their mathematical prowess and problem-solving abilities by
                                        twofold.We designed our training method in a very easy and fun way.
                                    </p>
                                </div>
                                <div class="slider-btn bnt2">

                                    <a href="{{route('courses')}}" class="border-btn">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="service-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-service text-center">
                    <div class="service-icon">
                        <i class="flaticon-clock"></i>
                    </div>
                    <div class="service-content">
                        <h2>Opening Hours</h2>
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
                        <h2>Address</h2>
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
                        <h2>Phone</h2>
                        <p>+91 9994037724</p>
                        <p>+91 9092576160</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="shape-ellips">
    <img src="{{asset('user/assets/images/shape.png')}}" alt="shape" />
</div>

<section class="home-ragular-course pb-100">
    <div class="container">
        <div class="section-tittle text-center">
            <h2>
                Our Teaching Methods and Levels</h2>
            <p>
                Subiksham academy has 13+ years experience in the abacus field and we trained more than 1000+
                childrens. Our training starts from 6 to 12 years of childrens, our institute offers a comprehensive
                four-stage abacus training program. Join us in sculpting young minds for a brighter numerical
                future!
            </p>
        </div>
        <div class="row">
            <div class="row">
                @foreach($course as $courses)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-ragular-course">
                            <div class="course-img">
                                <img src="{{ asset('storage/' . $courses->image) }}" alt="{{ $courses->title }}">
                                <h2>{{ $courses->title }}</h2>
                            </div>
                            <div class="course-content ">
                                <div class="two-line-ellipsis">
                                    <p class=" ">
                                        {!! $courses->course_detail !!}
                                    </p>
                                </div>

                                <!-- Link to the singleclass route with course ID -->
                                <a href="{{ route('singleclass', ['slug' => $courses->slug]) }}" class="border-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
</section>


<section class="choose-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 ps-0">
                <div class="home-choose-img">
                    <img src="{{asset('user/assets/images/abacus/one.jpg')}}" alt="choose" style="padding: 20px;" />
                </div>
            </div>
            <div class="col-lg-6 home-choose">
                <div class="home-choose-content">
                    <div class="section-tittle">
                        <h2>Why Choose Subiksham Abacus?</h2>
                        <p>
                            Subiksham academy is the one of the most popular abacus training academy in Pondicherry.
                            We develop your children's mental power to 5 times better, Our meticulously crafted
                            course ensures easy comprehension of abacus concepts for all children with comprehensive
                            study materials and more.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-12 col-md-5">
                            <ul class="choose-list-left">
                                <li><i class="flaticon-check-mark"></i>Top 10 Rated School</li>
                                <li> <i class="flaticon-check-mark"></i>Great Behaviour</li>
                                <li><i class="flaticon-check-mark"></i>Helpful & Kindnesss</li>

                            </ul>
                        </div>
                        <div class="col-lg-8 col-sm-12 col-md-7">
                            <div class="choose-list-home">
                                <ul>
                                    <li><i class="flaticon-check-mark"></i>Learning With Fun</li>
                                    <li><i class="flaticon-check-mark"></i>Children Safety</li>
                                    <li> <i class="flaticon-check-mark"></i>Eco Freindly Environment</li>

                                </ul>
                            </div>
                        </div>
                        <!-- <a href="about.html" class="box-btn">Know More</a> -->
                        <button class="learn-more mt-3">
                            <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                            </span>
                            <a href="{{route('about')}}" class="button-text">Know More</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-wrapper-second ng-scope">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-md-12">
                <div class="text-background">
                    <h1 style="color: white;">How does Subiksham Abacus help Children</h1>
                </div>
                <div>
                    <h3 class="abacus_help_children_paragraph">
                        We enhance your children's calculation abilities, ensuring both speed and precision. Our
                        abacus syllabus covers all mathematical operations such as addition, subtraction,
                        multiplication and division, enabling mastery of 3 to 4 digit calculations in 10 seconds.
                        Enroll with us and witness your child become a math champion.

                    </h3>

                    <div class="row" style="padding: 10px 25px;">
                        <div class="col-sm-4">
                            <div class="curriculam-card-circular-ima">
                                <div class="curriculam-card-circular-cont-ima">
                                    <img src="{{asset('user/./assets/images/Group 390.png')}}">
                                </div>
                            </div>
                            <h3 style="text-align: center; font-size: 15px; padding: 5px; font-weight: 600;">Abacus
                                Training</h3>
                        </div>
                        <div class="col-sm-4">
                            <div class="curriculam-card-circular-ima">
                                <div class="curriculam-card-circular-cont-ima">
                                    <img src="{{asset('user/./assets/images/Group 55.png')}}">
                                </div>
                            </div>
                            <h3 style="text-align: center; font-size: 15px; padding: 5px; font-weight: 600;">Better
                                Memory</h3>
                        </div>
                        <div class="col-sm-4">
                            <div class="curriculam-card-circular-ima">
                                <div class="curriculam-card-circular-cont-ima">
                                    <img src="{{asset('user/./assets/images/Group 56.png')}}">
                                </div>
                            </div>
                            <h3 style="text-align: center; font-size: 15px; padding: 5px; font-weight: 600;">Speed
                                writing</h3>
                        </div>
                    </div>

                    <div class="mt-3" style="padding: 0 18px">
                        {{-- <a href="contact.html" id="btc-why-SA-help-children" type="button"
                            class="btn btn-light btn-default-override pr-2">Book a Free Trial Class</a> --}}
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-12 " style="display: flex; align-items: center; justify-content: center">
                <div class="SA_abacus_programme">
                    <h3 style="font-size: 16px;
                                padding: 0 18px;
                                font-weight: 500;
                                line-height: 1.5;">How subiksham academy develop your children's abacus knowledge
                    </h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="desc-contain-lef">
                                <img src="{{asset('user/./assets/images/Group%20178.png')}}">
                                <p>Deep Concentration</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="desc-contain-lef">
                                <img src="{{asset('user/./assets/images/17.png')}}">
                                <p>Eliminate the fear of problem solving </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="desc-contain-lef">
                                <img src="{{asset('user/./assets/images/brain.png')}}">
                                <p>Gives a strong foundation in Math at a young age</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="desc-contain-lef">
                                <img src="{{asset('user/./assets/images/Group%20135.png')}}">
                                <p>Improves visual Memory</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="desc-contain-lef">
                                <img src="{{asset('user/./assets/images/12.png')}}">
                                <p>High level of listening skills</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="desc-contain-lef">
                                <img src="{{asset('user/./assets/images/Group%20125.png')}}">
                                <p>Children learn to destress and activate their brain</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="desc-contain-lef">
                                <img src="{{asset('user/./assets/images/Group 154.png')}}">
                                <p>Improves calculation speed and accuracy</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="desc-contain-lef">
                                <img src="{{asset('user/./assets/images/Group 165.png')}}">
                                <p>No need to use calculator lifelong</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="home-admission">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-addmission">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="admission-circle">
                                <h2>Admission <span> on Going</span></h2>
                                <div class="admission-shape1">
                                    <img src="{{asset('user/assets/images/admission/shape1.png')}}" alt="shape" />
                                </div>
                                <div class="admission-shape2">
                                    <img src="{{asset('user/assets/images/admission/shape2.png')}}" alt="shape" />
                                </div>
                                <div class="admission-shape3">
                                    <img src="{{asset('user/assets/images/admission/shape3.png')}}" alt="shape" />
                                </div>
                                <div class="admission-shape4">
                                    <img src="{{asset('user/assets/images/admission/shape4.png')}}" alt="shape" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="admission-content">
                                <h2>Spring Term Admission for All Standard</h2>
                                <p>Admission will going on</p>
                                <ul class="admission-list">
                                    <li>
                                        <p id="days">21</p>
                                        <span>Days</span>
                                    </li>
                                    <li>
                                        <p id="hours">15</p>
                                        <span>Hours</span>
                                    </li>
                                    <li>
                                        <p id="minutes">10</p>
                                        <span>Minute</span>
                                    </li>
                                    <li>
                                        <p id="seconds">50</p>
                                        <span>Seconds</span>
                                    </li>
                                </ul>
                                <button class="Admission_btn mt-4"><a href="{{route('contact')}}">Contact</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <span class="loon">
                        <img src="{{asset('user/assets/images/admission/shape5.png')}}" alt="shape" />
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="home-special-course">
    <div class="container-fluid">
        <div class="section-tittle text-center">
            <h2>Our Special Classes</h2>
            <p>
                Our special class provide tailored support to your children on advanced techniques beyond the
                standard curriculum. These classes may include speed calculation, brain gymnastic and more.
            </p>
        </div>
        <div class="home-course-slider owl-carousel owl-theme">
            <div class="single-home-special-course">
                <div class="course-img">
                    <img src="{{asset('user/assets/images/courses/abacus.jpg')}}" alt="course" />

                    <div class="course-content">
                        <h2>Kutty's Abacus</h2>
                        <p>
                            Abacus training we have laid a solid foundation.Our program ensures a
                            empowering with confidence.
                        </p>

                    </div>
                </div>
            </div>
            <div class="single-home-special-course">
                <div class="course-img">
                    <img src="{{asset('user/assets/images/courses/VEDIC MATHS.jpg')}}" alt="course" />
                    <div class="course-content">
                        <h2>Vedic Maths</h2>
                        <p>
                            Vedic mathematics is based on a set of 16 aphoristic mathematical formulas, known as
                            sutras.
                        </p>

                    </div>
                </div>
            </div>
            <div class="single-home-special-course">
                <div class="course-img">
                    <img src="{{asset('user/assets/images/courses/MID BRAIN ACTIVATION.jpg')}}" alt="course" />
                    <div class="course-content">
                        <h2>MID Brain Activation</h2>
                        <p>

                            Midbrain activation refers to a series of techniques or exercises aimed at stimulating
                            the midbrain.

                        </p>

                    </div>
                </div>
            </div>
            <div class="single-home-special-course">
                <div class="course-img">
                    <img src="{{asset('user/assets/images/courses/daycare.jpg')}}" alt="course" />
                    <div class="course-content">
                        <h2>Day Care</h2>
                        <p>
                            Our expert daycare team will handle and supervise your children, ensuring their healthy
                            growth.
                        </p>
                        <!-- <a href="courses.html" class="box-btn">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="course-slider-area">
    <div class="container">
        <div class="course-slider owl-carousel owl-theme">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="course-slider-img">
                        <img src="{{asset('user/assets/images/abacus/group img.jpg')}}" alt="course" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="course-slider-content">
                        <h2>Our Team</h2>
                        <p>
                            Our Team Combined with young and experience trainers, they will handle you childrens very
                            well in all suitation. They provide exceptional care and specialized teaching methods,
                            offering tips and tricks to help your children excel in math.
                        </p>
                        <!-- <div class="course-slider-btn">
                            <a href class="box-btn">Registation Now</a>

                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="course-slider-img">
                        <img src="{{asset('user/assets/images/abacus/two.jpeg')}}" alt="course" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="course-slider-content">
                        <h2>Annual Program</h2>
                        <p>
                            Every year subiksham academy celebrate its annual year program to encourage students and we
                            bring out your children hidden talent to the world.
                        </p>
                        <div class="course-slider-btn">
                            {{-- <a href="contact.html" class="box-btn">Registation Now</a> --}}

                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="course-slider-img">
                        <img src="{{ asset('user/assets/images/abacus/teachers.jpeg') }}" alt="course" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="course-slider-content">
                        <h2>Course Completion</h2>
                        <p>

                            We guide our students every step of the way, from the beginning to the end of their course
                            completion journey. Over the past 13 years, we've trained over 1000 students, and now each
                            one excels in mathematics.
                        </p>

                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="course-slider-img">
                        <img src="{{ asset('/user/assets/images/abacus/one.jpeg') }}" alt="course" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="course-slider-content">
                        <h2>Course Complition</h2>
                        <p>

                            We guide our students every step of the way, from the beginning to the end of their course
                            completion journey. Over the past 13 years, we've trained over 1000 students, and now each
                            one excels in mathematics.
                        </p>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<!-------teachers----->
<section class="home-teachers-slider mb-5 mt-4">
    <div class="container mb-4">
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