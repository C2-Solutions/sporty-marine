<?php echo '<h1>Dit is een modellenpagina</h1>'; ?>

<!--<center><h1>Sporty</h1></center>-->
<!--<hr class="bg-grey border-2 border-top border-grey">-->
<div class="modellen row row-cols-1 row-cols-md-3 g-4">
    <?php
    if (!empty($models)) :
        foreach ($models as $model) {
            require('views/shared/modellist.php');
        }
    else :
        echo 'Er bestaan nog geen modellen.';
    endif;
    ?>
</div>
