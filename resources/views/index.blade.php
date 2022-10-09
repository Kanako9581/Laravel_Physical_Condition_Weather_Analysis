@extends('layouts.default')
@section('title')
@section('content')
    <h1>{{ $title }}</h1>
    <form method="post">
        @csrf
        <input type="">
    </form>
@endsection