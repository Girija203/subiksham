@extends('frontend.layouts.master')

@section('content')

<div class="banner-area about">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Become Our Franchise</h2>
                    <ul>
                        <li>
                            <a href="{{route('home')}}"> Home </a>
                            <i class="flaticon-fast-forward"></i>
                            <p class="active"> SA Abacus Franchise</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="section-wrapper-inner-main ng-scope mt-4">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-md-12 mb-3">
                <div class="text-background">
                    <h1>Become a Subiksham Abacus Franchise</h1>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-6 col-md-12 mb-3">
                <div class="section-wrapper-inner-main-showcase">
                    <h3 style="font-weight: 700">If you are a passionate individual looking to start a business
                        but are not sure yet because of the following reasons?</h3>
                    <ul class="h-li">
                        <li> Not sure of what business to invest in</li>
                        <li> Investing in a business is risky</li>
                        <li> Not sure on the Return of Investment</li>
                        <li> No work/life Balance</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-3">
                <!-- <div style="padding: 0 18px">
                        <iframe width="100%" height="350px" src="https://www.youtube.com/embed/ZxaKb_u7oXM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div> -->
                <div class="subiksham_video">
                    <video src="./user/assets/video/subiksham.mp4" class="sa_video" width="100%" controls></video>
                </div>
            </div>

        </div>
        <div class="row ">
            <div class="col-sm-12 mb-3 text-center">
                <div class="mt-3" style="padding: 0 18px">
                    {{-- <a href="contact.html" id="feb-own-becom-fran" type="button"
                        class="btn btn-light btn-default-override pr-2">Apply for a franchise – Register
                        here!</a> --}}
                </div>
            </div>

        </div>
    </div>
</section>


<section class="section-wrapper-inner-main ng-scope mt-4">
    <div class="container">
        <div class="text-background-km">
            <h1>Why should you become a <b>Subiksham Abacus Franchisee</b>?</h1>
        </div>
        <div class="row ">
            <div class="col-sm-10 mx-auto">
                <div class="section-wrapper-inner-main-showcase">
                    <h3>1. Not sure of what business to Invest In</h3>
                    <p style="" class="mb-5 sa_franchisee">
                        Education is one of the most stable businesses to invest in. Parents are also keen to
                        develop additional skills in their children and the Subiksham Abacus programme is one of the
                        most powerful skill development programmes for children in their primary schooling
                        years.
                    </p>
                    <h3 style="font-weight: 700">2. Low-Risk business</h3>
                    <p style="" class="mb-5 sa_franchisee">
                        In addition to the lower initial investment, the Subiksham Abacus business has been stable for
                        over 13 years, and most importantly, we have trained over 1000+ childrens, and all are top-class students in mathematics.
                    </p>
                    <div class="my-3 text-center">
                        {{-- <a href="franchise-enroll" id="feb-own-low-risk" type="button"
                            class="btn btn-light btn-default-override pr-2">Apply for a franchise – Register
                            here!</a> --}}
                    </div>

                    <h3 style="font-weight: 700">INVESTMENT</h3>
                    <div style="padding: 0 18px">
                        <table class="table table-bordered cor-table">
                            <thead>
                                <tr>
                                    <th scope="col">Metro Towns</th>
                                    <th scope="col">Non-Metros</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>An overall investment between 6 to 8 lakhs would include the Franchisee
                                        fee of Rs 1.4 lakhs. <br>* Includes one free Course Instructor training
                                    </td>
                                    <td>An overall investment between 3.5 to 5 lakhs would include the
                                        Franchisee fee of Rs 1.2 lakhs.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 style="font-weight: 700">3. Steady return on Investment</h3>
                    <p style="padding: 0 18px; line-height: 1.9;" class="mb-5">And that too, at a short
                        time-span! <br><br>In both Metros and Non-Metros, you can breakeven in 4-6 months and
                        your income could be as over 1.25 L a month in a Metro and around 75000 a month in a
                        non-Metro within a year/year and a half. </p>

                    <h3 style="font-weight: 700;text-align: center;">Did you know? Most franchisees have been for more
                        than 12 years with SA!</h3>
                    <p style="padding: 0 18px; line-height: 1.9;" class="mb-5"> </p>

                    <div class="my-3 text-center">
                        {{-- <a href="franchise-enroll" id="feb-own-steady-return" type="button"
                            class="btn btn-light btn-default-override pr-2">Apply for a franchise – Register
                            here!</a> --}}
                    </div>

                    <h3 style="font-weight: 700">4. Work-Life Balance</h3>
                    <p style="" class="mb-5 sa_franchisee">We at Subiksham Abacus believe in hard
                        work, no doubt. But also we are one of the finest organizations that value family life
                        as a critical component. <br><br>Your work-life balance is superb being a Subiksham abacus
                        franchisee, still, you can become a successful, high-earning entrepreneur. </p>



                    <h3 style="font-weight: 700">Support from Subiksham</h3>
                    <p style="" class="mb-5 sa_franchisee">We promise we shall support you
                        in all your new creative thinking in developing the business in your allotted areas.
                        <br>We have a competent channel team who shall be available as and when you require in
                        case of any operational and marketing support which is required.
                    </p>


                    <h3 style="font-weight: 700">Low-cost Real Estate</h3>
                    <p style="" class="mb-5 sa_franchisee">
                        In addition to the lower initial investment, the Subiksham Abacus business has been stable for
                        over 17 years, and most importantly, we have trained over 1000+ childrens, and all are top-class students in mathematics.
                    </p>
                    <div class="my-3 text-center">
                        {{-- <a href="franchise-enroll" id="feb-own-low-cost-real" type="button"
                            class="btn btn-light btn-default-override pr-2">Apply for a franchise – Register
                            here!</a> --}}
                    </div>

                    <h3 style="font-weight: 700">Investment in real estate is marginally low for Subiksham Abacus
                        franchisees!</h3>
                    <div style="padding: 0 18px">
                        <table class="table table-bordered cor-table">
                            <thead>
                                <tr>
                                    <th scope="col">Area Recommended</th>
                                    <th scope="col">Location Preferred</th>
                                    <th scope="col">Interiors &amp; Furniture</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>600 - 800 sqft (2 classrooms, reception, and toilet facilities)</td>
                                    <td>Commercial or semi-commercial. Easy access and Visibility potential.
                                    </td>
                                    <td>Signage Board, Reception &amp; Classroom branding as per our norms.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-6" style="text-align: center; place-items: center; justify-content: center; align-self: auto;">

                </div> -->
        </div>
    </div>

</section>


<section class="section-wrapper-three ng-scope" style="padding: 50px 0;">
    <div class="container">
        <div class="row " style="display: flex; justify-content: center; align-items: center;">
            <div class="col-sm-12">
                <!-- Hidden video div -->
                <div class="row col-lg-12 col-md-12">
                    <div class="text-background">
                        <h1>Franchisee Testimonial</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-12 mx-auto">


                        <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel"
                            style="padding: 40px 0 0;">
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <div>
                                            <div class="curriculam-card-circular">
                                                <div class="curriculam-card-circular-cont"
                                                    style="background-image: url(./user/assets/images/testimonilas/img4.png); background-size: cover;">
                                                </div>
                                            </div>
                                            <h4 class="franchisee_Testimonial_name">Seema Vij
                                                <br><span style="font-weight: 300;">Franchisee, <br> Mumbai,
                                                    India</span>
                                            </h4>
                                        </div>
                                        <div>
                                            <h3 style="" class="franchise_description">
                                                " I initially grabbed the Subiksham Abacus opportunity to spice
                                                up my free weekends and also inject some money into my bank
                                                balance. As things started looking very positive, within two
                                                years I boldly quit my job to embrace Subiksham as my full-time
                                                option. I’m associated for 18 with Subiksham Abacus. For people
                                                looking for a lucrative business opportunity, I urge you not to
                                                think any further, you’re in the right place! "
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div style="display: flex;align-items: center; justify-content: center;">
                                        <div>
                                            <div class="curriculam-card-circular">
                                                <div class="curriculam-card-circular-cont"
                                                    style="background-image: url(./user/assets/images/testimonilas/img4.png); background-size: cover;">
                                                </div>
                                            </div>
                                            <h4 class="franchisee_Testimonial_name">Dr. Rinku
                                                S. Goel <br><span style="font-weight: 300;">Franchisee, <br>
                                                    Muzaffarnagar, India.</span></h4>
                                        </div>
                                        <div>
                                            <h3 class="franchise_description">
                                                " Subiksham Abacus came as a silver lining in my life. I am
                                                enjoying the challenges involved in this business. And the
                                                heartiest satisfaction is felt watching kids turning into Human
                                                Calculators. Loving the feeling of being an Entrepreneur. "
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item active">
                                    <div style="display: flex;align-items: center; justify-content: center;">
                                        <div>
                                            <div class="curriculam-card-circular">
                                                <div class="curriculam-card-circular-cont"
                                                    style="background-image: url(./user/assets/images/testimonilas/img6.png); background-size: cover;">
                                                </div>
                                            </div>
                                            <h4 style="" class="franchisee_Testimonial_name">Neera
                                                Sawhani<br><span style="font-weight: 300;">Franchisee, <br>
                                                    Akola, India.</span></h4>
                                        </div>
                                        <div>
                                            <h3 class="franchise_description">
                                                " Subiksham Abacus creates a great impact on the development of
                                                children. The changes and the improvement which the programme
                                                ushers in children automatically changes the life of an
                                                Franchisee. It introduces women like me to a world of total
                                                contentment in terms of passion for teaching and so also
                                                professional entrepreneurship. "
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center p-4" style="position: relative">
                    <a class="" href="#carouselExampleControls3" role="button" data-bs-slide="prev"
                        style="color: transparent;">
                        <img src="{{asset('user/./assets/images/Path 277.png')}}" width="30">
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <img src="{{asset('user/./assets/images/Line 6.png')}}">
                    <a class="" href="#carouselExampleControls3" role="button" data-bs-slide="next"
                        style="color: transparent;">
                        <img src="{{asset('user/./assets/images/Path 276.png')}}" width="30">
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-wrapper-three ng-scope" style="padding: 50px 0">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 col-md-12">
                <div class="text-background-sm">
                    <h1>Hiring Teachers!</h1>
                </div>
                <div class="section-wrapper-inner-main-showcase mt-3">
                    <h3 style="font-weight: 700">Do you share our passion? </h3>
                    <h3 style="font-weight: 700">Then come, teach at Subiksham Abacus. We have more than 5000-course
                        instructors across India!</h3>
                    <p style="padding: 0 18px; line-height: 1.9;" class="">Are you a great teacher who wants
                        to leave a lasting impact on children? </p>
                    <ul style="padding: 0 100px; line-height: 1.9;" class="h-li mb-4">
                        <li>Become a mentor at Subiksham Abacus and help children to develop their life important
                            skills so that you sculpt a great future!</li>
                        <li>If you have a thirst for knowledge and the desire to enhance your mentoring skills,
                            then Subiksham Abacus is for you.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="section-wrapper-inner-main-showcase mt-3">
                    <h3 style="font-weight: 700">Salary</h3>
                    <p style="padding: 0 18px; line-height: 1.9;" class="mb-5">Your remuneration will depend on
                        the city and the
                        number of students you will handle.</p>

                    <h3 style="font-weight: 700">Training</h3>
                    <ul style="padding: 0 36px; line-height: 1.9;" class="h-li mb-5">
                        <li>28 days of training</li>
                        <li>Spread across eight levels</li>
                        <li>Training fee charged for foundation and
                            advance courses</li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-6 col-md-12"
                style="text-align: left; place-items: center; justify-content: center; align-self: center;">
                <div style="padding: 0 18px">
                    <h1 class="h-highlight" style="color: black;">Eligibility Criteria:</h1>
                    <p style="padding: 0 18px; line-height: 1.9;">You can apply,
                        if you have the following qualities.</p>
                    <ul class="h-li">
                        <li>Passion for imparting knowledge
                            to children</li>
                        <li>Flair for updating your knowledge
                            constantly</li>
                        <li>Ability to work on flexible timings</li>
                        <li>Willingness to work during weekends </li>
                        <li>Great communication skills</li>
                    </ul>
                </div>
                <div class="my-3" style="padding: 0 18px; line-height: 1.9;">
                    {{-- <a href="teacher-enroll" id="teb-own-hirin-teacher" type="button"
                        class="btn btn-light btn-default-override pr-2">Apply to become a teacher – Register
                        here!</a> --}}
                </div>
            </div>
        </div>


    </div>
</section>


@endsection