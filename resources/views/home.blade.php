<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <title>Panel</title> 
  </head>
  <body>
    <div class="home__container">
      <header>
        <div class="logo">Panel</div>
        <nav>
          <ul>
            <li class="active">
              <a href="{{ route('home') }}">Home</a>
            </li>
            @guest
            <li>
              <a href="{{ route('register') }}">Registreren</a>
            </li>
            <li>
              <a href="{{ route('login') }}">Login</a>
            </li>
            @endguest
            @auth
                <form action="{{ route('logout') }}" method="post">
                    {{csrf_field()}} 
                    <button type="submit">Uitloggen</button>
                </form>
            @endauth
          </ul>
        </nav> 
      </header>
      <main>
        <h1>Table for two</h1>
        <div class="buttons">
          <button class="btn-reserveren">Reserveren</button>
          <button class="menu btn-menu">Bekijk menu</button>
        </div>
      </main>
    </div>
    <div class="background">
      <div class="overlay"></div>
    </div>
    <div class="modal-reserveren">
      <div class="box">
        <div class="header">
          <div class="close-reserveren"><p>X</p></div>
          <h1>Reserveren voor <span>Panel</span></h1>
        </div>
        <form action="">
          <div class="item">
            <p>Naam:</p>
            <input type="text" />
          </div>
          <div class="item">
            <p>Personen:</p>
            <input type="text" />
          </div>
          <div class="item">
            <p>Datum:</p>
            <input type="text" />
          </div>
          <button>Reserveren</button>
        </form>
      </div>
    <script src="{{ asset('js/modalHome.js') }}"></script>
  </body>
</html>