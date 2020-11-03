<?php
require_once 'inc/init.php';
//***************************************** TRAITEMENT PHP *****************************************//
$contenu = '';

//***************************************** AFFICHAGE *****************************************//
require_once 'inc/header.php';
?>
            <div class="col-md-9 space">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <?php include_once 'a_propos.php' ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-parcours" role="tabpanel" aria-labelledby="v-pills-parcours-tab">
                        <?php include_once 'parcours.php' ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-travaux" role="tabpanel" aria-labelledby="v-pills-travaux-tab">
                        <?php include_once 'travaux.php' ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                        <?php include_once 'contact.php' ?>
                    </div>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->




<?php
require_once 'inc/footer.php';