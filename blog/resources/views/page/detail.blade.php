@extends('layouts.blank')

@section('judul')
   Detail Category
@endsection

@section('content')
    <a href="/category" class="btn btn-primary"> Back</a>
    <br>
    <br>
    <h1 class="text-primary">Category {{ $categories->name }}</h1>
@endsection

