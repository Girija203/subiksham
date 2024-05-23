@extends('backend.layouts.index')

@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Branch</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Create Branch
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <a href="{{ url()->previous() }}"><button class="btn btn-primary repeater-add-btn px-4">
                            Back
                        </button></a>
                </div>
            </div>
            <!--end breadcrumb-->



            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <div class="card">
                        <div class="card-body p-4">
                            {{-- <h5 class="mb-4">Vertical Form</h5> --}}



                            <form action="{{route('branch.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Branch Name</label>
                                                    <input type="text" class="form-control" id="basiInput" name="branch_name"
                                                      >
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                            <div>
                                                <label for="basiInput" class="form-label">Address</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
                                                {{-- <input type="text" class="form-control" id="basiInput" name="address"
                                                   > --}}
                                            </div>
                                        </div>

                                        

                                            {{-- <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">State</label>
                                                    <input type="text" class="form-control" id="basiInput" name="state"
                                                       >
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">City</label>
                                                    <input type="text" class="form-control" id="basiInput" name="city"
                                                      >
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Postal Code</label>
                                                    <input type="number" class="form-control" id="basiInput" name="postal_code"
                                                       >
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">LandMark</label>
                                                    <input type="text" class="form-control" id="basiInput" name="landmark"
                                                      >
                                                </div>
                                            </div>
                                          
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Contact</label>
                                                    <input type="text" class="form-control" id="basiInput" name="contact"
                                                       >
                                                </div>
                                            </div>
                                         
                                          

                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Kilometer</label>
                                                    <input type="text" class="form-control" id="basiInput" name="kms"
                                                       >
                                                </div>
                                            </div> --}}

                                        </div>
                                    </div>
                                </div>
                                <!-- Add any additional form controls here if needed -->
                                <div class="">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>


   

@endsection
