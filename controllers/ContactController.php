<?php 
class ContactController{

	public function __construct() {
	
	}
			
	public function run(){

        # Envoi d'un email sur base des informations du formulaire transmises par la méthode POST
        $notification='';
        if (!empty($_POST)) {

            if (empty($_POST['email']) && empty($_POST['message'])) {
                $notification='Veuillez entrer une adresse email et un message.';
            } elseif (empty($_POST['email'])) {
                $notification='Veuillez entrer une adresse email.';
            } elseif (empty($_POST['message'])) {
                $notification='Veuillez entrer un message.';
            } elseif (!preg_match('/^.+\@.+\..+$/',$_POST['email'])) {
                $notification='Veuillez entrer une adresse email correcte.';
            } else {
                $to      = 'webmaster@votresite';
                $subject = 'Test du site des bonnes nouvelles';
                $message = htmlspecialchars($_POST['message']);
                $headers = 'From: ' . htmlspecialchars($_POST['email']);

                if (@mail($to, $subject, $message, $headers)) {
                    $notification='Vos informations ont été transmises avec succès.';
                } else {
                    $notification='Vos informations n\'ont pas été transmises à cause d\'un souci technique.';
                }
            }
        }
		
		# Ecrire ici la vue
		require_once(CHEMIN_VUES . 'contact.php');
	}
} 
?>