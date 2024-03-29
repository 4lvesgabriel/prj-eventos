

<?php $__env->startSection('title', "Editando: ". $event->title); ?>
<?php $__env->startSection("content"); ?>

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: <?php echo e($event->title); ?></h1>
    <form action="/events/update/<?php echo e($event->id); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
            <img src="/img/events/<?php echo e($event->image); ?>" alt="<?php echo e($event->title); ?>" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" value="<?php echo e($event->title); ?>">
        </div>
        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date" value="<?php echo e($event->date->format('Y-m-d')); ?>">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento" value="<?php echo e($event->city); ?>">
        </div>
        <div class="form-group">
            <label for="private">O Evento é privado?:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1" <?php echo e($event->private == 1 ? "selected='selected'" : ""); ?>>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" placeholder="O que vai acontecer no evento?" class="form-control"><?php echo e($event->description); ?></textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione Itens de Infraestrutura:</label>   
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Bar"> Open Bar
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Food"> Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Evento">
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\prjeventos\resources\views/events/edit.blade.php ENDPATH**/ ?>