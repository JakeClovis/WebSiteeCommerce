@extends('layouts.app')





@section('content')

<style>

</style>

<font size =+1><font>
<!-- ///////////////////////////////////////////////////////////////////-->

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
                  </div><!-- /.carousel -->
<!--////////////////////////////////////////////////////////////////-->

        <!-- section reparation -->
      <div class=" col-sm-12 col-sm-push ">

        <h4 class="text-center text-light">  &#8211; Service de réparation &#8211; </h4>
        <section id="reparation">
        <h1 class="text-center text-light text-danger">Votre iPhone est cassé ? Pas de problème</h1>

        <div class="container">
          <div class="row">

            <div class="row align-items-center">
                <div class="col">
                  <div class="col-md-4  wow slideInUp animated">
                    <img class="img-responsive" src="img/iphonecasseaubagne1.png" alt="">
                  </div>
                </div>
                <div class="col">

                  <div class="col-md-7 animated ">
                    <div class="clearfix">&nbsp;</div>
                    <div class="clearfix">&nbsp;</div>
                  <!--  <div class="clearfix">&nbsp;</div>-->
                    <h1 class="text-danger">Une intervention rapide</h1>


                          <p> Votre téléphone est cassé ou en panne ?</p>
                          Pas de problème, nous nous occupons de tout.
                            <div class="clearfix">&nbsp;</div>
                          Nous intervenons sur votre smartphone immédiatement et sans aucun rendez-vous pour votre réparation
                          et nous la garantissons de 3 à 12 mois.
                          <!--<div class="clearfix">&nbsp;</div>-->
                          <h1 class="text-danger">Sans aucun rendez-vous </h1>
                          Chez nous, pas besoin de rendez-vous !

                          Si la pièce à remplacer est en stock, nous nous en occupons immédiatement.
                            <!--<div class="clearfix">&nbsp;</div>-->
                          <h1 class="text-danger">Vous n’avez pas d’iPhone ? </h1>
                          Nous réparons également les téléphones Android de la marque Samsung, Wiko, Sony, HTC…
                          <!--  <div class="clearfix">&nbsp;</div>-->
                          Nous vous invitons à vous rendre en boutique ou de nous contacter par téléphone au 04 42 70 32 69


                  </div>
                </div>
          </div>
           <div class="row align-items-end"></div>

        </div>

        </div>

      </br>
            <h4 class="text-center text-light">  &#8211; Service de déblocage &#8211; </h4>
        <h2 class="text-center text-light text-danger">Votre iPhone est bloqué ? On s’en occupe </h2>


        <div class="container">
          <div class="row">
            <div class="col-xs-8 wow fadeInLeft animated">
                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>
                <!--<div class="clearfix">&nbsp;</div>
                  <div class="clearfix">&nbsp;</div>-->
              <h2 class="text-center text-light text-danger">Une intervention rapide</h2>
                <div class="clearfix">&nbsp;</div>
              Vous possédez un smartphone ou téléphone bloqué sur un opérateur français ou étranger ?
                <div class="clearfix">&nbsp;</div>
              Point Express Mobile, vous desimlock votre iPhone, Smartphone ou mobile simplement pour que
              vous téléphone accepte les puces des opérateurs du monde entier.

            </div>

              <div class="col-xs-4 horizontal-phone wow fadeInRight animated">
                <img class="img-responsive" src="img/iphone7.jpg" alt="Iphone" class="img-responsive">
              </div>

          </div>
        </div>



        </section>
      </div>  <!-- section /.reparation -->


<!-- ///////////////////////////////////////////////////////////////////-->
        <!-- section vente -->

        <section id="vente">
        <h1 class="text-center text-light text-danger">Nos smartphones</h1>




            <div class="row">
            <div class="col-md-12">
        			<div class="col-sm-6 col-md-3">
        				<div class="thumbnail" >
        					<h4 class="text-center"><span class="label label-info">Apple</span></h4>
        					<img src="img/apple-iphone-5s_1378837974_450x400-1.jpg" class="img-responsive" alt="Iphone 5s">
        					<div class="caption">
        						<div class="row">
        							<div class="col-md-6 col-xs-6">
        								<h3>Iphone 5s</h3>
        							</div>
        							<div class="col-md-6 col-xs-6 price">
        								<h3>
        								<label>249 €</label></h3>
        							</div>
        						</div>
        						<p>16GB, 32GB, IOS10</p>
                    <div class="row">
                      <div class="col-md-5"></div>
                      <div class="col-md-4">
                        <a href="#" class="btn btn-success btn-product">Fiche tecnique</a></div>
                    </div>
        					</div>
        				</div>
        			</div>
        			<div class="col-sm-6 col-md-3">
        				<div class="thumbnail" >
        					<h4 class="text-center"><span class="label label-info">Samsung</span></h4>
        					<img src="img/Samsung-Galaxy-J1-Mini.jpg" class="img-responsive" alt="Samsung Galaxy J1 mini">
        					<div class="caption">
        						<div class="row">
        							<div class="col-md-6 col-xs-6">
        								<h3>Samsung Galaxy J1 mini</h3>
        							</div>
        							<div class="col-md-6 col-xs-6 price">
        								<h3>
        								<label>129 €</label></h3>
        							</div>
        						</div>
        						<p>Android 4.4 KitKat, 	5 mégapixels avec Flash LED</p>
                    <div class="row">
                      <div class="col-md-5"></div>
                      <div class="col-md-4">
                        <a href="#" class="btn btn-success btn-product">Fiche tecnique</a></div>
                    </div>
        					</div>
        				</div>
        			</div>
                    <div class="col-sm-6 col-md-3">
        				<div class="thumbnail" >
        					<h4 class="text-center"><span class="label label-info">Samsung</span></h4>
        					<img src="img/samsung_galaxy_j3_2016_4g_dual_sim_gold_j320fd_1.jpg" class="img-responsive" alt="Samsung Galaxy J1 2016">
        					<div class="caption">
        						<div class="row">
        							<div class="col-md-6 col-xs-6">
        								<h3>Samsung Galaxy J1 2016</h3>
        							</div>
        							<div class="col-md-6 col-xs-6 price">
        								<h3>
        								<label>159 €</label></h3>
        							</div>
        						</div>
        						<p>Android 5.1, 5 mégapixels,  8 Go, 1 Go RAM</p>
                    <div class="row">
                      <div class="col-md-5"></div>
                      <div class="col-md-4">
                        <a href="#" class="btn btn-success btn-product">Fiche tecnique</a></div>
                    </div>

        					</div>
        				</div>
        			</div>

          <div class="col-sm-6 col-md-3">
            <div class="thumbnail" >
              <h4 class="text-center"><span class="label label-info">Apple</span></h4>
              <img src="img/apple-iphone-5c_1378838033_450x400.jpg" class="img-responsive" alt="Iphone 5c 32 gb">
              <div class="caption">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                    <h3>Iphone 5c</h3>
                  </div>
                  <div class="col-md-6 col-xs-6 price">
                    <h3><label>199 €</label></h3>
                  </div>
                </div>
                <p>32GB,64GB, IOS1O</p>
                <div class="row">
                  <div class="col-md-5"></div>
                  <div class="col-md-4">
                    <a href="#" class="btn btn-success btn-product">Fiche tecnique</a></div>
                </div>



              </div>
            </div>
        </div>
</div>
</div>




          <h1 class="text-center text-light text-danger"> Protéger votre mobile avec nos accessoires</h1>


          	<div class="row">
              	<!-- BEGIN PRODUCTS -->
            		<div class="col-md-3 col-sm-6">
              		<span >
                			<img src="img/etui-housse-coque-pochette-noir-interieur-silicone.jpg" class="img-responsive" alt="Housse smartphone">
                			<h4 class="text-center">Housse smartphone</h4>

                			<div class="row">
                				<div>
                					<p class="text-center">11.90 €</p>
                				</div>


                			</div>
              		</span>
            		</div>
            		<div class="col-md-3 col-sm-6">
              		<span >
                			<img src="img/91bSB83RnTL._SY355_.jpg" class="img-responsive" alt="Housse tablettes">
                			<h4 class="text-center">Housse tablettes</h4>


                			<div class="row">
                				<div>
                					<p class="price text-center">14,99 €</p>
                				</div>

                			</div>
              		</span>
            		</div>
            		<div class="col-md-3 col-sm-6">
              		<span >
                			<img src="img/muvit-film-protecteur-verre-trempe-plat-pour-apple.jpg" class="img-responsive" alt="Film en verre trempé smartphone">
                			<h4 class="text-center">Film en verre trempé smartphone</h4>

                			<div class="row">
                				<div>
                					<p class="price text-center">10 €</p>
                				</div>
                			</div>
              		</span>
            		</div>
            		<div class="col-md-3 col-sm-6">
              		<span >
                			<img src="img/coque-silicone-transparente-iphone-66s-souple-invisible-housse-etui.jpg" class="img-responsive" alt=" Coque gel smartphone">
                			<h4 class="text-center"> Coque gel smartphone</h4>

                			<div class="row">
                				<div>
                					<p class="price text-center">7€ 90</p>
                				</div>

                			</div>
              		</span>
            		</div>
            		<!-- END PRODUCTS -->
          	</div>


        </section>
      <!-- section /.vente -->

    </div>
    </div>
<!--///////////////////////////////////////////////////////////////////////// -->


    <div class="row">
      <div class="col-md-7">
	<img src="img/Resized_20161027_163312.jpeg" class="img-responsive" alt="">

      </div>
   <div class="col-md-5">
          <h1 class="text-center text-light text-danger"> Point Express Mobile </h1>

        <h3 class="text-center">  Votre boutique N°1 sur Aubagne </h3> </br>

        Boutique située dans le centre-ville d’Aubagne, Point Express Mobile est le spécialiste de la réparation de votre smartphone Android et Apple. <div class="clearfix">&nbsp;</div>

        Quelque soit votre modèle de téléphone Android ou Apple : iPhone 4, iPhone 4S, iPhone 5, iPhone 5S ou 5C, iPhone 6 et 6S et désormais l’iPhone 7, nous avons la solution. <div class="clearfix">&nbsp;</div>

        Dans notre boutique nous vous proposons également une gamme complète d’accessoires. Coques de protection, Cover, adaptateur, chargeur… Nous avons l’accessoire qu’il vous faut.
    </div>


<!-- ///////////////////////////////////////////////////////////////////-->



<div class="clearfix">&nbsp;</div>
      <!-- section accessoires -->
      <div class=" col-sm-12 coordonee">


        <section id="Coordonnées">
        <h2 class="text-center text-light">Coordonnées et informations de contact</h2>

        <div class="container">
          <div class="row">
            <div class="col-md-7">

              <div class="panel-body-map">
                <div id="map" style="height:550px;">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11616.45454193507!2d5.5702613!3d43.2909419!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1045673e61936775!2sPoint+Express+Mobile!5e0!3m2!1sfr!2sfr!4v1484905265941" width="630" height="520" frameborder="2" style="border:0" allowfullscreen></iframe>

                </div>
              </div>


            </div>

              <div class="col-md-4">

                <address>

                  63 Rue de la République  <br>
                  13400 Aubagne   <br>
                  France<br>
                  <div class="clearfix">&nbsp;</div>
                  Téléphone: 04 42 70 32 69<br>
                  E-mail:<a href="mailto:pointexpressmobile@gmail.com">pointexpressmobile@gmail.com</a><br>

               </address>

       <div class="clearfix">&nbsp;</div>
               <div class="row">
                 <div class="col-md-6">

                    <ul class="list-unstyled">
                     <li> Lundi</li>
                     <li>Mardi</li>
                     <li>Mercredi</li>
                     <li>Jeudi</li>
                     <li>Vendredi</li>
                     <li>Samedi</li>
                     <li>Dimanche</li>
                    </ul>

                 </div>
                  <div class="col-md-6">
                    <ul class="list-unstyled">
                     <li>09:00 - 19:00</li>
                     <li>09:00 - 19:00</li>
                     <li>09:00 - 19:00</li>
                     <li>09:00 - 19:00</li>
                     <li>09:00 - 19:00</li>
                     <li>09:00 - 19:00</li>
                     <li>Fermée</li>
                    </ul>

                  </div>


              </div>

          </div>
        </div>

        </section>
      </div> <!-- section /.oordonnées -->

<!-- ///////////////////////////////////////////////////////////////////-->

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>
<!-- ///////////////////////////////////////////////////////////////////-->


      <!-- Contact Form Starts -->
 <div class=" col-sm-12 contact">
            <div class="container">      <!-- Contact Section Starts -->
          <section id="contact" class="section">
          <!-- Nested Container Starts -->

            <h2 class="text-center text-light">Contactez-Nous</h2>
            <p class="text-center">
              List your app features and all the details Lorem ipsum. <br>
              Nam nec tellus a odio tincidunt auctor a ornare odio. Mauris vitae consequat auctor eu in elit.
            </p>
          <!-- Contact Form Starts -->
            <div class="">

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
    </div>		<!-- Contact Form Ends -->





@endsection
