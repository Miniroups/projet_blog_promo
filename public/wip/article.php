<?php include_once('./include_head.php');?>
<?php include_once('./include_header.php');?>

<div class="content article-show">

    <!-- En tête de l'article -->
    <div class="container-fluid head-article">
        <img class="background" src="http://placehold.it/1980x1180" alt="Image de l'article">
        <h1>Titre de mon Article</h1>
    </div>

    <!-- Body de l'article -->
    <section class="container article">
        <article>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi temporibus repellendus, assumenda consequuntur cum, doloremque magnam architecto tempora vel placeat ad obcaecati, repellat consequatur ea. Voluptas debitis libero ducimus praesentium!
        </article>
    </section>

    <!-- Espace commentaire de l'article -->
    <section class="container commentaire">

        <!-- Ajouter un nouveau commentaire -->
        <div class="new-comment">
            <form id="form-commentaire" name="form-commentaire" action="#" method="#">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="content">Commentaire</label>
                    <textarea id="content" name="content" cols="2" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit-commentaire">Envoyer mon commentaire</button>
            </form>
        </div>

        <!-- Afficher les commentaires -->
        <div class="show-comments">

        </div>

    </section>

</div>

<?php include_once('./include_footer.php');?>