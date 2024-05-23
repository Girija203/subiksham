@extends('backend.layouts.index')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">User</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                               Edit Gallery
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
                            <form action="{{ route('gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
                               @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                           

                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Category</label>
                                                    <select class="form-control" required name="category_id">
                                                        <option value="">Select option</option>
                                                        @foreach($category as $categories)
                                                            <option value="{{ $categories->id }}" {{ $gallery->category_id == $categories->id ? 'selected' : '' }}>
                                                                {{ $categories->name }}
                                                            </option>
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
                                                        name="name" value="{{$gallery->name}}">
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
                                                    <label for="image">Image:</label>
                                                    @if ($gallery->image)
                                                        <img src="{{ asset('storage/' . $gallery->image) }}"
                                                            alt="Product Image" style="max-width: 200px;">
                                                    @endif
                                                    <input type="file" class="form-control-file mt-2" id="image"
                                                        name="images">
                                            </div>
                                            </div>


                                            
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Status</label>
                                                    <select class="form-control" required name="status">
                                                        <option value="1" {{  $gallery->status == 1 ? 'selected' : '' }}>Active
                                                        </option>
                                                        <option value="0" {{  $gallery->status == 0 ? 'selected' : '' }}>
                                                            Inactive</option>
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
