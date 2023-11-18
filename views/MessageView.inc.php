<?php 
require_once("views/View.inc.php");

class MessageView extends View {

	/**
	 * Affiche un message à l'utilisateur.
	 * 
	 * Le modèle passé en paramètre est une instance de la classe 'MessageModel'.
	 *
	 * @see View::displayBody()
	 */
	public function displayBody($model) { 
		echo '<div class="message">'.$model->getMessage().'</div>';
	}

}
?>
