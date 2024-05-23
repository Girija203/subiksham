@extends('backend.layouts.index')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Course</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Course
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
                        <div class="card-body p-2">
                            {{-- <h5 class="mb-4">Vertical Form</h5> --}}
                            <form action="{{ route('course.update', $course->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Title</label>
                                                    <input type="text" class="form-control" id="basiInput" name="title"
                                                        value="{{ $course->title }}" required>
                                                </div>
                                            </div>

                                          
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Image Upload</label>

                                                    @if ($course->image)
                                                        <img src="{{ asset('storage/' . $course->image) }}"
                                                            alt="Product Image" style="max-width: 100px;height:100px">
                                                    @endif

                                                    <input type="file" class="form-control mt-2" id="imageUpload"
                                                        name="image" >
                                                </div>

                                                <img id="imagePreview" src="#" alt="Image Preview"
                                                    style="display: none; max-width: 50%; height: 200px;">
                                            </div>


                                            
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="basiInput" class="form-label">Content</label>
                                                    <textarea id="summernote" name="course_detail" >{{ $course->course_detail }}</textarea>
                                                   
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                              
                                                    <label for="videoUpload" class="form-label">Video <span></span></label>
                                                    <input type="text" class="form-control" name="video" id="videoUpload" value="{{$course->video }}">
                                                    {{-- @if ($course->video)
                                                    <video width="320" height="240" autoplay muted>
                                                        <source src="{{asset('videos')}}/{{$course['video']}}" type="video/mp4">
                                                    </video>
                                                    @else
                                                    <span>No video uploaded</span>
                                                    @endif --}}
                                                    @error('video')
                                                    <span style="color: red">{{ $message }}</span>
                                                    @enderror
                                               
                                            </div>
    
                                           <div class="col-lg-6">
                                                <div>
                                                    <label for="exampleInputName1">Status</label>
                                                    <select class="form-control" required name="status">
                                                        <option value="1" {{ $course->status == 1 ? 'selected' : '' }}>
                                                            Active</option>
                                                        <option value="0" {{ $course->status == 0 ? 'selected' : '' }}>
                                                            Inactive</option>
                                                    </select>
                                                </div>
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
    <script>
        document.getElementById("imageUpload").addEventListener("change", function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("imagePreview").setAttribute("src", e.target.result);
                document.getElementById("imagePreview").style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });

        document.getElementById("imageUpload_1").addEventListener("change", function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("imagePreview_1").setAttribute("src", e.target.result);
                document.getElementById("imagePreview_1").style.display = "block";
            }
            reader.readAsDataURL(this.files[0]);
        });
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <script>
        $('textarea#summernote').summernote({
            placeholder: 'Hello bootstrap 4',
            tabsize: 2,
            height: 100,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                //['fontname', ['fontname']],
                // ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'hr']],
                //['view', ['fullscreen', 'codeview']],
                ['help', ['help']]
            ],
        });
    </script>
@endsection
