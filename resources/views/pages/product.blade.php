@php
    $indexPasta = $keyPasta -1;
    
@endphp
@extends('layout')

@section('main-content')
<div class="product-main">
    <div class="left-arrow arrow">
        @if ($keyPasta === '1')
        <a href="/product/{{count($array)}}"><i class="fas fa-chevron-left"></i></a>
        @else
        <a href="/product/{{$keyPasta - 1}}"><i class="fas fa-chevron-left"></i></a>
        @endif        
    </div>
    <div class="right-arrow arrow">        
        @if ($keyPasta == count($array))
        <a href="/product/1"><i class="fas fa-chevron-right"></i></a> 
        @else
        <a href="/product/{{$keyPasta + 1}}"><i class="fas fa-chevron-right"></i></a>
        @endif        
    </div>
    <div class="product-container">
        <img src="{{$array[$indexPasta]['src-h']}}" alt="">
        <img src="{{$array[$indexPasta]['src-p']}}" alt="">
        <div class="product-description">
            {!!$array[$indexPasta]['descrizione']!!}
        </div>
    </div>

</div>

@endsection
