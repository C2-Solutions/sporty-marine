<div class="container">
    <div class="row" id="contacts_overview">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    Contact inzendingen
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-2" id="contacts">
            <?php
            if (!empty($contacts)) :
                foreach ($contacts as $contact) {
                    require('views/shared/admin/contactlist.php');
                }
            else :
                echo 'Er zijn geen ingezonden berichten beschikbaar.';
            endif;
            ?>
        </div>
    </div>
</div>
