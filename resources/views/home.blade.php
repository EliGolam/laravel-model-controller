@extends('layouts.main-layout')

@section('content')

    @foreach ($movies as $movie)
        <x-movie-card :movie="$movie"/>
    @endforeach

@endsection
