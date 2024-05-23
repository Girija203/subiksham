@extends('backend.layouts.index')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Gallery</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Create gallery
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="ms-auto">
                        <a href="{{ url()->previous() }}"><button class="btn btn-primary repeater-add-btn px-4">
                                Back
                            </button></a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
          


            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <div class="card">
                        <div class="card-body p-4">
                            {{-- <h5 class="mb-4">Vertical Form</h5> --}}
                            <form action="{{ route('gallery.upload') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                           

                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Category</label>
                                                    <select class="form-control" required name="category_id">
                                                       
                                                        <option value="1">Select option
                                                        </option>
                                                        @foreach($category as $categories)
                                                        <option value="{{$categories->id}}">
                                                           {{ $categories->name}}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                                @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>


                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Profile Name</label>
                                                    <input type="text" class="form-control" id="basiInput"
                                                        name="name" required>
                                                </div>
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>


                                            {{-- <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="show_hide_password"
                                                        name="password" required>
                                                </div>
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div> --}}

                                        

                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Profile photo</label>
                                                    <input type="file" class="form-control" id="basiInput"
                                                        name="images" required>
                                                </div>
                                                @error('images')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>

                                            
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Status</label>
                                                    <select class="form-control" required name="status">
                                                       
                                                        <option>Select option
                                                        </option>
                                                      
                                                        <option value="1">Active
                                                         </option>
                                                         <option value="0">Inactive
                                                        </option>
                                                          
                                                    </select>
                                                </div>
                                                @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>


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
