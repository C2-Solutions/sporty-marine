<?php
?>
<div class="container" style="width: 60%; margin-top: 10px; margin-bottom: 20px">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">
                <form method="post" action="/new-model" class="model-info-form" style="float: left; width: 50%">
                    <label for="naam">
                        Naam:
                    </label><br>

                    <input type="text" id="naam" name="naam" required autofocus placeholder="Sporty 1"><br>

                    <label for="prijs">
                        Prijs:
                    </label><br>

                    <input type="number" inputmode="numeric" min="0" id="prijs" name="prijs" required
                           placeholder="15000">
                    <span>euro</span><br>

                    <label for="lengte">
                        Lengte:
                    </label><br>

                    <input type="number" inputmode="numeric" id="lengte" name="lengte" required
                           placeholder="5.50">
                    <span>m</span><br>

                    <label for="breedte">
                        Breedte:
                    </label><br>

                    <input type="number" inputmode="numeric" id="breedte" name="breedte" required
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

                    <select type="option" id="cec" name="cec" required">
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

                    <select type="option" id="status" name="status" required">
                    <option value="Nieuw">
                        Nieuw</option>
                    <option value="Demo">
                        Demo</option>
                    <option value="Occasion">
                        Occasion</option>
                    </select><br>

                    <label for="beschikbaarheid">
                        Beschikbaar?
                    </label>

                    <select type="option" id="beschikbaarheid" name="beschikbaarheid" required">
                    <option value="1">
                        Beschikbaar</option>
                    <option value="0">
                        Niet beschikbaar</option>
                    </select><br>

                    <input type="submit" name="new" value="Opslaan" class="btn btn-primary">
                </form>
                <table class="model-info-table" style="width: 50%">
                    <tr>
                        <th>Boot beschrijving:</th>
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
