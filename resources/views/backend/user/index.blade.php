@extends('backend.layouts.index')
@section('content')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <style>
        /* Container style */
        .image-container {
            width: 50px;
            height: 50px;
            overflow: hidden;
        }

        /* Image style */
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .text-end{
            text-align: center !important;
        }
    </style>
@endsection

@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            
            @include('backend.layouts.successmsg')
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
                                User List
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="ms-auto">
                        <a href="{{ route('user.create') }}">
                            <button class="btn btn-primary repeater-add-btn px-4">
                                Add User
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->


            <div class="card">
                <div class="card-body">
                    <table class="table mb-0" id="usertable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First</th>
                                <th scope="col">Email</th>
                                <th scope="col">Profile</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($users->count())
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->email }}</td>

                                        <td>
                                            @if ($user->profile_photo_path)
                                                <div class="image-container">
                                                    <img src="{{ asset('storage/' . $user->profile_photo_path) }}"
                                                        alt="{{ $user->first_name }}" width="100" height="50">
                                                </div>
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>{{ $user->status == 1 ? 'Active' : 'Inactive' }}</td>

                                        <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('user.delete', $user->id) }}"method="post"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this offer?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('script')
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#usertable').DataTable();
        });
    </script>
@endpush
