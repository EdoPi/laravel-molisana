<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel - Molisana</title>
</head>
<body>

  <header>
    <div class="logo">
      <img src="{{asset('img/logo.png')}}" alt="">
    </div>
    <div class="navbar">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/">Prodotti</a></li>
        <li><a href="##">News</a></li>
      </ul>
    </div>
  </header>
    @yield('main-content')   
  <footer style="background-image: url({{asset('img/footer.jpg')}})">
    <div class="footer-container" >
        <div class="footer-column">
            <div class="footer-logo">
                <img src="{{asset('img/logo.png')}}" alt="">
            </div>
            <div class="footer-address">
                <ul>
                    <li>Ragione sociale: La Molisana S.P.A.</li>
                    <li>Sede Legale: Contrada Colle delle Api, 100/A</li>
                    <li>86100-Campobasso(CB)</li>
                    <li>Pec:lamolisana@pec.it</li>
                    <li>Tel: +39 0874 4981</li>
                    <li>Fax: +39 0874 629584</li>
                    <li>info@lamolisana.it (per segnalazioni degli utenti)</li>
                    <li>commerciale@lamolisana.it</li>
                    <li>export@lamolisana.it</li>
                    <li>numero verde 800818081</li>
                    <li>telefono 3801292455</li>
                </ul>
            </div>
            </div>
            <div class="footer-column">
            <div class="footer-pastificio">
                <h3>PASTIFICIO</h3>
                <ul>
                    <li><a href="">Il Pastificio</a></li>
                    <li><a href="">Grano decorticato a pietra</a></li>
                    <li><a href="">Il Molise c'è</a></li>
                    <li><a href="">Filiera Integrata</a></li>
                    <li><a href="">100 anni di pasta</a></li>
                    <li><a href="">Startoria della pasta</a></li>
                    <li><a href="">Spaghetto Quadrato</a></li>
                    <li><a href="">Le Persone</a></li>
                </ul>
            </div>
            <div class="footer-prodotti">
                <h3>PRODOTTI</h3>
                <ul>
                    <li><a href="">Le Classiche</a></li>
                    <li><a href="">Le Integrali</a></li>
                    <li><a href="">Le Speciali</a></li>
                    <li><a href="">Le Biologiche</a></li>
                    <li><a href="">Le Gluten-Free</a></li>
                    <li><a href="">Le Semole</a></li>
                    <li><a href="">Le Extra di Lusso</a></li>
                </ul>
            </div>

            </div>
            <div class="footer-column">
            <div class="footer-chef">
                <h3>COLLEZIONE DA CHEF</h3>
                <ul>
                    <li><a href="">Collezione da Chef</a></li>
                    <li><a href="">Grandi Cucine</a></li>
                    <li><a href="">Biologiche</a></li>
                    <li><a href="">Quadrate</a></li>
                </ul>
            </div>
        </div>
    </div>
  </footer>
</body>
</html>