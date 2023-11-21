@extends('Layouts.app')
@section('content')
    <h1>search</h1>
    @foreach ($results as $resultSearch)
        <div>{{ $resultSearch->nameProduct }}</div>
    @endforeach
@endsection
