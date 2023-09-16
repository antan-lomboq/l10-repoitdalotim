@extends('layouts.app')

@section('content')
@csrf
@include('profile.partials.update-password-form')

@endsection