<div class="container" style="width: 60%; margin-top: 10px; margin-bottom: 20px">
    <div class="row">
        <div class="card" id="model_<?php echo $model['id']; ?>">
            <img src="public/img/<?php echo $model['image']; ?>" class="card-img-top" alt="" style="margin-top: 10px">
            <div class="card-body">
                <?php echo '<h1 style="font-size: 40px; color: dimgray; text-align: center">Edit hier je model</h1>'; ?>
                <form method="post" action="/edit-model">
                    <input type="hidden" name="id" value="<?php echo $model['id']; ?>">
                    <h5 class="card-title"><?php echo $model['name']; ?></h5>
                    <p class="card-text">
                    <table class="model-info-table" style="float: left; width: 50%">
                        <tr>
                            <th>Boot details:</th>
                        </tr>
                        <tr>
                            <td>Lengte:</td>
                            <td><input type="text" name="lengte" required value="<?php echo $model['length']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Breedte:</td>
                            <td><input type="text" name="breedte" required value="<?php echo $model['width']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Gewicht:</td>
                            <td><input type="text" name="gewicht" required value="<?php echo $model['weight']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Doorvaarthoogte:</td>
                            <td>
                                <input type="text" name="vaarthoogte" required
                                       value="<?php echo $model['airdraft']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Diepgang:</td>
                            <td><input type="text" name="diepgang" required value="<?php echo $model['draft']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Max. PK:</td>
                            <td><input type="text" name="maxpk" required value="<?php echo $model['maxpk']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Max. Personen:</td>
                            <td><input type="text" name="maxpers" required value="<?php echo $model['maxpers']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>CE Categorie:</td>
                            <td><input type="text" name="cec" required value="<?php echo $model['cec']; ?>"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="edit" value="Update" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
                <table class="model-info-table" style="width: 50%">
                    <tr>
                        <th>Boot description:</th>
                    </tr>
                    <tr>
                        <td>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco

                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat

                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut

                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in

                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </td>
                    </tr>
                </table>
                </p>
            </div>

        </div>
    </div>
</div>