<?php $__env->startSection('contenido'); ?>
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="<?php echo route('recaudos.index'); ?>">Recaudos</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             <?php echo $__env->make('coreui-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Recaudos</strong>
                          </div>
                          <div class="card-body">
                              <?php echo Form::model($recaudos, ['route' => ['recaudos.update', $recaudos->id], 'method' => 'patch']); ?>


                              <?php echo $__env->make('recaudos.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                              <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andre\Desktop\proyecto\resources\views/recaudos/edit.blade.php ENDPATH**/ ?>