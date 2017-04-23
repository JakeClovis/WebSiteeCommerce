<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Le magasin Point Express Mobile situé au centre-ville d&#039;Aubagne est spécialisé en réparation de smartphone iPhone et Samsung et de vente d&#039;accessoires."/>
    <meta property="og:title" content="Réparation iPhone 7 - Smartphones à Aubagne - Point Express Mobile" />
    <meta property="og:description" content="Le magasin Point Express Mobile situé au centre-ville d&#039;Aubagne est spécialisé en réparation de smartphone iPhone et Samsung et de vente d&#039;accessoires." />
    <meta property="og:url" content="http://www.pointexpressmobile.fr/" />
    <meta property="og:site_name" content="Point Express Mobile" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('pointexpressmobile', 'Réparation iPhone 7 - Smartphones à Aubagne - Point Express Mobile') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- logo onglet moyeur de recherche -->
    <link rel="shortcut icon" href="logos/favicon.png"  />
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

  <script type='text/javascript' src='/js/jquery.particleground.js'></script>
  <script type='text/javascript' src='/js/demo.js'></script>
</head>
<body>

</br>

  <div class="container">
      <div class="row">
        <div class="col-md-4">

          <a class="img-responsive2" href="{{ url('/') }}">
            <img style=" margin-top: -30px;" alt="Logo" src="logos/logo2.png">
            <span class="stylelogo"> </span>
        </a>
        </div>
          <div class="col-md-4"></div>
            <div class="col-md-4">

              <span class="header-toolbar-contact">
                <i class="mk-moon-phone-3"></i>
                <a href="tel:0442703269">04 42 70 32 69</a>
              </span>

              <span class="header-toolbar-contact">
              	<i class="mk-moon-envelop"></i>
              	<a href="3">p&#111;&#105;n&#116;&#101;xpr&#101;&#115;&#115;&#109;o&#98;&#105;&#108;&#101;&#64;gm&#97;i&#108;&#46;c&#111;&#109;</a>
              </span>

            </div>
      </div>
  </div>


<header class="top-header">
  <div class="container">
      <div id="app">
          <nav class="navbar navbar-inverse navbar-static scrolling-navbar">
                <div class="container-fluid">
                  <div class="navbar-header">

                      <!-- Collapsed Hamburger -->
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                          <span class="sr-only">Toggle Navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>

                      <!-- Branding Image -->
                      <ul class="nav navbar-nav navbar-left">
                      <a class="navbar-brand" href="{{ url('/') }}">
                          {{ config('pointexpressmobile', 'Accueil') }}
                      </a>
                    </ul>
                  </div>

                  <div class="collapse navbar-collapse" id="app-navbar-collapse">
                      <!-- Left Side Of Navbar -->
                      <ul class="nav navbar-nav">
                          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      </ul>


                        <ul class="nav navbar-nav navbar-center">

                          <li class="nav-item"><a class=""  href="#reparation">Réparation et déblocage</a></li>
                          <li class="nav-item"><a class=""  href="#vente">Vente de Smartphones</a></li>
                          <li><a class="nav-item"  href="#accessoires">Vente d&rsquo;accessoires</a></li>
                          <li><a class="nav-item"  href="#pres">A propos de nous</a></li>
                          <li><a class="nav-item"  href="#contact">Contactez-nous</a></li>
                          </ul>

                      <!-- Right Side Of Navbar -->
                      <ul class="nav navbar-nav navbar-right">
                          <!-- Authentication Links -->
                          @if (Auth::guest())
                              <li><a href="{{route('login')}}"> Login </a></li>
                              <li><a href="{{route('register')}}">Register</a></li>
                          @else
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                  <img src="/uploads/userAvatar/{{ Auth::user()->avatar }}" style="width:36px; height:36px; position:absolute; top:10px; left:10px; border-radius:50%">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                  <ul class="dropdown-menu" role="menu">
                                     <li><a href="{('home')}}"><i class="fa fa-btn fa-user"></i>Mon Compte</a></li>
                                      <li class="divider"></li>
                                     <li><a href="{{url('/profile')}}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                     <li class="divider"></li>
                                      <li>
                                          <a href="{{ url('/logout') }}"
                                              onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                            <i class="fa fa-btn fa-sign-out"> </i>
                                                Logout
                                          </a>

                                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                          </form>
                                      </li>
                                  </ul>
                              </li>
                          @endif
                      </ul>
                  </div>
              </div>

          </nav>


        @yield('content')



        <!-- footer starts here -->
      	<div class="footer text-center">
          <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>
          <p style="color:#ffffff;">COPYRIGHT &copy; Point Express Mobile - 2017</p>
          <div class="clearfix">&nbsp;</div>

        <div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
