<section id="contact" class="container-fluid content">
      <div class="row">
        <div class="col-md-8 col-sm-12"><!-- FORM COL -->
          <div class="container">
            <div class="row justify-content-center">
              <h1>Formulaire de contact</h1>
            </div>
          </div>

          <!-- CONTENT -->
          <div class="container">            
            <form action="send_form.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputname">Votre nom*</label>
                    <input type="text" name="name" class="form-control" id="inputname" value="">
                  </div><!--/*.form-group-->
                </div><!--/*.col-md-6-->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputfirstname">Votre prénom*</label>
                    <input type="text" name="firstname" class="form-control" id="inputfirstname" value="">
                  </div><!--/*.form-group-->
                </div><!--/*.col-md-6-->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputemail">Votre email*</label>
                    <input type="email" name="email" class="form-control" id="inputemail" value="">
                  </div><!--/*.form-group-->
                </div><!--/*.col-md-6-->

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputtel">Votre téléphone</label>
                    <input type="tel" name="tel" class="form-control" id="inputtel" value="">
                  </div><!--/*.form-group-->
                </div><!--/*.col-md-6-->

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="titlemessage">Sujet*</label>
                    <input id="titlemessage" name="title" class="form-control" id="inputtitle" value="">
                  </div><!--/*.form-group-->
                </div><!--/*.col-md-12-->

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="inputmessage">Votre message*</label>
                    <textarea id="inputmessage" name="message" class="form-control"></textarea>
                  </div><!--/*.form-group-->
                </div><!--/*.col-md-12-->

                <div class="col-md-12">
                  <input type="checkbox" name="rgpd">
                  <label for="rgpd">En cochant cette case, vous reconnaissez avoir consulté et accepté les conditions générales d'utilisation du site*</label>
                </div>
                <div class="col-md-12">
                  <button type='submit' class='btn btn-primary'>Envoyer</button>
                </div><!--/*.col-md-12-->
              </div><!--/*.row-->
            </form>
          </div><!--/*.container-->
          <!-- END CONTENT -->
        </div><!-- END FORM COL -->  

        <div id="contact-bloc" class="col-md-4 col-sm-12">
          <h3>Coordonnées</h3>
          <h5>Corrèze digital School</h5>
          <p>22 Avenue du Dr Albert Schweitzer, 19000 Tulle</p>
          <p>Téléphone : 06.89.27.59.75</p>
          <p><a class="fab fa-facebook-f" href="https://www.facebook.com/CorrtechTerritoireNumerique/" target="_blank"></a> <a class="fab fa-twitter" href="https://twitter.com/corrtech?lang=fr" target="_blank"></a> <a class="fab fa-linkedin-in" href="https://www.linkedin.com/company/corrtech/" target="_blank"></a></p>
        </div>
      </div><br><!-- END GLOBAL ROW -->

      <iframe id="map" src="https://www.openstreetmap.org/export/embed.html?bbox=1.7577266693115237%2C45.25760952610949%2C1.8234729766845705%2C45.29378835869491&amp;layer=mapnik&amp;marker=45.27570182561101%2C1.7905998229980469"></iframe>
    </section>

  