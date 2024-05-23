@extends('frontend.layouts.master')

@section('content')

<div class="banner-area class-details">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>{{ $course->title }}</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}"> Home </a>
                            <i class="flaticon-fast-forward"></i>
                            <a href="{{ route('singleclass', ['slug' => $course->slug]) }}"> Courses</a>
                            <i class="flaticon-fast-forward"></i>
                            <p class="active">{{ $course->title }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="single-class-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="single-class">
                    <div class="class-img">
                        <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" alt="about" width="80%">
                    </div>
                    <div class="class-content mt-4">
                        <h3 class="Grand_master_module">{{ $course->title }}</h3>
                        <ul class="h-li">
                            <li>{!! $course->course_detail !!}</li>
                        </ul>
                    </div>
                    <div class="class-btn">
                        <!-- Link to the admission page -->
                        {{-- <a href="{{ route('home') }}" class="box-btn">Get Admission</a> --}}
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div style="padding: 0 18px">
                    <iframe width="100%" height="350px" src=" {{$course->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="section-wrapper-three-custom mb-4">
        <div class="container">
            <div class="row mt-4">
                {{-- <div class="col-lg-6 col-md-12 col-sm-12">
                    <div style="padding: 0 18px">
                        <h1 class="h-highlight">Course Details</h1>
                        <ul class="h-li">
                            <li>Age Group: 8-12 / Classes 3 to 7</li>
                            <li>Number of levels: 11

                                <br><span class="mx-5">Foundation - 4</span>

                                <br><span class="mx-5">Advanced - 4</span>

                                <br><span class="mx-5">Grand Master - 3</span>
                            </li>

                            <li>Duration of one level - 13-16 weeks</li>
                            <li>Number of sessions per week - 1</li>
                            <li>Duration of the session - 2 hours and 15 minutes</li>
                            <li>Maximum number of students per class - 15</li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div style="padding: 0 18px">
                        <h1 class="h-highlight">Course Features</h1>
                        <div style="padding: 0 18px">
                            <div style="display: flex; align-items: center;">
                                <div>
                                    <div class="curriculam-card-circular-icon">
                                        <div class="curriculam-card-circular-cont-icon"
                                            style="background-image: url('{{ asset('user./assets/images/course/abacus-icon-.jpg') }}');">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="course_features_titles">Abacus training for
                                        visualising numbers in bead form to perform complex calculations
                                    </h3>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <div>
                                    <div class="curriculam-card-circular-icon">
                                        <div class="curriculam-card-circular-cont-icon"
                                            style="background-image: url('{{ asset('user./assets/images/course/images.jpeg')}}');">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="course_features_titles">Training to perform
                                        mental arithmetic calculations using visual, auditory, and sensory inputs

                                    </h3>
                                </div>
                            </div>

                            <div style="display: flex; align-items: center;">
                                <div>
                                    <div class="curriculam-card-circular-icon">
                                        <div class="curriculam-card-circular-cont-icon"
                                            style="background-image: url('{{ asset('user./assets/images/course/df23e431e13dd224c12ac689c52251d4.png')}}');">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="course_features_titles">Specifically
                                        crafted to improve the coordination between the left and right sides of the
                                        brain


                                    </h3>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <div>
                                    <div class="curriculam-card-circular-icon">
                                        <div class="curriculam-card-circular-cont-icon"
                                            style="background-image: url('{{ asset('user./assets/images/course/arthismetic.png')}}');">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="course_features_titles">Subiksham Abacus training
                                        to improve visual memory and overall learning ability

                                    </h3>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <div>
                                    <div class="curriculam-card-circular-icon">
                                        <div class="curriculam-card-circular-cont-icon"
                                            style="background-image: url('{{ asset('user./assets/images/course/images.png')}}');">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="course_features_titles">We award
                                        certificates on the successful completion at each level

                                    </h3>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="mt-3 " style="padding: 0 18px">
                        {{-- <a href="{{route('home')}}" id="btc-header-our-course-features" type="button"
                            class="btn btn-light btn-default-override pr-2">Book a Free Trial Class</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


  @endsection