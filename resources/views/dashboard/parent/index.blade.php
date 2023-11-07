@extends('dashboard.layouts.master')

@section('title')
    Parent
@endsection

@push('css')
@endpush

@section('crumbs')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Dashboard</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="index.html" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Parent</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <h5 class="card-title border-0 pb-0">Table hover</h5>
                <div class="table-responsive">
                    <table class="mb-0 table table-hover">
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>National ID</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($parents as $parent)
                                <tr>
                                    <td>{{ $parent->fname }}</td>
                                    <td>{{ $parent->lname }}</td>
                                    <td>{{ $parent->email }}</td>
                                    <td>{{ $parent->national_id }}</td>
                                    <td>{{ $parent->phone }}</td>
                                    <td>
                                        <a href="{{ route('parent.edit', $parent->id) }}" class="btn btn-info">Edit</a>
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter"> Delete </button>
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header align-items-start">
                                                        <div class="modal-title">
                                                            <div class="mb-30">
                                                                <h6>EXPERTISE</h6>
                                                                <h2>Delete Parent</h2>
                                                                <p>Are you sure you want to delete this parent?</p>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"><i class="fa fa-times"
                                                                aria-hidden="true"></i></button>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('parent.destroy', $parent->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">No</button>
                                                            <button type="submit" class="btn btn-danger">Yes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No Parents were found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
