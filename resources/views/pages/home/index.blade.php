@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page_title">Home Page</h1>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .page_title {
            padding-top: 27vh;
            font-size: 5rem;
            color: green;
            margin-bottom: 22vh;
        }
    </style>
@endpush
