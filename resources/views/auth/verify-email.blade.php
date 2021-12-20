@extends('auth.layout')
@section('styles')
    <style>
        body {
            background: white;
        }

    </style>
@endsection
@section('main-section')

    <div>
        <div class="d-flex justify-content-center align-content-center pt-5">
            @livewire("verify-email")
        </div>
    </div>
@endsection
