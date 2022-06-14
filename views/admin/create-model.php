<?php ?>
<div class="container" style="width: 60%; margin-top: 10px; margin-bottom: 20px">
    <div class="row">
        <div class="card" id="model-create">
            <div class="card-body">
                <form method="post" action="/create-model">
                    <h5 class="card-title">Maak hier een boot aan!</h5>
                    <p class="card-text">
                    <table class="model-info-table" style="float: left; width: 50%">
                        <tr>
                            <th>Boot details:</th>
                        </tr>
                        <tr>
                            <td>Naam:</td>
                            <td><input type="text" name="name" required value=""></td>
                        </tr>
                        <tr>
                            <td>Naam van image:</td>
                            <td><input type="text" name="image" required value=""></td>
                        </tr>
                        <tr>
                            <td>Lengte:</td>
                            <td><input type="text" name="lengte" required value=""></td>
                        </tr>
                        <tr>
                            <td>Breedte:</td>
                            <td><input type="text" name="breedte" required value=""></td>
                        </tr>
                        <tr>
                            <td>Gewicht:</td>
                            <td><input type="text" name="gewicht" required value=""></td>
                        </tr>
                        <tr>
                            <td>Doorvaarthoogte:</td>
                            <td><input type="text" name="vaarthoogte" required value=""></td>
                        </tr>
                        <tr>
                            <td>Diepgang:</td>
                            <td><input type="text" name="diepgang" required value=""></td>
                        </tr>
                        <tr>
                            <td>Max. PK:</td>
                            <td><input type="text" name="maxpk" required value=""></td>
                        </tr>
                        <tr>
                            <td>Max. Personen:</td>
                            <td><input type="text" name="maxpers" required value=""></td>
                        </tr>
                        <tr>
                            <td>CE Categorie:</td>
                            <td><input type="text" name="cec" required value=""></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="create" value="Create" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
                </p>
            </div>

        </div>
    </div>
</div>