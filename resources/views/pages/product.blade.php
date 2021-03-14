@php
    $indexPasta = $keyPasta -1;
@endphp
@extends('layout')

@section('main-content')
<div class="product-main">
    <div class="left-arrow arrow">
        <a href=""><i class="fas fa-chevron-left"></i></a>
    </div>
    <div class="right-arrow arrow">
        <a href=""><i class="fas fa-chevron-right"></i></a>
    </div>
    <div class="product-container">
        <img src="{{$array[$indexPasta]['src-h']}}" alt="">
        <img src="{{$array[$indexPasta]['src-p']}}" alt="">
        <div class="product-description">
            {!!$array[$indexPasta]['descrizione']!!}
        </div>
    </div>

</div>


{{--     @foreach ($array[$keyPasta -1 ] as $title => $thisPasta)
    <h3>{{$title}}:</h3> 
    {{$thisPasta}} <br>
    @endforeach  
 --}}@endsection
