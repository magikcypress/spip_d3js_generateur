<?php

if (!defined("_ECRIRE_INC_VERSION")) return;


function action_supprimer_d3js_generateur_dist(){
	
	$securiser_action = charger_fonction('securiser_action', 'inc');
	$arg = $securiser_action();
	
	list($id_d3js_generateur) = preg_split(',[^0-9],',$arg);
	include_spip('inc/autoriser');
	if (intval($id_d3js_generateur) AND autoriser('supprimer','d3js_generateur',$id_d3js_generateur)){
		include_spip("action/editer_d3js_generateur");
		d3js_generateur_supprimer($id_d3js_generateur);
	}
}

?>