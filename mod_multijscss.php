<?php
/**
 * @version		$Id: mod_multijscss.php 20196 2014-06-15 
 * @subpackage	mod_multijscss
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('jquery.framework'); 
 JHtml::_('bootstrap.framework');
if ($params->def('prepare_content', 1))
{
	JPluginHelper::importPlugin('content');

	$module->content = JHtml::_('content.prepare', $module->content, '', 'mod_multijscss');
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$css_file = $params->get( 'stylesheet', 'nothing.css');
if ( $css_file ) { 

$css_url = JHtml::_('stylesheet', 'mod_multijscss/' . $css_file, array(), true);
}

$js_file = $params->get( 'javascript', 'nothing.js' );
if ( $js_file ) { 

$js_url = JHtml::_('script', 'mod_multijscss/' . $js_file, array(), true);

}
$js_file2 = $params->get( 'javascript2', 'nothing2.js' );
if ( $js_file2 ) { 

	$js2_url = JHtml::_('script', 'mod_multijscss/' . $js_file2, array(), true);
}

require JModuleHelper::getLayoutPath('mod_multijscss', $params->get('layout', 'default'));