<h1 style="color: dimgray; text-align: center">Dit is de admin modellenpagina</h1>
<h2 style="text-align: center">
    <button>
        <a href="/new-boat" class="clickable" style="color: dimgray;">Voeg een nieuwe boot toe</a>
    </button>
</h2>

<div class="modellen row row-cols-1 row-cols-md-3 g-4">
    <?php
    if (!empty($models)) :
        foreach ($models as $model) {
                require('views/models/modellist.php');
        }
    else :
        echo 'Er bestaan nog geen modellen.';
    endif;
    ?>
</div>
