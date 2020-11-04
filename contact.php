<h1 class="text-center mt-3">Contact</h1>
<div class="paragraphe">
    <p>Afin que nous puissions discuter plus amplement, veuillez utiliser le formulaire ci-dessous. Vous trouverez plus bas des liens vers mes profils sur une séléction de réseaux sociaux. Restons connectés.</p>
    <p><b>Envoyer un message :</b></p>
    <div class="card mb-3">
        <div class="card-body">
            <form id="contact-form" method="post" action="inc/functions.php" role="form">
                <div class="messages"></div>
                <div class="controls">
                    <div class="form-group">
                        <label for="form_email">Email</label>
                        <input type="email" name="email" class="form-control" id="form_email" aria-describedby="emailHelp" required="required" data-error="Votre email est obligatoire." placeholder="Votre email">
                        <div class="text-danger help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="form_message">Message</label>
                        <textarea type="text" name="message" rows="3" class="form-control" id="form_message" required="required" data-error="Un message est obligatoire." placeholder="Votre message"></textarea>
                        <div class="text-danger help-block with-errors"></div>
                    </div>
                    <div class="col-lg-6">
                        <input type="submit" class="btn btn-success btn-send" value="Envoyer">
                    </div>
                </div>
            </form>
        </div>
    </div>

    

    <p><b>Réseaux Sociaux:</b></p>

    <div class="row justify-content-evenly align-items-center">    
        <div class="col-lg-3">
            <p class="text-muted">GitHub</p>
            <a href="https://github.com/flo-man" target="_blank">Profil sur GitHub</a>
        </div>
        <div class="col-lg-3">
            <p class="text-muted">LinkedIn</p>
            <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="horizontal" data-theme="light" data-vanity="florent-claudot-5411a0172"><a class="LI-simple-link" target="_blank" href='https://fr.linkedin.com/in/florent-claudot-5411a0172?trk=profile-badge'>Florent Claudot</a></div>
        </div>
        <div class="col-lg-3">
            <p class="text-muted">Twitter</p>
            <a href="https://twitter.com/Flo_Brown?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-lang="fr" data-show-count="false">Follow @Flo_Brown</a>
        </div> 
        <div class="col-lg-3">
            <p class="text-muted">Spotify</p>
            <iframe src="https://open.spotify.com/follow/1/?uri=spotify:user:flo-brown&size=detail&theme=light&show-count=0" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
        </div>   
    </div>
</div>