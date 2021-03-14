 @extends('layout')

 @section('main-content')
  <div class="main-content" style="background-image: url('../img/sfondo.jpg')">
    <div class="container">
      <h2>LE LUNGHE</h2>
      <div class="pasta-container">
        @foreach ($array as $key => $item)        
          @if ($item['tipo'] === 'lunga')
          <div class="pasta-content">
            <a class="pasta-link" href="/product/{{$key + 1}}">
              <img class="pasta-img" src="{{$item['src']}}" alt="" href="">
             </a>
          </div>            
          @endif    
        @endforeach
      </div>
      <h2>LE CORTE</h2>
      <div class="pasta-container">
        @foreach ($array as $key => $item)        
          @if ($item['tipo'] === 'corta')
          <div class="pasta-content">
            <a class="pasta-link" href="/product/{{$key + 1}}">
              <img class="pasta-img" src="{{$item['src']}}" alt="" href="">
             </a>
          </div>
         @endif    
        @endforeach
      </div>
      <h2>LE CORTISSIME</h2>
      <div class="pasta-container">
        @foreach ($array as $key => $item)        
          @if ($item['tipo'] === 'cortissima')
          <div class="pasta-content">
            <a class="pasta-link" href="/product/{{$key + 1}}">
              <img class="pasta-img" src="{{$item['src']}}" alt="" href="">
             </a>
          </div>
         @endif    
        @endforeach
      </div>      
    </div>        
  </div>
    
 @endsection
  
  