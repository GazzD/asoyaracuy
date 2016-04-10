<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Asoyaracuy</title>
        <?php echo Html::style('frontend/css/bootstrap.min.css'); ?>

        <?php echo Html::style('frontend/css/style.css'); ?>

        
        
		<?php echo Html::script('frontend/js/script.js'); ?>

		<?php echo Html::script('frontend/js/jquery.min.js'); ?>

		<?php echo Html::script('frontend/js/bootstrap.min.js'); ?>

    </head>

    <body>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>