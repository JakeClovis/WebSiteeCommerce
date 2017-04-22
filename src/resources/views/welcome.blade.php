@extends('layouts.app')





@section('content')
      <div class="container">
          @if(session('message'))
                <div class="alert alert-success">
                  {{session('message')}}
                </div>

          @endif
      </div>

          <!-- carousel -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner" role="listbox">
                          <div class="item active">
                              <img class="first-slide" src="Slide/slide1.jpg" alt="First slide">
                              <div class="carousel-caption">
                                @if (Auth::guest())
                                <a class="btn btn-theme btn-sm btn-min-block" href="{{route('login')}}">Login</a>
                                <a class="btn btn-theme btn-sm btn-min-block" href="{{route('register')}}">Register</a>

                                @endif
                              </div>
                          </div>
                          <div class="item">
                              <img class="first-slide" src="Slide/slide1.jpg" alt="First slide">
                              <div class="carousel-caption">
                                @if (Auth::guest())
                                <a class="btn btn-theme btn-sm btn-min-block" href="{{route('login')}}">Login</a>
                                <a class="btn btn-theme btn-sm btn-min-block" href="{{route('register')}}">Register</a>
                                @endif
                              </div>
                          </div>
                          <div class="item">
                              <img class="first-slide" src="Slide/slide1.jpg" alt="First slide">
                              <div class="carousel-caption">
                                @if (Auth::guest())
                                <a class="btn btn-theme btn-sm btn-min-block" href="{{route('login')}}">Login</a>
                                <a class="btn btn-theme btn-sm btn-min-block" href="{{route('register')}}">Register</a>
                                @endif
                              </div>
                          </div>
                      </div>
                      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div><!-- /.carousel -->  </br>
<!--////////////////////////////////////////////////////////////////-->




        <!-- section reparation -->
      <div class=" col-sm-12 col-sm-push ">

        <h4 class="text-center text-light">  &#8211; Service de réparation &#8211; </h4>
        <section id="reparation">
        <h2 class="text-center text-light">Votre iPhone est cassé ? Pas de problème</h2>



      </br>
            <h4 class="text-center text-light">  &#8211; Service de déblocage &#8211; </h4>
        <h2 class="text-center text-light">Votre iPhone est bloqué ? On s’en occupe </h2>

        </section>
      </div>  <!-- section /.reparation -->



        <!-- section vente -->
      <div class=" col-sm-12 col-sm-push ">


        <section id="vente">
        <h2 class="text-center text-light">Nos smartphones</h2>


        </section>
      </div><!-- section /.vente -->



      <!-- section accessoires -->
      <div class=" col-sm-12 col-sm-push ">


        <section id="accessoires">
        <h2 class="text-center text-light">Protéger votre mobile avec nos accessoires</h2>


        </section>
      </div> <!-- section /.accessoires -->








      <!-- Contact Form Starts -->
 <div class=" col-sm-12 col-sm-push ">
                  <!-- Contact Section Starts -->
          <section id="contact" class="section contact">
          <!-- Nested Container Starts -->

            <h2 class="text-center text-light">Contactez-Nous</h2>
            <p class="text-center">
              List your app features and all the details Lorem ipsum. <br>
              Nam nec tellus a odio tincidunt auctor a ornare odio. Mauris vitae consequat auctor eu in elit.
            </p>
          <!-- Contact Form Starts -->
            <div class="contact-form-area">

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/contact') }}">
              {{ csrf_field() }}
                <div class="row">
                <!-- Name Field Starts -->
                  <div class="col-sm-4 col-xs-10">
                    <div class="form-group">
                      <label for="name" class="sr-only">Name: </label>

                      @if ($errors->has('name'))
                      <input type="text" class="form-control no-border-radius" name="name" id="name"  placeholder="Name" value="{{ old('name') }}" autofocus>
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @else

                        <input type="text" class="form-control no-border-radius" name="name" id="name"  placeholder="Name" value="{{ old('name') }}">
                      @endif
                    </div>
                  </div>
                <!-- Name Field Ends -->
                <!-- Email Field Starts -->
                  <div class="col-sm-4 col-xs-10">
                    <div class="form-group">
                      <label for="email" class="sr-only">Email: </label>

                      @if ($errors->has('email'))
                      <input type="text" class="form-control no-border-radius" name="email" id="email"  placeholder="Email" value="{{ old('email') }}" autofocus>
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>

                        @else
                        <input type="text" class="form-control no-border-radius" name="email" id="email"  placeholder="Email" value="{{ old('email') }}">
                      @endif
                    </div>
                  </div>
                <!-- Email Field Ends -->
                <!-- Phone Field Starts -->
                  <div class="col-sm-4 col-xs-10">
                    <div class="form-group">
                      <label for="name" class="sr-only">Phone: </label>

                      @if ($errors->has('phone'))
                        <input type="text" class="form-control no-border-radius" name="phone" id="phone"  placeholder="Phone No" value="{{ old('phone')}}" autofocus>
                          <span class="help-block">
                              <strong>{{ $errors->first('phone') }}</strong>
                          </span>

                     @else
                     <input type="text" class="form-control no-border-radius" name="phone" id="phone"  placeholder="Phone No" value="{{ old('phone')}}">
                      @endif
                    </div>
                  </div>
                <!-- Phone Field Ends -->
                <!-- Message Field Starts -->
                  <div class="col-xs-12">
                    <div class="form-group">
                      <label for="message" class="sr-only">Message: </label>

                      @if ($errors->has('message'))
                      <textarea class="form-control no-border-radius" rows="5" name="message" id="message"  placeholder="Message" autofocus></textarea>
                          <span class="help-block">
                              <strong>{{ $errors->first('message') }}</strong>
                          </span>
                        @else
                        <textarea class="form-control no-border-radius" rows="5" name="message" id="message"  placeholder="Message" ></textarea>
                      @endif
                    </div>
                  </div>
                <!-- Message Field Ends -->
                  <div class="col-xs-12 text-center">
                    <input type="submit" class="btn btn-lg btn-main animation" value="Contact us">
                  </div>
                </div>
              </form>
            </div>
          <!-- Contact Form Ends -->

          <!-- Nested Container Ends -->
          </section>
          <!-- Contact Section Ends -->
      </div>
      			<!-- Contact Form Ends -->





@endsection
