<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>   
    <style>
        .page-break {
            page-break-after: always;
        }
        </style>
</head>
<body>        
    <img src="<?php echo e(public_path('logo2.jpg')); ?>" style="width: 70px; height: 50px">
    <h4 style="text-align: center;">Listado de Convenios</h4>
    <div style="background-color: #688a7e; height: 16px"></div>
          <br>          
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Código</th>
                    <th>Fecha</th>
                    <th>Forma pago</th>
                    <th>Concepto</th>
                    <th>Valor</th>                                                    
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $gastos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="table-danger">
                        <td><?php echo e($value->codGasto); ?></td>
                        <td><?php echo e($value->fecGasto); ?></td>
                        <td><?php echo e($value->forPago); ?> <?php echo e($value->sNom); ?></td>
                        <td><?php echo e($value->concep); ?> <?php echo e($value->sApe); ?></td>
                        <td><?php echo e($value->valor); ?></td>                                                                                                              
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>                    
</body>
</html>






<?php /**PATH C:\Users\andre\Desktop\proyecto\resources\views/pdf/gastos.blade.php ENDPATH**/ ?>