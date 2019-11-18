<?php 
class LivresController{

    private $_db;

	public function __construct($db) {
        $this->_db = $db;
	}
			
	public function run(){
        # Notification qui sera affichée dans la vue
        $notification='';
        # Mot clé de recherche
        $html_motcle='';

        # Insertion des données d'un livre en provenance du formulaire form_ajout
        if (!empty($_POST['form_ajout'])) {
            if (empty($_POST['titre']) && empty($_POST['auteur'])) {
                $notification='Veuillez entrer un titre et un auteur';
            } elseif (empty($_POST['titre'])) {
                $notification='Veuillez entrer un titre';
            } elseif (empty($_POST['auteur'])) {
                $notification='Veuillez entrer un auteur';
            } else {
                if ($this->_db->insert_livre($_POST['titre'],$_POST['auteur']))
                {
                    $notification='Ajout bien fait';
                } else {
                    $notification='Erreur à l\'ajout';
                }
            }
        }

        # Recherche si un mot clé est entré dans le formulaire form_recherche
        if (!empty($_POST['form_recherche'])
            && !empty($_POST['keyword'])) {
            $tablivres=$this->_db->select_livres($_POST['keyword']);
            $html_motcle=htmlspecialchars($_POST['keyword']); # Protection faille XSS pour l'affichage
        } else {
            # Sélection de tous les livres sous forme de tableau
            $tablivres=$this->_db->select_livres();
        }
		
		# Ecrire ici la vue livres.php
		# $tablivres contient un tableau de livres
		require_once(CHEMIN_VUES . 'livres.php');
	}
} 
?>