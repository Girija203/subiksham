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
                                Create User
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
                            <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Firstname</label>
                                                    <input type="text" class="form-control" id="basiInput"
                                                        name="first_name" required>
                                                </div>
                                                @error('first_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>

                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Lastname</label>
                                                    <input type="text" class="form-control" id="basiInput"
                                                        name="last_name" required>
                                                </div>
                                                @error('last_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>





                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">E-mail</label>
                                                    <input type="email" class="form-control" id="basiInput" name="email"
                                                        required>
                                                </div>
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
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0"
                                                        id="inputChoosePassword" name="password" placeholder="Enter Password" />
                                                    @error('password')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                            class="bx bx-hide"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Mobile</label>
                                                    <input type="text" class="form-control" id="basiInput" name="mobile"
                                                        required>
                                                </div>
                                                @error('mobile')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>


                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Profile photo</label>
                                                    <input type="file" class="form-control" id="basiInput"
                                                        name="profile_photo_path" required>
                                                </div>
                                                @error('profile_photo_path')
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

    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on("click", function(event) {
                event.preventDefault();
                if ($("#show_hide_password input").attr("type") == "text") {
                    $("#show_hide_password input").attr("type", "password");
                    $("#show_hide_password i").addClass("bx-hide");
                    $("#show_hide_password i").removeClass("bx-show");
                } else if (
                    $("#show_hide_password input").attr("type") == "password"
                ) {
                    $("#show_hide_password input").attr("type", "text");
                    $("#show_hide_password i").removeClass("bx-hide");
                    $("#show_hide_password i").addClass("bx-show");
                }
            });
        });
    </script>
@endsection
