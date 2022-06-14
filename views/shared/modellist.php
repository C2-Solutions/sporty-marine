<div class="modellen col">
    <div class="card" id="model_<?php echo $model['id'];?>" style="margin-bottom: 10px">
        <a id="model_<?php echo $model['id']; ?>"
            href="
            <?php echo IsAdmin() ? 'edit-model?id=' : 'model?id=';
            echo $model['id']; ?>">
            <img src="public/img/<?php echo $model['image']; ?>"
                 class="card-img-top" alt="..." style="width: 494px; height: 200px">
        </a>
        <div class="card-body">
            <h5 class="card-title"><?php echo $model['name'];?></h5>
            <?php if (IsAdmin()) :
                ?>
                <a style="float: right" class="clickable" href="/delete-model?id=<?php echo $model['id']; ?> "
                   onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?')">
                   Verwijderen
                </a>
                <?php
            endif;
            ?>
            <p class="card-text">
            <table class="model-info-table">
                <tr>
                    <td>Prijs:</td>
                    <td><b>€ <?php echo number_format($model['price'], thousands_separator: '.');?>,-</b></td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td><?php echo $model['status'];?></td>
                </tr>
                <?php
                if (IsAdmin()) :
                    $avail = $model['availability'];
                    ?>
                    <tr>
                        <td style="color: <?php echo $avail == 1 ? 'green' : 'red'?>">
                            <?php echo $avail == 1 ? 'Zichtbaar voor klanten' : 'Niet zichtbaar voor klanten'?>
                        </td>
                    </tr>
                    <?php
                endif;
                ?>
            </table>
            </p>
        </div>
    </div>
</div>
