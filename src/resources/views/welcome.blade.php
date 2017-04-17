<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

        <title>Laravel</title>

    </head>
    <body>

      <div class="container">
          @if(session('message'))
                <div class="alert alert-success">
                  {{session('message')}}
                </div>

          @endif
      </div>
      <!-- Contact Form Starts -->
      <div class="container">
                  <!-- Contact Section Starts -->
          <section id="contact" class="section contact">
          <!-- Nested Container Starts -->
          <div class="container">
            <h2 class="text-center text-light">Contact us</h2>
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
                  <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label for="name" class="sr-only">Name: </label>
                      <input type="text" class="form-control no-border-radius" name="name" id="name"  placeholder="Name" value="{{ old('name') }}" autofocus>
                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                <!-- Name Field Ends -->
                <!-- Email Field Starts -->
                  <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label for="email" class="sr-only">Email: </label>
                      <input type="text" class="form-control no-border-radius" name="email" id="email"  placeholder="Email" value="{{ old('email') }}" autofocus>
                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                <!-- Email Field Ends -->
                <!-- Phone Field Starts -->
                  <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                      <label for="name" class="sr-only">Phone: </label>
                      <input type="text" class="form-control no-border-radius" name="phone" id="phone"  placeholder="Phone No" value="{{ old('phone')}}" autofocus>
                      @if ($errors->has('phone'))
                          <span class="help-block">
                              <strong>{{ $errors->first('phone') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                <!-- Phone Field Ends -->
                <!-- Message Field Starts -->
                  <div class="col-xs-12">
                    <div class="form-group">
                      <label for="message" class="sr-only">Message: </label>
                      <textarea class="form-control no-border-radius" rows="5" name="message" id="message"  placeholder="Message" autofocus></textarea>
                      @if ($errors->has('message'))
                          <span class="help-block">
                              <strong>{{ $errors->first('message') }}</strong>
                          </span>
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
          </div>
          <!-- Nested Container Ends -->
          </section>
          <!-- Contact Section Ends -->
          </div>
      			<!-- Contact Form Ends -->
    </body>
</html>
