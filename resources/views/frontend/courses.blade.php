@extends('frontend.layouts.master')

@section('content')

    <div class="banner-area classes">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Classes</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}"> Home </a>
                                <i class="flaticon-fast-forward"></i>
                                <p class="active">Courses</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="section-wrapper-three-custom ng-scope mt-5" style="padding-bottom: 50px;">
        <div class="container">
            <div class="row ">
                <div class="col-sm-6">
                    <div class="text-background">
                        <h1 style="color: white;">Categories of Courses</h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="articles">
            @foreach($course as $courses)
            <article>
              
                <div class="article-wrapper">
                    <div class="course_img">
                        <img src="{{ asset('storage/' . $courses->image) }}" alt="{{ $courses->title }}" alt="" />
                    </div>
                    <div class="article-body ">
                        <h2>{{ $courses->title}}</h2>
                        <div class="three-lines">
                            <p>
                                {!! $courses->course_detail !!}
                            </p>
                        </div>
                        
                        <a href="{{ route('singleclass', ['slug' => $courses->slug]) }}" class="read-more">
                            Read more <span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
              
            </article>
            @endforeach
           
        </div>
    </section>


    <section class="section-wrapper-inner-main ng-scope mb-4">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="text-background">
                        <h1>Subiksham Abacus Plus </h1>
                    </div>
                    <div class="section-wrapper-inner-main-showcase">
                        <h3 style="font-weight: 700" class="mb-4">Premium Programme for an esteemed experience of
                            learning</h3>


                        <p style="line-height: 1.8; padding: 0 18px">Subiksham Abacus Plus represents an advanced
                            iteration of the Subiksham academy Abacus program, enriching the existing Subiksham abacus
                            training with distinctive enhancements and added value.</p>
                        <h3 style="font-weight: 700">Unique Features</h3>
                        <ul class="h-li">
                            <li> Two Classes of 3 hours per week</li>
                            <li>Comfortable and friendly environment</li>
                            <li> Experienced trainers</li>
                            <li> High quality curriculum and Math Techniques </li>
                        </ul>

                        <div class="mt-3 mb-4" style="padding: 0 18px">
                            {{-- <a href="contact.html" id="btc-header-our-course-plus"
                                class="btn btn-light btn-default-override pr-2">Book a Free Trial Class</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="{{asset('user/assets/images/abacus/young-cute.jpg')}}" style="padding-top: 50px;">
                </div>
            </div>
        </div>
    </section>

   @endsection