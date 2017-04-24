<?php $__env->startSection('content'); ?>



<!-- ///////////////////////////////////////////////////////////////////-->

      <div class="container">
          <?php if(session('message')): ?>
                <div class="alert alert-success">
                  <?php echo e(session('message')); ?>

                </div>

          <?php endif; ?>
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
                                <?php if(Auth::guest()): ?>
                                <a class="btn btn-theme btn-sm btn-min-block" href="<?php echo e(route('login')); ?>">Login</a>
                                <a class="btn btn-theme btn-sm btn-min-block" href="<?php echo e(route('register')); ?>">Register</a>

                                <?php endif; ?>
                              </div>
                          </div>
                          <div class="item">
                              <img class="first-slide" src="Slide/slide1.jpg" alt="First slide">
                              <div class="carousel-caption">
                                <?php if(Auth::guest()): ?>
                                <a class="btn btn-theme btn-sm btn-min-block" href="<?php echo e(route('login')); ?>">Login</a>
                                <a class="btn btn-theme btn-sm btn-min-block" href="<?php echo e(route('register')); ?>">Register</a>
                                <?php endif; ?>
                              </div>
                          </div>
                          <div class="item">
                              <img class="first-slide" src="Slide/slide1.jpg" alt="First slide">
                              <div class="carousel-caption">
                                <?php if(Auth::guest()): ?>
                                <a class="btn btn-theme btn-sm btn-min-block" href="<?php echo e(route('login')); ?>">Login</a>
                                <a class="btn btn-theme btn-sm btn-min-block" href="<?php echo e(route('register')); ?>">Register</a>
                                <?php endif; ?>
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
        <h2 class="text-center text-light text-danger">Votre iPhone est cassé ? Pas de problème</h2>

        <div class="container">
          <div class="row">

            <div class="row">
                <div class="col">
                  <div class="col-md-5  wow slideInUp animated">
                    <img class="img-responsive details-phone" src="img/verticle-phone.png" alt="">
                  </div>
                </div>
                <div class="col">

                  <div class="col-md-7 animated ">
                      <div class="clearfix">&nbsp;</div>
                      <div class="clearfix">&nbsp;</div>
                    <h1 class="text-danger">Une intervention rapide</h1>

                    Votre téléphone est cassé ou en panne ?
                    Pas de problème, nous nous occupons de tout.
                      <div class="clearfix">&nbsp;</div>
                    Nous intervenons sur votre smartphone immédiatement et sans aucun rendez-vous pour votre réparation
                    et nous la garantissons de 3 à 12 mois.
                    <div class="clearfix">&nbsp;</div>
                    <h1 class="text-danger">Sans aucun rendez-vous </h1>
                    Chez nous, pas besoin de rendez-vous !

                    Si la pièce à remplacer est en stock, nous nous en occupons immédiatement.
                      <div class="clearfix">&nbsp;</div>
                    <h1 class="text-danger">Vous n’avez pas d’iPhone ? </h1>
                    Nous réparons également les téléphones Android de la marque Samsung, Wiko, Sony, HTC…
                      <div class="clearfix">&nbsp;</div>
                    Nous vous invitons à vous rendre en boutique ou de nous contacter par téléphone au 04 42 70 32 69


                  </div>
                </div>
          </div>

        </div>

        </div>

      </br>
            <h4 class="text-center text-light">  &#8211; Service de déblocage &#8211; </h4>
        <h2 class="text-center text-light">Votre iPhone est bloqué ? On s’en occupe </h2>


        <div class="container">
          <div class="row">
            <div class="col-xs-8 wow fadeInLeft animated">
                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>
                  <div class="clearfix">&nbsp;</div>
              <h1 class="text-center text-light text-danger">Une intervention rapide</h1>
                <div class="clearfix">&nbsp;</div>
              Vous possédez un smartphone ou téléphone bloqué sur un opérateur français ou étranger ?
                <div class="clearfix">&nbsp;</div>
              Point Express Mobile, vous desimlock votre iPhone, Smartphone ou mobile simplement pour que
              vous téléphone accepte les puces des opérateurs du monde entier.

            </div>

              <div class="col-xs-4 horizontal-phone wow fadeInRight animated">
                <img class="img-responsive" src="img/iphone7.jpg" alt="phone">
              </div>

          </div>
        </div>




        </section>
      </div>  <!-- section /.reparation -->


<!-- ///////////////////////////////////////////////////////////////////-->
        <!-- section vente -->

        <section id="vente">
        <h2 class="text-center text-light">Nos smartphones</h2>

        <div class="bg-4">
  <div class="container">
	<div class="row">
	   <div class="col-sm-4 col-xs-6">

        <div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#"><img src="//placehold.it/600x400/444/F8F8F8" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>Renovations</p>
            <p></p>

          </div>
        </div><!--/panel-->
      </div><!--/col-->

      <div class="col-sm-4 col-xs-6">

      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#"><img src="//placehold.it/600x400/454545/FFF" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>Projects</p>
            <p></p>

          </div>
        </div><!--/panel-->
      </div><!--/col-->

      <div class="col-sm-4 col-xs-6">

      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="Interiors"><img src="//placehold.it/600x400/555/F2F2F2" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>Interiors</p>
            <p></p>

          </div>
        </div><!--/panel-->

      </div><!--/col-->

      <div class="col-sm-4 col-xs-6">

      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#"><img src="//placehold.it/600x400/555/FFF" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>Design</p>
            <p></p>

          </div>
        </div><!--/panel-->

      </div><!--/col-->

      <div class="col-sm-4 col-xs-6">

      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#"><img src="//placehold.it/600x400/555/EEE" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>Site Planning</p>
            <p></p>

          </div>
        </div><!--/panel-->

      </div><!--/col-->

      <div class="col-sm-4 col-xs-6">

      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#"><img src="//placehold.it/600x400/666/F4F4F4" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>More</p>
            <p></p>

          </div>
        </div><!--/panel-->

      </div><!--/col-->

	</div><!--/row-->
  </div><!--/container-->
</div>


        </section>
      <!-- section /.vente -->

<!-- ///////////////////////////////////////////////////////////////////-->

      <!-- section accessoires -->
      <div class=" col-sm-12 col-sm-push ">


        <section id="accessoires">
        <h2 class="text-center text-light">Protéger votre mobile avec nos accessoires</h2>


        </section>
      </div> <!-- section /.accessoires -->

<!-- ///////////////////////////////////////////////////////////////////-->

</div>
</div>

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

            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/contact')); ?>">
              <?php echo e(csrf_field()); ?>

                <div class="row">
                <!-- Name Field Starts -->
                  <div class="col-sm-4 col-xs-10">
                    <div class="form-group">


                      <label for="name" class="sr-only">Name: </label>

                      <?php if($errors->has('name')): ?>
                      <input type="text" class="form-control no-border-radius" name="name" id="name"  placeholder="Name" value="<?php echo e(old('name')); ?>" autofocus>
                          <span class="help-block">
                              <strong><?php echo e($errors->first('name')); ?></strong>
                          </span>
                      <?php else: ?>

                        <input type="text" class="form-control no-border-radius" name="name" id="name"  placeholder="Name" value="<?php echo e(old('name')); ?>">
                      <?php endif; ?>
                    </div>
                  </div>
                <!-- Name Field Ends -->
                <!-- Email Field Starts -->
                  <div class="col-sm-4 col-xs-10">
                    <div class="form-group">
                      <label for="email" class="sr-only">Email: </label>

                      <?php if($errors->has('email')): ?>
                      <input type="text" class="form-control no-border-radius" name="email" id="email"  placeholder="Email" value="<?php echo e(old('email')); ?>" autofocus>
                          <span class="help-block">
                              <strong><?php echo e($errors->first('email')); ?></strong>
                          </span>

                        <?php else: ?>
                        <input type="text" class="form-control no-border-radius" name="email" id="email"  placeholder="Email" value="<?php echo e(old('email')); ?>">
                      <?php endif; ?>
                    </div>
                  </div>
                <!-- Email Field Ends -->
                <!-- Phone Field Starts -->
                  <div class="col-sm-4 col-xs-10">
                    <div class="form-group">
                      <label for="name" class="sr-only">Phone: </label>

                      <?php if($errors->has('phone')): ?>
                        <input type="text" class="form-control no-border-radius" name="phone" id="phone"  placeholder="Phone No" value="<?php echo e(old('phone')); ?>" autofocus>
                          <span class="help-block">
                              <strong><?php echo e($errors->first('phone')); ?></strong>
                          </span>

                     <?php else: ?>
                     <input type="text" class="form-control no-border-radius" name="phone" id="phone"  placeholder="Phone No" value="<?php echo e(old('phone')); ?>">
                      <?php endif; ?>
                    </div>
                  </div>
                <!-- Phone Field Ends -->
                <!-- Message Field Starts -->
                  <div class="col-xs-12">
                    <div class="form-group">
                      <label for="message" class="sr-only">Message: </label>

                      <?php if($errors->has('message')): ?>
                      <textarea class="form-control no-border-radius" rows="5" name="message" id="message"  placeholder="Message" autofocus></textarea>
                          <span class="help-block">
                              <strong><?php echo e($errors->first('message')); ?></strong>
                          </span>
                        <?php else: ?>
                        <textarea class="form-control no-border-radius" rows="5" name="message" id="message"  placeholder="Message" ></textarea>
                      <?php endif; ?>
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





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>