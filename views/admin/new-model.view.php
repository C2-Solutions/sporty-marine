<div class="container" style="width: 60%; margin-top: 10px; margin-bottom: 20px">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nieuw Model</h5>
                <p class="card-text">
                <form method="post" action="/new-boat" class="model-info-form" enctype="multipart/form-data">

                <div style="float: left; width: 50%;">
                    <label for="naam">
                        Naam:
                    </label><br>

                    <input type="text" id="naam" name="naam" required autofocus placeholder="Sporty 1"><br>

                    <label for="prijs">
                        Prijs:
                    </label><br>

                    <input type="number" inputmode="numeric" step="0.01" min="0" id="prijs" name="prijs" required
                           placeholder="15000">
                    <span>euro</span><br>

                    <label for="lengte">
                        Lengte:
                    </label><br>

                    <input type="number" step="0.01" inputmode="numeric" id="lengte" name="lengte" required
                           placeholder="5.50">
                    <span>m</span><br>

                    <label for="breedte">
                        Breedte:
                    </label><br>

                    <input type="number" step="0.01" inputmode="numeric" id="breedte" name="breedte" required
                           placeholder="3.50">
                    <span>m</span><br>

                    <label for="gewicht">
                        Gewicht:
                    </label><br>

                    <input type="number" inputmode="numeric" id="gewicht" name="gewicht" required
                           placeholder="500">
                    <span>kg</span><br>

                    <label for="vaarthoogte">
                        Doorvaarthoogte:
                    </label><br>

                    <input type="number" inputmode="numeric" id="vaarthoogte" name="vaarthoogte" required
                           placeholder="85">
                    <span>cm</span><br>

                    <label for="diepgang">
                        Diepgang:
                    </label><br>

                    <input type="number" inputmode="numeric" id="diepgang" name="diepgang" required
                           placeholder="25">
                    <span>cm</span><br>

                    <label for="maxpk">
                        Max. PK:
                    </label><br>

                    <input type="number" inputmode="numeric" id="maxpk" name="maxpk" required
                           placeholder="30">
                    <span>Pk</span><br>

                    <label for="maxpers">
                        Max. Personen:
                    </label><br>

                    <input type="number" inputmode="numeric" id="maxpers" name="maxpers" required
                           placeholder="7"><br>

                    <label for="bouwjaar">
                        Bouwjaar:
                    </label><br>

                    <input type="number" min="1900" max="2099" step="1" inputmode="numeric"
                           id="bouwjaar" name="bouwjaar" required
                           placeholder="2020"><br>

                    <label for="cec">
                        CE Categorie:
                    </label>

                    <select id="cec" name="cec" required>
                        <option value="A">
                            A</option>
                        <option value="B">
                            B</option>
                        <option value="C">
                            C</option>
                        <option value="D">
                            D</option>
                    </select><br>

                    <label for="status">
                        Status:
                    </label>

                    <select id="status" name="status" required>
                        <option value="Nieuw">
                            Nieuw</option>
                        <option value="Demo">
                            Demo</option>
                        <option value="Occasion">
                            Occasion</option>
                    </select>
                    <br>

                    <label for="beschikbaarheid">
                        Beschikbaar?
                    </label>

                    <select id="beschikbaarheid" name="beschikbaarheid" required>
                        <option value="1">
                            Beschikbaar</option>
                        <option value="0">
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
                            <option value="<?php echo $type['id']?>">
                                <?php echo $type['type']?></option>
                            <?php
                        endforeach;
                        echo '</select><br>';
                    else :
                        echo '<b>Je kan nog geen boot aanmaken totdat je tenminste 1 boottype hebt</b>';
                    endif;
                    ?>
                </div>

                    <div style="float: right; width: 50%; text-align: center;">
                        <label for="beschrijving">
                            Beschrijving
                        </label><br>

                        <textarea id="beschrijving" name="beschrijving", rows="20" cols="50"
                                  placeholder="Vul hier in wat je verder nog wilt vertellen over de boot"></textarea>
                        <input type="file" name="fotos" accept="image/jpg"><br>
                        <input type="submit" name="new" value="Alles opslaan" class="btn btn-primary"
                               onclick="return confirm('Weet je zeker dat je dit wilt opslaan?')">
                    </div>
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>
