<form id="creationArticle" class="container content" method="post">
  <h1>Création de l'article</h1>
  <div class="formInput form-group">
    <label for="titreArticle">Titre de l'article</label>
    <input type="text" placeholder="Le titre de votre article ..." name="titreArticle" value="<?= $title = isset($title) ? $title : '' ?>">
  </div>
  <div class="row">
    <div class="col formInput form-group">
      <label for="imageArticle">Image de l'article</label>
      <input type="text" placeholder="L'image de votre article ..." name="imageArticle" value="<?= $url_img = isset($url_img) ? $url_img : '' ?>">
    </div>
    <div class="col formInput form-group">
      <label for="altImgArticle">Alternative de l'image</label>
      <input type="text" placeholder="L'alternative de votre image ..." name="altImgArticle" value="<?= $alt_img = isset($alt_img) ? $alt_img : '' ?>">
    </div>
  </div>
  <div class="formInput form-group">
    <label for="texteArticle">Texte de votre article</label>
    <textarea placeholder="Entrez le texte de votre article ici ..." rows="10" name="texteArticle"><?= $content = isset($content) ? $content : '' ?></textarea>
  </div>
  <button type="submit" class="btn btn-success" name="validationArticle" value="ok">Je valide mon article !</button>
</form>
