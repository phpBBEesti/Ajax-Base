<?php
/**
* Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
*
* Ajax Base extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Jakub Senko <jakubsenko@gmail.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_AJAX_BASE_TITLE'			=> 'Ajaxi Baas',
	'ACP_AJAX_BASE_OPTIONS_SAVED'	=> 'Ajaxi Baasi valikud on salvestatud.',
	'OPTIONS'						=> 'Valikud',
	'AJAXBASE_ALLOW_PREVIEW'		=> 'Ajaxify postituse eelvaade',
	'AJAXBASE_ALLOW_WHOISONLINE'	=> 'Ajaxify Kes on saadaval',
	'AJAXBASE_ALLOW_STATISTICS'		=> 'Ajaxify statistika',
));
