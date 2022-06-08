<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    Vraag van <?php echo $contact['name'];?>
                    <a style="float: right" class="clickable" href="/delete-contact?id=<?php echo $contact['id']; ?> "
                       onclick="return confirm('Weet je zeker dat je dit wilt verwijderen?')">
                        Verwijderen
                    </a>
                </div>

                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label"><b>E-mailadres:</b></label>
                        <div class="col-md-3 col-form-label">
                            <?php echo $contact['email'];?>
                        </div>

                        <label class="col-md-2 col-form-label"><b>Telefoonnummer:</b></label>
                        <div class="col-md-2 col-form-label">
                            <?php echo $contact['phone'];?>
                        </div>

                        <label class="col-md-2 col-form-label"><b>Gevraagd op:</b></label>
                        <div class="col-md-1 col-form-label">
                            <?php echo convert_date($contact['date']) ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="question_<?php echo $contact['id'];?>" class="col-md-2 col-form-label">
                            <b>Vraag:</b>
                        </label>
                        <div class="col-md-10 col-form-label" id="question_<?php echo $contact['id'];?>">
                                <p class="text-question"><?php echo $contact['message'];?></p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-10">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
