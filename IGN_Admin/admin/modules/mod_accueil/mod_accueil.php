<?php

require_once('include/module_generique.php');
require_once('controleur_accueil.php');

class ModAccueil extends ModuleGenerique{


	function __construct(){
		$this->controleur = new ControleurAccueil();

		if(isset($_GET['action'])){
			$action = $_GET['action'];
		}else{
			$action = "default";
		}

		$this->action($action);
	}

	function action($action){
		switch ($action) {
			default:
				$this->controleur->affiche_vue();

				break;
		}
	}

}

?>