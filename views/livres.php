<section id="contenu">
    <h2>Les Livres</h2>
    <p>Bienvenue sur la page des livres.</p>
    <div class="formulaire">
        <form action="index.php?action=livres" method="post">
            <p>Rechercher : <input type="text" name="keyword" value="<?php echo $html_motcle ?>"/>
                <input type="submit" name="form_recherche" value="Rechercher"></p>
        </form>
    </div>
    <div id="notification"><?php echo $notification; ?></div>
    <table id="tableBalises">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Auteur</th>
        </tr>
        </thead>
        <tbody>
        <?php for ($i=0;$i<count($tablivres);$i++) { ?>
            <tr>
                <td><span class="html"><?php echo $tablivres[$i]->html_titre() ?></span></td>
                <td><?php echo $tablivres[$i]->html_auteur() ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="formulaire">
        <form action="index.php?action=livres" method="post">
            <p>Titre du livre :	<input type="text" name="titre" /></p>
            <p>Auteur : <input type="text" name="auteur" /></p>
            <p><input type="submit" name="form_ajout" value="Ajouter"></p>
        </form>
    </div>
</section>