<?php echo '<h1 style="font-size: 40px; color: dimgray; text-align: center">Dit is de admin modellenpagina</h1>'; ?>

<div class="modellen row row-cols-1 row-cols-md-3 g-4">
        <?php
        if (!empty($models)) :
            foreach ($models as $model) {
                require('views/shared/admin/modellist.php');
            }
        else :
            echo 'Er bestaan nog geen modellen.';
        endif;
        ?>
</div>
