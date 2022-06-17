<h1 style="color: dimgray; text-align: center">Dit is de admin boten pagina</h1>
<h2 style="text-align: center">
    <button>
        <a href="/new-boat" class="clickable" style="color: dimgray;">Voeg een nieuwe boot toe</a>
    </button>
</h2>

<?php
if (!empty($models)) :
    ?>
<div class="modellen row row-cols-1 row-cols-md-3 g-4">
    <?php
    foreach ($models as $model) {
        if ($model['availability'] == 1) :
            require('views/models/modellist.php');
        endif;
    }
    echo '</div>';
else :
    echo '<div class="center"><b>Er bestaan nog geen modellen.</b></div><br><br><br><br><br><br>';
endif;
?>
