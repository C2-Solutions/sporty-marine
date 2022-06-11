<h1 style="color: dimgray; text-align: center">Dit is de modellenpagina</h1>

<div class="modellen row row-cols-1 row-cols-md-3 g-4">
    <?php
    if (!empty($models)) :
        foreach ($models as $model) {
            if ($model['availability'] == 1) :
                require('views/shared/modellist.php');
            endif;
        }
    else :
        echo 'Er bestaan nog geen modellen.';
    endif;
    ?>
</div>
