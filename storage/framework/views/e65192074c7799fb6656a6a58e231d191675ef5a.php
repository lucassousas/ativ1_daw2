<?php $__env->startSection("titulo", "Cadastro de carros"); ?>

<?php $__env->startSection("formulario"); ?>
    <form method="POST" action="/carro" class="row">
        <div class="form-group">
            <label>Marca:</label>
            <input type="text" name="marca" value="<?php echo e($carro->marca); ?>"  class="form-control" /> 
        </div>
        <div class="form-group">
            <label>Modelo:</label>
            <input type="text" name="modelo" value="<?php echo e($carro->modelo); ?>"  class="form-control"/>
        </div>
        <div class="form-group">
            <label>Placa:</label>
            <input type="text" name="placa" value="<?php echo e($carro->placa); ?>"  class="form-control" />
        </div>
        <div class="form-group">
            <label>Cor:</label>
            <input type="text" name="cor" value="<?php echo e($carro->cor); ?>"  class="form-control" />
        </div>
        <div class="form-group">
            <label>Ano:</label>
            <select name="ano"  class="form-control">
                <option value=""></option>
                <option value="21" <?php echo e($carro->ano == "21" ? "selected" : ""); ?>>2021</option>
                <option value="20" <?php echo e($carro->ano == "20" ? "selected" : ""); ?>>2020</option>
                <option value="19" <?php echo e($carro->ano == "19" ? "selected" : ""); ?>>2019</option>
                <option value="18" <?php echo e($carro->ano == "18" ? "selected" : ""); ?>>2018</option>
                <option value="17" <?php echo e($carro->ano == "17" ? "selected" : ""); ?>>2017</option>
                <option value="16" <?php echo e($carro->ano == "16" ? "selected" : ""); ?>>2016</option>
                <option value="15" <?php echo e($carro->ano == "15" ? "selected" : ""); ?>>2015</option>
                <option value="14" <?php echo e($carro->ano == "14" ? "selected" : ""); ?>>2014</option>
                <option value="13" <?php echo e($carro->ano == "13" ? "selected" : ""); ?>>2013</option>
                <option value="12" <?php echo e($carro->ano == "12" ? "selected" : ""); ?>>2012</option>
                <option value="11" <?php echo e($carro->ano == "11" ? "selected" : ""); ?>>2011</option>
                <option value="10" <?php echo e($carro->ano == "10" ? "selected" : ""); ?>>2010</option>
            </select>
        </div>
        <div class="form-group">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e($carro->id); ?>"  class="form-control" />
            <button type="submit" class="btn btn-success"><i class="bi-save"></i> Salvar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("tabela"); ?>
    <table class="table table-striped">
        <colgroup>
            <col width="200">
            <col width="200">
            <col width="100">
            <col width="100">
        </colgroup>
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $carros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($carro->marca); ?></td>
                    <td><?php echo e($carro->modelo); ?></td>
                    <td>
                        <a class="btn btn-warning" href="/carro/editar/<?php echo e($carro->id); ?>"><i class="bi bi-pencil-square"></i> Editar</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="/carro/excluir/<?php echo e($carro->id); ?>"><i class="bi bi-trash3-fill"></i> Excluir</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("templates.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucas/Documentos/lucas/ativ1/resources/views/carro/index.blade.php ENDPATH**/ ?>