@extends('frontend.layouts.master')

@section('content')

    <div class="banner-area contact">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>SA Abacus Near Me</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}"> Home </a>
                                <i class="flaticon-fast-forward"></i>
                                <p class="active">Near Me</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="section-wrapper-inner-main ng-scope mt-4 mb-4">
        <div class="container mb-5">
            <div class="row ">
                <div class="col-lg-6 col-md-12 ">
                    <div class="text-background">
                        <h1>Head Office of Subiksham Academy</h1>
                    </div>
                </div>
            </div>
            <div class="row main-branch">
                <div class="col-lg-6 col-md-12">
                    <div class="main-branch-card" >
                        <h4 class="mb-3 location_names">Subiksham Abacus - Mudaliarpet</p>
                        <p class="location_address">9, Rajarajeswari street 
                            Thamizh thai nagar,
                            Uppalam Road,
                            Mudaliarpet,Puducherry.</h6>
                        <p  class="location_address">Puducherry - 605004.</p>
                        <p  class="location_address">Contact: 90925 76160,9994037724.</p>
                     
                    </div>
                </div>
               
            </div>
           
        </div>
    </section>

    <section class="section-wrapper-inner-main mt-4" style="align-items: center; padding-bottom:50px;">
        <div class="container">
            <div class="col-lg-12 mx-auto">
                <h3  class="landmark_search_name">Enter your Address
                    or Landmark to get the Nearest Subiksham Abacus Centre</h3>
                    <div style="padding: 0 18px;" class="col-lg-9 mx-auto">
                        <form action="{{ route('search') }}" method="GET">
                            <input type="text" name="query" class="search-input ng-untouched pac-target-input" id="pac-input" placeholder="Search Box" autocomplete="off">
                            {{-- <button type="submit">Search</button> --}}
                        </form>
                    </div>
                    
                <div style=" padding: 0 18px;">
                    <div class="row">
                        <div class="col-sm-12">
     
                        </div>
                    </div>
                    <div class="row">
                      

                        @if($searchPerformed) 
                            @if(!$branches->isEmpty())
                                @foreach ($branches as $branch)
                                    <div class="col-lg-6 col-md-12 ng-scope">
                                        <div class="resu-card">
                                            <h4 class="mb-3 location_names">{{ $branch->branch_name}}</h4>
                                            <p class="location_address">{{ $branch->address}}</p>
                                            {{-- <p class="location_address">{{ $branch->state}} - {{ $branch->postal_code}}</p>
                                            <p class="location_address">Contact: {{ $branch->contact}}</p>
                                            <p class="res-kms location_address">{{ rtrim(rtrim(number_format($branch->kms, 2), '0'), '.') }}Km</p> --}}
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="search_not_found" style="display: flex;
                                align-items: center;
                                justify-content: center;">Search not found</p>
                            @endif
                        @endif


                       
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection