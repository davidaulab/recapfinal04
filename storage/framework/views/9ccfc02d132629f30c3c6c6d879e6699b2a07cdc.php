<?php $__env->startSection('content'); ?>

<div class="container">
    
    <div class="row d-flex justify-content-between">
    <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- ['title', 'description', 'company', 'tipo', 'pageurl', 'giturl', 'from', 'to'];
-->
    <div class="card mt-4 justify-content-center text-center w-100">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($experience->title); ?></h5>
          <p class="card-text"><?php echo e($experience->company); ?> - desde <?php echo e($experience->from); ?> 
            <?php if(isset($experience->to)): ?>
                 hasta <?php echo e($experience->to); ?>

            <?php endif; ?>
         </p>
         <p class="card-text">
          <?php $__currentLoopData = $experience->tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($tool->url == ''): ?>
            <span class="badge bg-<?php echo e($tool->color); ?>"><?php echo e($tool->name); ?></span>
            <?php else: ?>
            <img src="<?php echo e($tool->url); ?>" style="height: 1.5em" alt="<?php echo e($tool->name); ?>"
                tooltip="<?php echo e($tool->name); ?>">
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </p>
         <p class="card-text"><?php echo e($experience->description); ?></p>
         <div class="m-3"> 
            <?php if(isset($experience->giturl)): ?>
                <a href="<?php echo e($experience->giturl); ?>" target="_blank"><img src="<?php echo e(asset ('/img/git.png')); ?>" style="height: 2em"></a>
            <?php endif; ?>   
            <?php if(isset($experience->pageurl)): ?>
            <a href="<?php echo e($experience->pageurl); ?>" target="_blank"><img src="<?php echo e(asset ('/img/chrome.png')); ?>" style="height: 2em"></a>
             <?php endif; ?>  
        </div> 
       

         
          <a href="<?php echo e(route ('experiences.show', $experience)); ?>" class="btn btn-primary">Ver detalle</a>
        </div>
      </div>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php if(auth()->guard()->check()): ?>
    <div class=" d-flex justify-content-center mt-4">
      <a href="<?php echo e(route ('experiences.create')); ?>" class="btn btn-primary">Nueva experiencia</a>
</div>      
    <?php endif; ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/recap04/resources/views/experiences/index.blade.php ENDPATH**/ ?>