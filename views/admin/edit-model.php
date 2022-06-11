<?php
$cec = $model['cec'];
$status = $model['status'];
$availability = $model['availability'];
?>
<div class="container" style="width: 60%; margin-top: 10px; margin-bottom: 20px">
    <div class="row">
        <div class="card" id="model_<?php echo $model['id']; ?>">
            <img src="public/img/<?php echo $model['image']; ?>"
                 class="card-img-top" alt="..." style="margin-top: 10px">
            <div class="card-body">
                <h5 class="card-title"><?php echo $model['name']; ?></h5>
                <p class="card-text">
                <form method="post" action="/edit-model" class="model-info-form" style="float: left; width: 50%">
                    <input type="hidden" name="id" value="<?php echo $model['id']; ?>">
                    <label for="prijs">
                        Prijs:
                    </label><br>

                    <input type="number" inputmode="numeric" step="0.01" min="0" id="prijs" name="prijs" required
                           autofocus value="<?php echo $model['price']; ?>">
                    <span>euro</span><br>

                    <label for="lengte">
                        Lengte:
                    </label><br>

                    <input type="number" inputmode="numeric" id="lengte" name="lengte" required
                           value="<?php echo $model['length']; ?>">
                    <span>m</span><br>

                    <label for="breedte">
                        Breedte:
                    </label><br>

                    <input type="number" inputmode="numeric" id="breedte" name="breedte" required
                           value="<?php echo $model['width']; ?>">
                    <span>m</span><br>

                    <label for="gewicht">
                        Gewicht:
                    </label><br>

                    <input type="number" inputmode="numeric" id="gewicht" name="gewicht" required
                           value="<?php echo $model['weight']; ?>">
                    <span>kg</span><br>

                    <label for="vaarthoogte">
                        Doorvaarthoogte:
                    </label><br>

                    <input type="number" inputmode="numeric" id="vaarthoogte" name="vaarthoogte" required
                           value="<?php echo $model['airdraft']; ?>">
                    <span>cm</span><br>

                    <label for="diepgang">
                        Diepgang:
                    </label><br>

                    <input type="number" inputmode="numeric" id="diepgang" name="diepgang" required
                           value="<?php echo $model['draft']; ?>">
                    <span>cm</span><br>

                    <label for="maxpk">
                        Max. PK:
                    </label><br>

                    <input type="number" inputmode="numeric" id="maxpk" name="maxpk" required
                           value="<?php echo $model['maxpk']; ?>">
                    <span>Pk</span><br>

                    <label for="maxpers">
                        Max. Personen:
                    </label><br>

                    <input type="number" inputmode="numeric" id="maxpers" name="maxpers" required
                           value="<?php echo $model['maxpers']; ?>"><br>

                    <label for="bouwjaar">
                        Bouwjaar:
                    </label><br>

                    <input type="number" min="1900" max="2099" step="1" inputmode="numeric"
                           id="bouwjaar" name="bouwjaar" required
                           value="<?php echo $model['builtin']; ?>"><br>

                    <label for="cec">
                        CE Categorie:
                    </label>

                    <select type="option" id="cec" name="cec" required">
                        <option value="A" <?php echo ($cec == 'A') ? 'selected' : ''?>>
                            A</option>
                        <option value="B" <?php echo ($cec == 'B') ? 'selected' : ''?>>
                            B</option>
                        <option value="C" <?php echo ($cec == 'C') ? 'selected' : ''?>>
                            C</option>
                        <option value="D" <?php echo ($cec == 'D') ? 'selected' : ''?>>
                            D</option>
                    </select><br>

                    <label for="status">
                        Status:
                    </label>

                    <select type="option" id="status" name="status" required">
                        <option value="Nieuw" <?php echo ($status == 'Nieuw') ? 'selected' : ''?>>
                            Nieuw</option>
                        <option value="Demo" <?php echo ($status == 'Demo') ? 'selected' : ''?>>
                            Demo</option>
                        <option value="Occasion" <?php echo ($status == 'Occasion') ? 'selected' : ''?>>
                            Occasion</option>
                    </select><br>

                    <label for="beschikbaarheid">
                        Beschikbaar?
                    </label>

                    <select type="option" id="beschikbaarheid" name="beschikbaarheid" required">
                        <option value="1" <?php echo ($availability == '1') ? 'selected' : ''?>>
                            Beschikbaar</option>
                        <option value="0" <?php echo ($availability == '0') ? 'selected' : ''?>>
                            Niet beschikbaar</option>
                    </select><br>

                    <input type="submit" name="edit" value="Update" class="btn btn-primary">
                </form>
                <table class="model-info-table" style="width: 50%">
                    <tr>
                        <th>Boot beschrijving:</th>
                    </tr>
                    <tr>
                        <td>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </td>
                    </tr>
                </table>
                </p>
            </div>

        </div>
    </div>
</div>
