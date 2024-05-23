@extends('backend.layouts.index')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Image Category</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                               Edit Image Category
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
                            <form action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                             
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="basiInput" class="form-label">Category name</label>
                                                    <input type="text" class="form-control" id="basiInput"
                                                        name="name" required value="{{$category->name}}">
                                                </div>
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>

                                         

                                            <div class="mb-3 col-lg-12">
                                                <label for="status">Status:</label>
                                                <select class="form-control" required name="status">
                                                   
                                                    <option value="1"{{ $category->status == 1 ? 'selected' : '' }}>Active
                                                    </option>
                                                    <option value="0"{{ $category->status == 0 ? 'selected' : '' }}>
                                                        Inactive</option>
                                                </select>


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
