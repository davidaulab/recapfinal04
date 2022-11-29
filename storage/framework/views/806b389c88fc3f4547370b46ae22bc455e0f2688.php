<?php $__env->startSection('content'); ?>

<div class="container">
<form method="post" action="<?php echo e(route('experiences.update', $experience)); ?>" enctype="multipart/form-data">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="title" class="form-label">Titulo</label>
            <input type="text" name="title" class="form-control" id="title" value="<?php echo e($experience->title); ?>">
          </div>
          <div class="mb-3">
            <label for="company" class="form-label">Compañía</label>
            <input type="text" name="company" class="form-control" id="company" value="<?php echo e($experience->company); ?>">
          </div>
          <div class="mb-3">
            <label for="from" class="form-label">Desde</label>
            <input type="date" name="from" class="form-control" id="from" value="<?php echo e($experience->from); ?>">
          </div>
          <div class="mb-3">
            <label for="to" class="form-label">Hasta</label>
            <input type="date" name="to" class="form-control" id="to" value="<?php echo e($experience->to); ?>">
          </div>
          <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
           
            <select name="tipo" id="tipo" class="form-control">
                <option value="Formativa" <?php echo e(( ($experience->tipo == "Formativa") ? " checked " : "")); ?>>Experiencia formativa</option>
                <option value="Profesional" <?php echo e(( ($experience->tipo == "Profesional") ? " checked " : "")); ?>>Experiencia profesional</option>    
            </select>
          </div>
          <div class="mb-3">
            <label for="pageurl" class="form-label">Url aplicación</label>
            <input type="text" name="pageurl" class="form-control" id="pageurl" value="<?php echo e($experience->pageurl); ?>">
          </div>
          <div class="mb-3">
            <label for="giturl" class="form-label">Url código</label>
            <input type="text" name="giturl" class="form-control" id="giturl" value="<?php echo e($experience->giturl); ?>">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea id="description" name="description" class="form-control"><?php echo e($experience->description); ?></textarea>
          </div>
          <div class="mb-3">
          <?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <input type="checkbox" name="tools[]" id="tools_<?php echo e($tool->id); ?>" value="<?php echo e($tool->id); ?>"  
              <?php echo e(( ($experience->tools->find ($tool->id) ) ? " checked " : "")); ?>

              > 
              <?php if($tool->url == ''): ?>
              <span class="badge bg-<?php echo e($tool->color); ?>"><?php echo e($tool->name); ?></span>
              <?php else: ?>
              <img src="<?php echo e($tool->url); ?>" style="height: 1.5em" alt="<?php echo e($tool->name); ?>" tooltip="<?php echo e($tool->name); ?>">
              <?php endif; ?>  
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
          <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/recap04/resources/views/experiences/edit.blade.php ENDPATH**/ ?>