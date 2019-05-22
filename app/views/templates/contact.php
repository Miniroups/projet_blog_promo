<?php session_start(); ?>
  <!doctype html>
  <html lang="fr">
    <head>
      <meta charset="utf-8">
      <title>Formulaire de contact</title>
      <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body style="padding:100px 0 200px 0">
      <div style="padding-bottom:100px" class="container">
        <div class="row">
          <hr>
          <h1>Contact</h1>
          <hr>
        </div>
      </div>
    <!-- CONTENT -->
      <div class="container">
        <?php if(array_key_exists('success',$_SESSION)): ?>
          <div class="alert alert-success">
          Votre email a bien été transmis !
          </div>
        <?php endif; ?>
        
      <form action="send_form.php" method="post">

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="inputname">Votre nom*</label>
              <input type="text" name="name" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
              <?php if(array_key_exists('errors',$_SESSION)): ?>
                <div style="color:red">
                <?= $_SESSION['errors']['name']; ?>
                </div>
              <?php endif; ?>
            </div><!--/*.form-group-->
          </div><!--/*.col-md-6-->

          <div class="col-md-6">
            <div class="form-group">
              <label for="inputfirstname">Votre prénom*</label>
              <input type="text" name="firstname" class="form-control" id="inputfirstname" value="<?php echo isset($_SESSION['inputs']['firstname'])? $_SESSION['inputs']['firstname'] : ''; ?>">
              <?php if(array_key_exists('errors',$_SESSION)): ?>
                <div style="color:red">
                <?= $_SESSION['errors']['firstname']; ?>
                </div>
              <?php endif; ?>
            </div><!--/*.form-group-->
          </div><!--/*.col-md-6-->

          <div class="col-md-6">
            <div class="form-group">
              <label for="inputemail">Votre email*</label>
              <input type="email" name="email" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
              <?php if(array_key_exists('errors',$_SESSION)): ?>
                <div style="color:red">
                <?= $_SESSION['errors']['email']; ?>
                </div>
              <?php endif; ?>
            </div><!--/*.form-group-->
          </div><!--/*.col-md-6-->

          <div class="col-md-6">
            <div class="form-group">
              <label for="inputtel">Votre téléphone</label>
              <input type="tel" name="tel" class="form-control" id="inputtel" value="<?php echo isset($_SESSION['inputs']['tel'])? $_SESSION['inputs']['tel'] : ''; ?>">
            </div><!--/*.form-group-->
          </div><!--/*.col-md-6-->

          <div class="col-md-12">
            <div class="form-group">
              <label for="inputmessage">Votre message*</label>
              <textarea id="inputmessage" name="message" class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
              <?php if(array_key_exists('errors',$_SESSION)): ?>
                <div style="color:red">
                <?= $_SESSION['errors']['message']; ?>
                </div>
              <?php endif; ?>
            </div><!--/*.form-group-->
          </div><!--/*.col-md-12-->
          <div class="col-md-12">
            <input type="checkbox" name="rgpd">
            <label for="rgpd">En cochant cette case, vous reconnaissez avoir consulté et accepté les conditions générales d'utilisation du site*</label>
            <?php if(array_key_exists('errors',$_SESSION)): ?>
                <div style="color:red">
                <?= $_SESSION['errors']['rgpd']; ?>
                </div>
              <?php endif; ?>
          </div>
          <div class="col-md-12">
            <button type='submit' class='btn btn-primary'>Envoyer</button>
            </div><!--/*.col-md-12-->
          </div><!--/*.row-->

        </form>
    </div><!--/*.container-->
      <!-- END CONTENT -->
    </body>
  </html>
  <?php
  unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
  ?>
