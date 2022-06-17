<h1 style="color: dimgray; text-align: center">Boottypes instellingen</h1>

<h2 style="text-align: center">
    <button>
        <a href="/new-type" class="clickable" style="color: dimgray;">Voeg een nieuw type toe</a>
    </button>
</h2>
<div class="card-body center">
    <table>
        <?php
        if (!empty($types)) :
            ?>
            <tr>
                <th>Types</th>
                <th>Wijgigen</th>
                <th>Verwijder?</th>

            </tr>
            <?php
            foreach ($types as $type) :
                foreach ($models as $model) :
                    if ($model['boattype'] == $type['id']) :
                        $type['id'] = 'exists';
                        break;
                    endif;
                endforeach;
                ?>
                <?php if ($type['id'] == 'exists') :?>
                <tr>
                    <td>
                        <?php echo $type['type'];?>
                    </td>
                    <td colspan="2">
                        Je kan deze type niet wijgizen of verwijderen want er bestaan nog boten met dit type.
                    </td>
                <?php else : ?>
                <form method="post" action="/edit-type" class="type-edit-form">
                    <input type="hidden" name="id" value="<?php echo $type['id']; ?>">
                    <tr>
                        <td>
                            <input type="text" id="type" name="type" required
                                   autofocus value="<?php echo $type['type'];?>">
                        </td>
                        <td>
                            <input type="submit" name="edit" value="Wijzig" class="btn btn-primary"
                                   onclick="return confirm('Weet je zeker dat je deze naam wilt wijgigen?')">
                        </td>
                    <form>
                    <td>
                        <a class="clickable btn btn-danger" href="/delete-type?id=<?php echo $type['id']; ?> "
                           onclick="return confirm('Weet je zeker dat je deze type verwijderen? ' +
                            'Je kan hem dan niet meer gebruiken op de site.')">Verwijderen</a>
                        </td>
                    </tr>
                <?php endif; ?>
                <?php
            endforeach;
        else :
            echo 'Er zijn op dit moment nog geen bestaande boottypes! Maak er een aan om boten aan te kunnen maken!';
        endif;
        ?>
    </table>
</div>
