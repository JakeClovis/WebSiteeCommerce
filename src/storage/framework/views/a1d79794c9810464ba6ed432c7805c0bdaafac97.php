<?php $__env->startSection('content'); ?>





  <?php if(session('message')): ?>
        <div class="alert alert-success ">
          <?php echo e(session('message')); ?>

        </div>

  <?php endif; ?>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Laisser un comentaire</div>

                <div class="container-fluid">
                <div class="form-group">
                  <form class="form-horizontal" role="form"  action="<?php echo e(url('/comment')); ?>" method="POST">

                  <div class="ratebox" data-id="1" data-rating="2.2"></div>

                </br><label for="exampleTextarea">Votre avis compte pour nous</label>

                        <?php echo e(csrf_field()); ?>


                    <?php if($errors->has('comment')): ?>
                    <textarea class="form-control no-border-radius" rows="5" name="comment" id="comment"  placeholder="Message"  autofocus></textarea>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('comment')); ?></strong>
                        </span>

                      <?php else: ?>
                      <textarea class="form-control no-border-radius" rows="5" name="comment" id="comment"  placeholder="Message" ></textarea>
                    <?php endif; ?>


                  <div class="clearfix">&nbsp;</div>

                  <div class="pull-right">
                  <input class="btn btn-sm" type="reset" value="Reset">
                  <input class="btn btn-sm btn-primary" type="submit" value="Send">

                  <div class="clearfix">&nbsp;</div>



                </div>
                </form>
                </div>
              </div>





            </div>
        </div>
    </div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>