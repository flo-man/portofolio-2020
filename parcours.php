<h1 class="text-center mt-3">Parcours</h1>
<div class="paragraphe">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Scolaire</a>
            <a class="nav-link" id="nav-pro-tab" data-toggle="tab" href="#nav-pro" role="tab" aria-controls="nav-pro" aria-selected="false">Professionnel</a>
            <a class="nav-link" id="nav-perso-tab" data-toggle="tab" href="#nav-perso" role="tab" aria-controls="nav-perso" aria-selected="false">Personnel</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <?php include_once '_scolaire.php' ?>
        </div>
        <div class="tab-pane fade" id="nav-pro" role="tabpanel" aria-labelledby="nav-pro-tab">
            <?php include_once '_professionnel.php' ?>
        </div>
        <div class="tab-pane fade" id="nav-perso" role="tabpanel" aria-labelledby="nav-perso-tab">
            <?php include_once '_personnel.php' ?>
        </div>
    </div>
</div>
<div class="paragraphe">

</div>