<div class="modellen col">
    <div class="card" id="model_<?php echo $model['id'];?>" style="margin-bottom: 10px">
        <a id="model_<?php echo $model['id']; ?>" href="model?id=<?php echo $model['id']; ?>">
            <img src="public/img/<?php echo $model['image']; ?>"
                 class="card-img-top" alt="..." style="width: 494px; height: 200px">
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
            </table>
            </p>
        </div>
    </div>
</div>
