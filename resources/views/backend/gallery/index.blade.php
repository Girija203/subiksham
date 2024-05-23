@extends('backend.layouts.index')
@section('content')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <style>
        .thumbnail {
            /* max-width: 100px;
                                                width: auto; */
            width: 67px;
            height: 67px;
        }
    </style>
@endsection

@section('content')

    <div class="page-wrapper">
        <div class="page-content">

            @include('backend.layouts.successmsg')

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
                                Gallery List
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="ms-auto">
                        <a href="{{ route('gallery.create') }}">
                            <button class="btn btn-primary repeater-add-btn px-4">
                                Add Gallery
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->



            <div class="card">
                <div class="card-body">
                    <table class="table mb-0" id="gallerytable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Category</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- @forelse ($images as $image)
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img src="{{ asset($image->image_path) }}" alt="Gallery image" style="width:100%">
                                        <div class="caption">
                                            <p>Uploaded on: {{ $image->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>No images found.</p>
                            @endforelse --}}

                            @if ($images->count())
                                @foreach ($images as $image)
                                    <tr>
                                        <td>{{ $image->id }}</td>

                                        <td>
                                            @foreach($category as $cat)
                                            @if( $image->category_id==$cat->id)

                                            {{$cat->name}}

                                            @endif
                                            @endforeach
                                        </td>


                                        <td>
                                            <div class="thumbnail">
                                                <img src="{{ asset('storage/' . $image->image) }}"
                                                    alt="Gallery image" style="width:100%" width="67px" height="67px">
                                            </div>
                                        </td>

                                        <td>{{ $image->status == 1 ? 'Active' : 'Inactive' }}</td>



                                        <td><a href="{{ route('gallery.edit', $image->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <form action="{{ route('gallery.delete', $image->id) }}"method="post"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this image?')">Delete</button>
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
            $('#gallerytable').DataTable();
        });
    </script>
@endpush
