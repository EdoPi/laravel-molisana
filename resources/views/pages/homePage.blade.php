 @extends('layout')

 @section('main-content')
  <div class="main-content" style="background-image: url('../img/sfondo.jpg')">
    <div class="container">
      <h2>LE LUNGHE</h2>
      <div class="lunghe-container">
        @foreach ($array as $key => $item)        
          @if ($item['tipo'] === 'lunga')
            <a class="pasta-link" href="/product/{{$key + 1}}">
              <div class="pasta-content" style="background-image: url({{$item['src']}})"></div>
            </a>
          @endif    
        @endforeach
      </div>
      <h2>LE CORTE</h2>
      <div class="lunghe-container">
        @foreach ($array as $key => $item)        
          @if ($item['tipo'] === 'corta')
            <a class="pasta-link" href="/product/{{$key + 1}}">
              <div class="pasta-content" style="background-image: url({{$item['src']}})"></div>
            </a>
          @endif    
        @endforeach
      </div>
      <h2>LE CORTISSIME</h2>
      <div class="lunghe-container">
        @foreach ($array as $key => $item)        
          @if ($item['tipo'] === 'cortissima')
            <a class="pasta-link" href="/product/{{$key + 1}}">
              <div class="pasta-content" style="background-image: url({{$item['src']}})"></div>
            </a>
          @endif    
        @endforeach
      </div>      
    </div>        
  </div>
    
 @endsection
  
  