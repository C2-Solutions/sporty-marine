<div class="container">
    <div class="row" id="contact">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    Vraag van <?php echo $contact['name'];?>
                </div>

                <div class="card-body">
                    <div class="form-group row justify-content-center">
                        <label class="col-md-2 col-form-label text-md-left"><b>E-mailadres:</b></label>
                        <div class="col-md-3">
                            <?php echo $contact['email'];?>
                        </div>

                        <label class="col-md-2 col-form-label text-md-left"><b>Telefoonnummer:</b></label>
                        <div class="col-md-2">
                            <?php echo $contact['phone'];?>
                        </div>

                        <label class="col-md-2 col-form-label text-md-left"><b>Gevraagd op:</b></label>
                        <div class="col-md-1">
                            <?php echo convert_date($contact['date']) ?>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <label for="question_<?php echo $contact['id'];?>" class="col-md-2 col-form-label text-md-left">
                            <b>Vraag:</b>
                        </label>
                        <div class="col-md-10" id="question_<?php echo $contact['id'];?>">
                                <p class="text-question"><?php echo $contact['message'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
