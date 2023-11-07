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
                            @foreach ($parents as $parent)
                                <tr>
                                    <td>{{ $parent->fname }}</td>
                                    <td>{{ $parent->lname }}</td>
                                    <td>{{ $parent->email }}</td>
                                    <td>{{ $parent->national_id }}</td>
                                    <td>{{ $parent->phone }}</td>
                                    <td>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
