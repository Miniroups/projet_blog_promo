<div class="content article-show">
    <!-- En tête de l'article -->
    <div class="container-fluid head-article">
        <img class="background" src="http://placehold.it/1980x1180" alt="Image de l'article">
        <h1>Titre de mon Article</h1>
        <div class="meta"><?= $article['created_at'] ?> par <b>Monnier</b>.</div>
    </div>

    <!-- Body de l'article -->
    <section class="container article">
        <article>
            <p><?= $article['content'] ?></p>
        </article>
    </section>

    <!-- Espace commentaire de l'article -->
    <section class="container commentaire">

        <!-- Ajouter un nouveau commentaire -->
        <div class="new-comment">
            <form id="form-commentaire" name="form-commentaire" method="post">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="author">
                </div>
                <div class="form-group">
                    <label for="content">Commentaire</label>
                    <textarea id="content" name="content" cols="2" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submitCommentaire">Envoyer mon commentaire</button>
            </form>
        </div>

        <!-- Afficher les commentaires -->
        <div class="show-comments">
            <h2><i class="fas fa-comments"></i> Les commentaires</h2>
            <?php foreach ($comments as $comment) { ?>
                <article>
                    <h4><i class="fas fa-user"></i> <?= $comment['author'] ?> <small> (<?= $comment['created_at'] ?>)</small></h4>
                    <p><?= $comment['content'] ?></p>
                </article>
            <? } ?>

            <button class="btn btn-success form-control">Voir plus de commentaires...</button>
        </div>

    </section>

</div>
