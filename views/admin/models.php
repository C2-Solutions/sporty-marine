<?php
?>

<div class="modellen row row-cols-1 row-cols-md-3 g-4">

    <div class="modellen col">
        <?php
        if(true === !empty($models)) :
                foreach ($models as $model) {
                    require('views/shared/admin/models.php');
                }
        else :
            echo 'Er bestaan nog geen modellen.';
        endif;
        ?>
</div>
