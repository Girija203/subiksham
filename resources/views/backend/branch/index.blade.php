@extends('backend.layouts.index')
@section('content')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            @include('backend.layouts.successmsg')
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
                               Branch List
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <a href="{{route('branch.create')}}">
                        <button class="btn btn-primary repeater-add-btn px-4">
                            Add Branch
                        </button>
                    </a>
                </div>
            </div>
            <!--end breadcrumb-->


            <!-- Repeater Html Start -->
            <div id="repeater">
                <!-- Repeater Heading -->
                {{-- <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Blog</h5>
                            <a href="{{route('blog.create')}}">
                                <button class="btn btn-primary repeater-add-btn px-4">
                                    Add Blog
                                </button>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- Repeater End -->


            <div class="card">
                <div class="card-body">
                    <table class="table mb-0" id="branch">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                               
                                <th scope="col">Branch Name</th>
                                <th scope="col">Address</th>
                              
                                {{-- <th scope="col">Description</th> --}}
                                {{-- <th scope="col">Contact</th> --}}
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                           @if ($branch->count())
                                @foreach ($branch as $branches)
                                    <tr>
                                        <td>{{ $branches->id }}</td>
                                        <td>{{ $branches->branch_name }}</td>
                                     
                                        <td>{{ $branches->address }}</td>

                                        {{-- <td>{{ $branches->contact }}</td> --}}

                                        <td>

                                            <a href="{{ route('branch.edit',  $branches->id) }}" class="btn btn-primary">Edit</a>

                                         
                                            <form action="{{ route('branch.delete', $branches->id) }}"method="post"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
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
            $('#branch').DataTable();
        });
    </script>
@endpush
