<div class="modellen col">
    <div class="card" id="model_<?php echo $model['id'];?>">
        <a id="model_<?php echo $model['id']; ?>" href="model?id=<?php echo $model['id']; ?>">
            <img src="public/img/<?php echo $model['image']; ?>" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
            <h5 class="card-title"><?php echo $model['name'];?></h5>
            <p class="card-text">
            <table class="model-info-table">
                <tr>
                    <td>Lengte:</td>
                    <td><?php echo $model['length'];?></td>
                </tr>
                <tr>
                    <td>Breedte:</td>
                    <td><?php echo $model['width'];?></td>
                </tr>
                <tr>
                    <td>Gewicht:</td>
                    <td><?php echo $model['weight'];?></td>
                </tr>
                <tr>
                    <td>Doorvaarthoogte:</td>
                    <td><?php echo $model['airdraft'];?></td>
                </tr>
                <tr>
                    <td>Diepgang:</td>
                    <td><?php echo $model['draft'];?></td>
                </tr>
                <tr>
                    <td>Max. PK:</td>
                    <td><?php echo $model['maxpk'];?></td>
                </tr>
                <tr>
                    <td>Max. Personen:</td>
                    <td><?php echo $model['maxpers'];?></td>
                </tr>
                <tr>
                    <td>CE Categorie:</td>
                    <td>Cat <?php echo $model['cec'];?></td>
                </tr>
            </table>
            </p>
        </div>
    </div>
</div>
