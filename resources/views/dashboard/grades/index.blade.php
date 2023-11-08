@extends('dashboard.layouts.master')

@section('title')
    Grades
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
                    <li class="breadcrumb-item active">Grades</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Grade
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form action="{{ route('grade.store') }}" method="POST">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header align-items-start">
                                    <div class="modal-title" id="exampleModalLabel">
                                        <div class="mb-30">
                                            <h6>Grades</h6>
                                            <h2>Add Grade</h2>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                            class="fa fa-times" aria-hidden="true"></i></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="inputBirth">Name</label>
                                            <input type="text" name="name" class="form-control" id="inputBirth">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="inputBirth">Description</label>
                                            <textarea name="description" class="form-control" id="inputBirth"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br><br>
                <h5 class="card-title border-0 pb-0">Grades Information</h5>
                <div class="table-responsive">
                    <table class="mb-0 table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($grades as $grade)
                                <tr>
                                    <td>{{ $grade->name }}</td>
                                    <td>{{ $grade->description }}</td>
                                    <td>
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenterEdit"> Edit </button>
                                        <div class="modal fade" id="exampleModalCenterEdit" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ route('grade.update', $grade->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-header align-items-start">
                                                            <div class="modal-title">
                                                                <div class="mb-30">
                                                                    <h6>Grades</h6>
                                                                    <h2>Edit Grade</h2>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"><i class="fa fa-times"
                                                                    aria-hidden="true"></i></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="inputBirth">Name</label>
                                                                    <input type="text" name="name"
                                                                        value="{{ $grade->name }}" class="form-control"
                                                                        id="inputBirth">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3">
                                                                    <label class="form-label"
                                                                        for="inputBirth">Description</label>
                                                                    <textarea name="description" class="form-control" id="inputBirth">{{ $grade->description }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
                                                                <h2>Delete Teacher</h2>
                                                                <p>Are you sure you want to delete this teacher?</p>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"><i class="fa fa-times"
                                                                aria-hidden="true"></i></button>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('grade.destroy', $grade->id) }}"
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
                                    <td colspan="6" class="text-center">No Teachers were found</td>
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
