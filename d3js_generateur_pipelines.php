<?php
/**
 * Utilisations de pipelines par d3js_generateur
 *
 * @plugin     d3js_generateur
 * @copyright  2015
 * @author     cyp
 * @licence    GNU/GPL
 * @package    SPIP\d3js_generateur\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

/**
 * Ajoute les css pour d3js_generateur chargées dans le privé
 * 
 * @param string $flux Contenu du head HTML concernant les CSS
 * @return string       Contenu du head HTML concernant les CSS
 */
function d3js_generateur_header_prive_css($flux) {

	$css = find_in_path('css/d3js_generateur.css');
	$flux .= "<link rel='stylesheet' type='text/css' media='all' href='".direction_css($css)."' />\n";

	return $flux;
}

/**
 * Ajoute les css pour d3js_generateur chargées dans le public
 * 
 * @param string $flux Contenu du head HTML concernant les CSS
 * @return string       Contenu du head HTML concernant les CSS
**/
function d3js_generateur_insert_head_css($flux) {
	$css = find_in_path('css/d3js_generateur.css');
	$flux .= '<link rel="stylesheet" href="'.direction_css($css).'" type="text/css" media="all" />';

	return $flux;
}

?>