<?php
/**
 * @version		$Id: mod_multijscss.php 20196 2014-06-15 
 * @subpackage	mod_multijscss
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
if ($params->def('prepare_content', 1))
{
	JPluginHelper::importPlugin('content');

	$module->content = JHtml::_('content.prepare', $module->content, '', 'mod_multijscss');
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_multijscss', $params->get('layout', 'default'));