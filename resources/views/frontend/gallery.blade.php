@extends('frontend.layouts.master')

@section('content')


    <div class="banner-area gallery">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Gallery</h2>
                        <ul>
                            <li>
                                <a href="{{route('home')}}"> Home </a>
                                <i class="flaticon-fast-forward"></i>
                                <p class="active"> Gallery </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="gallery-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="all-gall">
                        <li class="active" data-filter="*"><span>All</span></li>
                        @foreach($imagecategories as $category)
                            <li data-filter=".{{ strtolower($category->name) }}"><span>{{ $category->name }}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row gall-list">
                @foreach ($galleries as $gallery)
                    <div class="col-lg-4 col-md-6 item {{ strtolower($gallery->imageCategory->name) }}">
                        <div class="single-gall">
                            <div class="gall-img">
                                <a href="{{ asset('storage/' . $gallery->image) }}" class="image-pop">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="gallery" />
                                </a>
                            </div>
                            <div class="gall-content">
                                <h3>{{ $gallery->name }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row">
                <div class="col-lg-12 text-center">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="flaticon-left-arrow"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="flaticon-next"></i></a></li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </section>
    

   @endsection