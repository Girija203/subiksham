@extends('backend.layouts.index')

@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
@endsection

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('backend.layouts.successmsg')

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Contact</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item " aria-current="page">
                           Contact List
                        </li>
                    </ol>
                </nav>
            </div>
            {{-- <div class="ms-auto">
                <a href="{{ route('branch.create') }}">
                    <button class="btn btn-primary repeater-add-btn px-4">
                        Add Branch
                    </button>
                </a>
            </div> --}}
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table mb-0" id="contacttable">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $count = 1; @endphp
                        @foreach ($contact as $item)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->contact }}</td>
                            <td>{{ $item->subject }}</td>
                            <td>
                                <button type="button" class="btn btn-primary view-message-btn" data-message="{{ $item->message }}" data-toggle="modal" data-target="#messageModal{{ $item->id }}">
                                    View Message
                                </button>
                            </td>
                        </tr>

                        <!-- Bootstrap Modal for Each Message -->
                        <div class="modal fade" id="messageModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel{{ $item->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="messageModalLabel{{ $item->id }}">Message Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ $item->message }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
        $('#contacttable').DataTable();
    });
</script>
@endpush
