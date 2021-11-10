<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <title>Panel</title>
  </head>
  <body>
 
    <header>
            <h1>Welkom</h1>
            <img src="{{ asset('img/person-1.png') }}" alt="profiel foto" />     
    </header>

    <div class="sidebar">
        <div class="container">
          <h1>Panel.</h1>
  
          <div class="dashboard"> 
            <h3>Dashboard</h3>
            <div class="item">
              <a href="{{ route('dashboard') }}">
                <img class="hidden-img" src="{{ asset('img/home.png') }}" alt="icon" />
              </a>
              <a class="hidden-text" href="{{ route('dashboard') }}">Home</a>
            </div>
            <div class="item">
              <a href="{{ route('home') }}">
                <img class="hidden-img" src="{{ asset('img/restaurant.png') }}" alt="icon" />
              </a>
              <a class="hidden-text" href="{{ route('home') }}">Ga naar restaurant </a>
            </div>
          </div>
  
          <div class="quick-menu">
            <h3>Quick Menu</h3>
            <div class="item">
              <a href="{{ route('staff') }}">
                <img class="hidden-img" src="{{ asset('img/person.png') }}" alt="icon" />
              </a>
              <a class="hidden-text" href="{{ route('staff') }}">Personeel</a>
            </div>
            <div class="item">
              <a href="">
                <img class="hidden-img" src="{{ asset('img/levering.png') }}" alt="icon" />
              </a>
              <a class="hidden-text" href="">Leveringen</a>
            </div>
          </div>
  
          <form class="logout" action="{{ route('logout') }}" method="post">
              {{csrf_field()}} 
              <img src="{{ asset('img/logout.png') }}" alt="logout" />
              <button class="hidden-text" type="submit" name="logout">Log out</button>         
          </form>
        </div>
      </div>

      @yield('content')

      <script src="{{ asset('js/modalPersoneel.js') }}"></script>
  </body>
</html>