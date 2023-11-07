@extends('dashboard.layouts.master')

@section('title')
    Teacher
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
                    <li class="breadcrumb-item"><a href="index.html" class="default-color">Edit</a></li>
                    <li class="breadcrumb-item active">Teacher</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card card-statistics mb-30">
        <div class="card-body">
            <h5 class="card-title">Form row</h5>
            <form method="POST" action="{{ route('teacher.update', $teacher->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="inputEmail4">First Name</label>
                        <input type="text" name="fname" value="{{ $teacher->fname }}" class="form-control mb-3"
                            placeholder="First name">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="inputEmail4">Last Name</label>
                        <input type="text" name="lname" value="{{ $teacher->lname }}" class="form-control mb-3"
                            placeholder="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label" for="inputEmail4">Email</label>
                        <input type="email" value="{{ $teacher->email }}" name="email" class="form-control"
                            id="inputEmail4" placeholder="Email">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="inputPhone">Phone Number</label>
                        <input type="text" value="{{ $teacher->phone }}" name="phone" class="form-control"
                            id="inputPhone">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="inputBirth">Date Of Birth</label>
                        <input type="date" name="dob"
                            value="{{ \Illuminate\Support\Carbon::parse($teacher->dob)->format('Y-m-d') }}"
                            class="form-control" id="inputBirth">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
