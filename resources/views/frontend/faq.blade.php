@extends('frontend.layouts.master')

@section('content')


    <div class="banner-area faq">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>FAQ</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}"> Home </a>
                                <i class="flaticon-fast-forward"></i>
                                <p class="active">FAQ</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="faq-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 faq-content">
                    <div class="faq-accordion">
                        <div class="section-tittle text-center">
                            <h2>Frequently Ask Question</h2>
                        </div>
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class="fa fa-plus"></i> What is abacus?
                                </a>
                                <p class="accordion-content show">
                                    Abacus is used to perform basic mathematical calculations like addition,
                                    subtraction, multiplication and division. Abacus class helps your children to
                                    develop mathematical skills and problem solve. Also it increases the memory power.
                                </p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-plus"></i>How can abacus improve mathematical skills?
                                </a>
                                <p class="accordion-content">
                                    Abacus courses enhance mathematical skills and provide a visual representation of
                                    number and mathematical operation. Abacus improves mental math skills and regular
                                    practice with abacus improves speed and accuracy in mathematical calculation.
                                </p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-plus"></i> At what age can a child start learning abacus?
                                </a>
                                <p class="accordion-content">
                                    The ideal age to start learning abacus is 6 to 14 years old, as children at this age
                                    have developed sufficient cognitive and motor skills to grasp the concepts and
                                    manipulate the beads effectively.
                                </p>
                            </li>
                           
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-plus"></i> What Makes Subiksham Abacus Academy Top Choice in
                                    Pondicherry?
                                </a>
                                <p class="accordion-content">
                                    Subiksham academy has 13+ years experience in the abacus field and we trained more
                                    than 1000+ childrens. Our training starts from 6 to 12 years of childrens, our
                                    institute offers a comprehensive four-stage abacus training program. Join us in
                                    sculpting young minds for a brighter numerical future!
                                </p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-plus"></i> How is Subiksham academy different from others?
                                </a>
                                <p class="accordion-content">
                                    Subiksham academy offers abacus training in international standard, our abacus
                                    training enhances children memory growth 2X times better, at the same time
                                    increasing the speed and accuracy in calculation operation. Our program provides
                                    valuable study materials and tools aimed at cultivating a strong foundation in
                                    abacus skills from the outset.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection