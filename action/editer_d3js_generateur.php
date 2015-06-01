<?php

if (!defined("_ECRIRE_INC_VERSION")) return;

include_spip('inc/autoriser');

/**
 * Supprimer définitivement un graph
 * 
 * @param int $id_d3js_generateur identifiant numérique du graph
 * @return int|false 0 si réussite, false dans le cas ou le graph n'existe pas
 */
function d3js_generateur_supprimer($id_d3js_generateur){
	$valide = sql_getfetsel('id_d3js_generateur','spip_d3js_generateur','id_d3js_generateur='.intval($id_d3js_generateur));
	if($valide && autoriser('supprimer','d3js_generateur',$valide)){
		// sql_delete("spip_d3js_generateur", "id_d3js_generateur=".intval($id_d3js_generateur));
		sql_delete("spip_d3js_generateur", "id_d3js_generateur=".intval($id_d3js_generateur));
		$id_d3js_generateur = 0;
		include_spip('inc/invalideur');
		suivre_invalideur("id='id_d3js_generateur/$id_d3js_generateur'");
		return $id_d3js_generateur;
	}
	return false;
}

?>