<div class="content">
    <h1 style="text-align: center" class="m-5">Inscription / Edition de votre profil</h1>

    <section id="inscription" class="container">
        <form method="post">
            <div class="row">
                <div class="col formInput form-group">
                    <label for="identifiant">identifiant</label>
                    <input type="text" placeholder="Votre identifiant ..." name="identifiant" value="<?= $login = isset($login) ? $login : '' ?>">
                </div>
                <div class="col formInput form-group">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Votre adresse email ..." name="email" value="<?= $email = isset($email) ? $email : '' ?>">
                </div>
            </div>
            <div class="row">
                <div class="col formInput form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" placeholder="Votre mot de passe ..." name="password">
                </div>
                <div class="col formInput form-group">
                    <label for="confirmPassword">Confirmation mot de passe</label>
                    <input type="password" placeholder="Confirmaton de votre mot de passe ..." name="confirmPassword">
                </div>
            </div>
            <div class="row">
                <div class="col formInput form-group">
                    <label for="name">Nom</label>
                    <input type="text" placeholder="Votre nom ..." name="name" value="<?= $lastname = isset($lastname) ? $lastname : '' ?>">
                </div>
                <div class="col formInput form-group">
                    <label for="firstname">Prénom</label>
                    <input type="text" placeholder="Votre prénom ..." name="firstname" value="<?= $firstname = isset($firstname) ? $firstname : '' ?>">
                </div>
            </div>
            <div class="row">
                <div class="col formInput form-group">
                    <label for="cvUpload">CV</label>
                    <input type="file" placeholder="Votre CV ..." name="cvUpload">
                </div>
                <div class="col formInput form-group">
                    <label for="description">Description</label>
                    <textarea id="inputDescription" name="description" class="form-control" value="<?= $about = isset($about) ? $about : '' ?>"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col formInput form-group">
                    <label for="imageProfil">Image de profil</label>
                    <input type="text" placeholder="L'image de votre profil ..." name="imageProfil" value="<?= $url_avatar = isset($url_avatar) ? $url_avatar : '' ?>">
                </div>
                <div class="col formInput form-group" id="jambon">
                    <button type="submit" class="btn btn-success" name="submitInscription">Je valide mon inscription !</button>
                </div>
            </div>
        </form>
    </section>
</div>
