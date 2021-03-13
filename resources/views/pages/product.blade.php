@extends('layout')

@section('main-content')
    @foreach ($array[$keyPasta -1 ] as $title => $thisPasta)
    <h3>{{$title}}:</h3> 
    {{$thisPasta}} <br>
    @endforeach  
@endsection
