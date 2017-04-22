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
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('pointexpressmobile', 'Réparation iPhone 7 - Smartphones à Aubagne - Point Express Mobile')); ?></title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- logo onglet moyeur de recherche -->
    <link rel="shortcut icon" href="logos/favicon.png"  />
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>

  <script type='text/javascript' src='/js/jquery.particleground.js'></script>
  <script type='text/javascript' src='/js/demo.js'></script>
</head>
<body>

</br>
  <div class="container">
      <div id="app">


  <?php echo $__env->yieldContent('content'); ?>



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
