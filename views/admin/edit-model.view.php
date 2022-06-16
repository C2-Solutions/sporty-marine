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
                <form method="post" action="/edit-model" class="model-info-form">

                <div style="float: left; width: 50%;">
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

                        <input type="number" step="0.01" inputmode="numeric" id="lengte" name="lengte" required
                               value="<?php echo $model['lgth']; ?>">
                        <span>m</span><br>

                        <label for="breedte">
                            Breedte:
                        </label><br>

                        <input type="number" step="0.01" inputmode="numeric" id="breedte" name="breedte" required
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

                        <select id="cec" name="cec" required>
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

                        <select id="status" name="status" required>
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

                        <select id="beschikbaarheid" name="beschikbaarheid" required>
                            <option value="1" <?php echo ($availability == '1') ? 'selected' : ''?>>
                                Beschikbaar</option>
                            <option value="0" <?php echo ($availability == '0') ? 'selected' : ''?>>
                                Niet beschikbaar</option>
                        </select><br>
                    <?php
                    if (!empty($types)) :
                        ?>
                    <label for="type">
                        Type boot:
                    </label>

                    <select id="type" name="type" required>
                        <?php
                        foreach ($types as $type) :
                            ?>
                        <option value="<?php echo $type['id']?>"
                            <?php echo ($type['type'] == $model['type']) ? 'selected' : ''?>>
                            <?php echo $type['type']?></option>
                            <?php
                        endforeach;
                        echo '</select><br>';
                    endif;
                    ?>
                    </div>
                <div style="float: right; width: 50%; text-align: center;">
                    <label for="beschrijving">
                        Beschrijving
                    </label><br>

                    <textarea id="beschrijving" name="beschrijving" rows="20" cols="50"
                              placeholder="Vul hier in wat je verder nog wilt vertellen over de boot"
                    ><?php echo $model['description']; ?></textarea>
                    <input type="submit" name="new" value="Alles opslaan" class="btn btn-primary"
                           onclick="return confirm('Weet je zeker dat je dit wilt opslaan?')">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
