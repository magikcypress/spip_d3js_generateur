<?php

/**
 * Administrations pour d3js_generateur
 *
 * @plugin     d3js_generateur
 * @copyright  2015
 * @author     cyp
 * @licence    GNU/GPL
 * @package    SPIP\d3js_generateur\administrations
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

/**
 * Installation/maj des tables d3js_generateur
 *
 * @param string $nom_meta_base_version
 * @param string $version_cible
 */
function d3js_generateur_upgrade($nom_meta_base_version,$version_cible){
	
	$maj = array();

	$maj['create'] = array(
		array('maj_tables', array('spip_d3js_generateur', 'spip_d3js_generateur_documents'))
	);

	$maj['0.0.2'] = array(	
		// Ajout de champs dans spip_d3js_generateur
	 	array('maj_tables', array('spip_d3js_generateur'))
	);

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}

/**
 * Desinstallation/suppression des tables d3js_generateur
 *
 * @param string $nom_meta_base_version
 */
function d3js_generateur_vider_tables($nom_meta_base_version) {

	sql_drop_table("spip_d3js_generateur");
	sql_drop_table("spip_d3js_generateur_documents");
	effacer_meta("d3js_generateur");
	effacer_meta($nom_meta_base_version);
}

?>