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
                                Create Course
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



                            <form action="{{ route('course.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Title</label>
                                                    <input type="text" class="form-control" id="basiInput" name="title"
                                                        required>
                                                </div>
                                            </div>

                                           
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Image Upload</label>
                                                    <input type="file" class="form-control" id="imageUpload"
                                                        name="image" required>
                                                </div>

                                                <img id="imagePreview" src="#" alt="Image Preview"
                                                    style="display: none; max-width: 50%; height: auto;">
                                            </div>

                                          
                                            <div class="form-group">
                                                <label for="content">Course Detail</label>
                                                {{-- <textarea class="form-control" name="content" required id="content_des" rows="4"></textarea> --}}
                                                <textarea id="summernote" name="course_detail"></textarea>
                                                @error('content')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>


                                            <div class="col-md-6">
                                               
                                                <label for="firstNameinput" class="form-label">video<span class="text text-danger"></span></label>
                                                <input type="text" class="form-control" name="video"
                                                    id="firstNameinput">
                                          
                                            @error('video')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    

                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="exampleInputName1">Status</label>
                                                    <select class="form-control" name="status" required>
                                                        <option value="">Choose</option>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>

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
