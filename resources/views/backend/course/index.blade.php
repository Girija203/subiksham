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
                <div class="breadcrumb-title pe-3">Course</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Course List
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <a href="{{ route('course.create') }}">
                        <button class="btn btn-primary repeater-add-btn px-4">
                            Add Course
                        </button>
                    </a>
                </div>
            </div>
         
            <div id="repeater">
               
            </div>

            <div class="card">
                <div class="card-body">
                    <table class="table mb-0" id="blogtable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>                    
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Video Url</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($course->count())
                                @foreach ($course as $courses)
                                    <tr>
                                        <td>{{ $courses->id }}</td>
                                         <td>{{ $courses->title }}</td>

                                        <td>
                                            @if ($courses->image)
                                                <img src="{{ asset('storage/' . $courses->image) }}" alt="{{ $courses->title }}"
                                                    width="50px" height="50px">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                      
                                        <td>
                                            {{ $courses->video }}
                                            
                                        </td>
                                        
                                        <td>{{ $courses->status == 1 ? 'Active' : 'Inactive' }}</td>

                                        <td>

                                            <a href="{{ route('course.edit', $courses->id) }}" class="btn btn-primary">Edit</a>

                                          
                                            <form action="{{ route('course.delete', $courses->id) }}"method="post"
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
            $('#blogtable').DataTable();
        });
    </script>
@endpush
