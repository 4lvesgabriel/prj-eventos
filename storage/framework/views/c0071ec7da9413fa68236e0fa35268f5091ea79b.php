<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent("title"); ?></title>
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- CSS BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="/css/style.css">
        <!-- JAVASCRIPT -->
        <script src="/js/script.js"></script>
       
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand logo-navbar">
                        <img src="/img/pinguim.png" alt="PRJ Eventos">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Criar Eventos</a>
                        </li>
                        <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus Eventos</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                <?php echo csrf_field(); ?>
                                <a  href="/logout" 
                                    class="nav-link" 
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    Sair
                                    </a>
                            </form>
                        </li>
                        <?php endif; ?>
                        <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastrar</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <?php if(session('msg')): ?>
                        <p class="msg"><?php echo e(session('msg')); ?></p>
                    <?php endif; ?>  
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </main>
        <footer><p>PRJ EVENTOS &copy; 2024</p></footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
<?php /**PATH C:\wamp64\www\prjeventos\resources\views/layouts/main.blade.php ENDPATH**/ ?>