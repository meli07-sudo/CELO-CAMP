@extends('auth.layout')
@section("main-section")
    @livewire("sign-in-up")
@endsection

@section("scripts")
    <script src="{{asset('js/auth.js')}}"></script>
@endsection