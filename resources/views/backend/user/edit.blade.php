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
                                Edit User
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



                            <form action="{{ route('user.update', $user->id) }}" method="post"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Firstname</label>
                                                    <input type="text" class="form-control" id="basiInput"
                                                        name="first_name" value="{{ $user->first_name }}"required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Lastname</label>
                                                    <input type="text" class="form-control" id="basiInput"
                                                        name="last_name" value="{{ $user->last_name }}" required>
                                                </div>
                                            </div>





                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">E-mail</label>
                                                    <input type="email" class="form-control" id="basiInput" name="email"
                                                        value="{{ $user->email }}" required>
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-6">
                                            <div>
                                                <label for="basiInput" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="basiInput" name="password" value="{{$user->password}}" required>
                                            </div>
                                        </div> --}}

                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Mobile</label>
                                                    <input type="text" class="form-control" id="basiInput" name="mobile"
                                                        value="{{ $user->mobile }}" required>
                                                </div>
                                            </div>


                                            {{-- <div class="col-lg-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Type</label>
                                                    <input type="text" class="form-control" id="basiInput" name="type"
                                                        value="{{ $user->type }}">
                                                </div>
                                            </div> --}}



                                            <div class="mb-3 col-lg-6">
                                                <label for="status">Status:</label>
                                                <select class="form-control" required name="status">
                                                    <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active
                                                    </option>
                                                    <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>
                                                        Inactive</option>
                                                </select>


                                            </div>
                                            <div class="mb-3">
                                                <label for="image">Image:</label>
                                                @if ($user->profile_photo_path)
                                                    <img src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                                        alt="Product Image" style="max-width: 200px;">
                                                @endif
                                                <input type="file" class="form-control-file mt-2" id="image"
                                                    name="profile_photo_path">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Add any additional form controls here if needed -->
                                <div class="">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
