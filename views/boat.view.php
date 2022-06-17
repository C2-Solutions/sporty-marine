<div class="container" style="width: 60%; margin-top: 10px; margin-bottom: 20px">
    <div class="row">
        <div class="card" id="model_<?php echo $model['id']; ?>">
            <img src="public/img/<?php echo $model['image']; ?>"
                 class="card-img-top" alt="..." style="margin-top: 10px">
            <div class="card-body">
                <h5 class="card-title"><?php echo $model['name']; ?></h5>
                <div style="float: right; overflow-wrap: break-word; width: 50%">
                    <label for="beschrijving">
                        Beschrijving
                    </label><br>

                    <textarea id="beschrijving" rows="20" cols="50"
                              style="border-style: none; border-color: transparent; outline: none"
                    ><?php echo $model['description']; ?></textarea>
                </div>

                <table class="model-info-table" style="float: left; width: 50%">
                    <tr>
                        <th>Boot details:</th>
                    </tr>
                    <tr>
                        <td>Prijs:</td>
                        <td><?php echo $model['price']; ?></td>
                    </tr>
                    <tr>
                        <td>Boottype:</td>
                        <td><?php echo $model['type']; ?></td>
                    </tr>
                    <tr>
                        <td>Lengte:</td>
                        <td><?php echo $model['lgth']; ?></td>
                    </tr>
                    <tr>
                        <td>Breedte:</td>
                        <td><?php echo $model['width']; ?></td>
                    </tr>
                    <tr>
                        <td>Gewicht:</td>
                        <td><?php echo $model['weight']; ?></td>
                    </tr>
                    <tr>
                        <td>Doorvaarthoogte:</td>
                        <td><?php echo $model['airdraft']; ?></td>
                    </tr>
                    <tr>
                        <td>Diepgang:</td>
                        <td><?php echo $model['draft']; ?></td>
                    </tr>
                    <tr>
                        <td>Max. PK:</td>
                        <td><?php echo $model['maxpk']; ?></td>
                    </tr>
                    <tr>
                        <td>Max. Personen:</td>
                        <td><?php echo $model['maxpers']; ?></td>
                    </tr>
                    <tr>
                        <td>CE Categorie:</td>
                        <td><?php echo $model['cec']; ?></td>
                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td><?php echo $model['status']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
