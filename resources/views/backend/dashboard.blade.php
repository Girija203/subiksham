@extends('backend.layouts.index')
@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-1">
                <div>
                    <!-- Top Welcome Content -->
                    <h4 class="font-weight-bold1">Welcome, {{auth()->user()->first_name}}</h4>
                    


                    {{-- <p>
                        All systems are running smoothly! You have
                        <span class="text-primary">3 unread alerts!</span>
                    </p> --}}
                </div>


                {{-- test starts --}}
              
                    {{-- <h2>Hai Admin</h2> --}}
              
                    {{-- <h2>Your not admin</h2> --}}
              
                {{-- test starts --}}
                <div>
                    <button type="button" class="btn btn-primary position-relative" id="demo">
                        Today (02 Jan 2024)
                    </button>
                </div>
            </div>
            <!-- card content is started -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-4 border-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Gallery Count</p>
                                    <h4 class="my-1 text-info">{{ $galleryCount }}</h4>
                                   
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto">
                                    <i class="fadeIn animated bx bx-images"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-4 border-danger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Course Count</p>
                                    <h4 class="my-1 text-danger">{{ $courseCount }}</h4>
                                    {{-- <p class="mb-0 font-13">+5.4% from last week</p> --}}

                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto">
                                    <i class="fadeIn animated bx bx-video"></i>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-4 border-success">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">User Count</p>
                                    <h4 class="my-1 text-success">{{$userCount}}</h4>
                                    {{-- <p class="mb-0 font-13">-4.5% from last week</p> --}}
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto">
                                    <i class="bx bxs-group"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col">
                    <div class="card radius-10 border-start border-0 border-4 border-warning">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Customers</p>
                                    <h4 class="my-1 text-warning">8.4K</h4>
                                    <p class="mb-0 font-13">+8.4% from last week</p>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto">
                                    <i class="bx bxs-group"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
          
        </div>
    </div>
    {{-- ends --}}
    <!--end page wrapper -->
@endsection
