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
                    <li class="breadcrumb-item"><a href="index.html" class="default-color">Edit</a></li>
                    <li class="breadcrumb-item active">Parent</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card card-statistics mb-30">
        <div class="card-body">
            <h5 class="card-title">Form row</h5>
            <form method="POST" action="{{ route('parent.update', $parent->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <input type="text" name="fname" value="{{ $parent->fname }}" class="form-control mb-3"
                            placeholder="First name">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <input type="text" name="lname" value="{{ $parent->lname }}" class="form-control mb-3"
                            placeholder="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label" for="inputEmail4">Email</label>
                        <input type="email" value="{{ $parent->email }}" name="email" class="form-control"
                            id="inputEmail4" placeholder="Email">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 col-xl-12 col-xxl-6 mb-3">
                        <label class="form-label" for="inputNational">National ID</label>
                        <input type="text" value="{{ $parent->national_id }}" name="national_id" class="form-control"
                            id="inputNational" placeholder="3030 ........">
                    </div>
                    <div class="col-sm-4 col-xl-12 col-xxl-6 mb-3">
                        <label class="form-label" for="inputPhone">Phone Number</label>
                        <input type="text" value="{{ $parent->phone }}" name="phone" class="form-control"
                            id="inputPhone">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label" for="inputBirth">Date Of Birth</label>
                        <input type="date" name="dob" value="{{ $parent->dob }}" class="form-control"
                            id="inputBirth">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
