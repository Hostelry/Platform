@extends('site::layouts.master')

@push('css')
    <style type="text/css">
        section {
            padding-top: 20px;
        }
    </style>
@endpush

@section('content')
    @foreach($sections as $section)
        @include("site::partials.index.{$section}")
    @endforeach
@endsection
