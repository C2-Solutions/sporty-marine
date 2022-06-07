<div class="card mb-3 contact-card">
    <div class="card-header">
        <a class="clickable" href="admin-contact?id=<?php echo $contact['id'];?>">
            Vraag van <?php echo $contact['name'];?>
        </a>
    </div>
        <div class="card-body">
            <div class="form-group row ">
                <label class="col-md-2 col-form-label "><b>E-mailadres:</b></label>
                <div class="col-md-3">
                    <?php echo $contact['email'];?>
                </div>

                <label class="col-md-2 col-form-label "><b>Telefoonnummer:</b></label>
                <div class="col-md-2">
                    <?php echo $contact['phone'];?>
                </div>

                <label class="col-md-2 col-form-label "><b>Gevraagd op:</b></label>
                <div class="col-md-1">
                    <?php echo convert_date($contact['date']) ?>
                </div>
            </div>

         <div class="form-group row ">
            <label for="question_<?php echo $contact['id'];?>" class="col-md-2 col-form-label "><b>Vraag:</b></label>

            <div class="col-md-10" id="question_<?php echo $contact['id'];?>">
                <?php
                if (mb_strlen($contact['message']) < 300) :
                    echo '<p class="text-question">', $contact['message'], '</p>';
                else :
                    echo '<p class="text-question">', substr($contact['message'], 0, 300), '...</p>
                    <a class="clickable" href="admin-contact?id=', $contact['id'],
                        '">Klik hier om verder te lezen
                    </a>';
                endif;
                ?>
            </div>
        </div>
    </div>
</div>