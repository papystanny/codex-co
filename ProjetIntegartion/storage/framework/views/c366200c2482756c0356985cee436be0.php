<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php $__env->startSection('contenu'); ?>
<section class="main-container  align-items-center text-center h-100  py-5">
    <div class="container containerForm">
        <div style="width:50%;">
            <h1 class="titreForm">Connexion</h1>
                <form method="POST">
                    <?php echo csrf_field(); ?>
                    <h1>  welcome </H1>
                    <button type="submit" class="btn btn-primary">Se Connecter</button>

                </form>
            </h1>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projet Intergration\codex-co\ProjetIntegartion\resources\views/Formulaires/formulaireAcc.blade.php ENDPATH**/ ?>