<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('CV de David Martinez')); ?></div>

                <div class="card-body d-flex justify-content-center">
                    <img src="<?php echo e(asset ('/img/foto.png')); ?>" class="w-50 ">
                </div>
                <div class="card-body d-flex justify-content-center">
                    Breve resumen del perfil profesional
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card-header  mt-4"><?php echo e(__('Experiencias profesionales')); ?></div>

            <?php $__currentLoopData = $professionals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <?php if($experience->giturl != ''): ?>
                        <a href="<?php echo e($experience->giturl); ?>" target="_blank"><img src="<?php echo e(asset ('/img/git.png')); ?>"
                                style="height: 2em"></a>
                        <?php endif; ?>
                        <?php if($experience->pageurl != ''): ?>
                        <a href="<?php echo e($experience->pageurl); ?>" target="_blank"><img src="<?php echo e(asset ('/img/chrome.png')); ?>"
                                style="height: 2em"></a>
                        <?php endif; ?>
                    </div>



                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            

            <div class="card-header mt-4"><?php echo e(__('Formación')); ?></div>

            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <a href="<?php echo e($experience->giturl); ?>" target="_blank"><img src="<?php echo e(asset ('/img/git.png')); ?>"
                                style="height: 2em"></a>
                        <?php endif; ?>
                        <?php if(isset($experience->pageurl)): ?>
                        <a href="<?php echo e($experience->pageurl); ?>" target="_blank"><img src="<?php echo e(asset ('/img/chrome.png')); ?>"
                                style="height: 2em"></a>
                        <?php endif; ?>
                    </div>



                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            



        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/recap04/resources/views/home.blade.php ENDPATH**/ ?>