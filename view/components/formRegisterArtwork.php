<section title="form-register-artwork" class="register-artwork">
    <header class="register-artwork__header">
        <h2 class="register-artwork--title">Enregistrer une nouvelle oeuvre</h2>
    </header>
    <form name="create_artwork" action="post/traitement.php" method="post">
        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">
        <label class="register-artwork__field-group">
            <h3 class="register-artwork__field-group--title">Titre de l'oeuvre <span aria-label="required">*</span></h3>
            <input type="text" name="title" class="register-artwork__input" required>
        </label>
        <label class="register-artwork__field-group">
            <h3 class="register-artwork__field-group--title">Nom de l'artiste créateur <span aria-label="required">*</span></h3>
            <input type="text" name="artist" class="register-artwork__input" required>
        </label>
        <label class="register-artwork__field-group">
            <h3 class="register-artwork__field-group--title">Description de l'oeuvre</h3>
            <textarea name="description" class="register-artwork__input--multiline"
                      minlength="3" ></textarea>
        </label>
        <label class="register-artwork__field-group">
            <h3 class="register-artwork__field-group--title">Lien vers une photo de l'oeuvre</h3>
            <input type="url" name="image_link" class="register-artwork__input">
        </label>
        <label class="register-artwork__field-group--submit">
            <input type="submit" value="Enregistrer" class="register-artwork__input--submit">
        </label>
    </form>
</section>