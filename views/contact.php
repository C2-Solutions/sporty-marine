<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header" style="text-align: center">
                    <h4>Heeft u een vraag?</h4>
                </div>
            </div>
        </div>
        <div class="col-md-8 mb-2">
            <div class="card">
                <div class="card-header">
                    <?php if (!empty(postSuccess())) :
                        echo 'Uw bericht is met succes verstuurd!';
                    else :
                        echo 'Stel hier je vraag!';
                    endif;
                    ?>
                </div>

                <div class="card-body">
                    <?php if (!empty(postSuccess())) :
                        echo 'Als u nog een bericht wilt versturen kunt u de pagina verversen.';
                    else :
                        ?>
                    <form method="post" action="/contact">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Naam</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mailadres</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Telefoonnummer</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control" name="phone" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">Uw vraag</label>

                            <div class="col-md-6">
                                <input id="message" type="textarea" class="form-control" name="message" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Versturen
                                </button>
                            </div>
                        </div>
                    </form>
                        <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">Mijn telefoonnummer</div>

                    <div class="card-body text-center">
                        U kunt mij bereiken op:
                        <br><br>
                        <a href="tel:"><big>"insert info hier"</big></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
unset($_SESSION['contactsent']);
?>