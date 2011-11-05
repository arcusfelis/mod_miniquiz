<?php
/**
 * miniquiz Module Entry Point
 * 
 * @package    
 * @subpackage 
 * @link http://github.com/freeakk
 * @license        
 * 
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
// Include the syndicate functions only once
require_once( dirname(__FILE__).DS.'helper.php' );

if (!isset($_COOKIE['miniquiz_flag']) 
	&& !(isset($_GET['option']) && $_GET['option'] == 'com_miniquiz'))
	$q = modminiquizHelper::getRandomQuestion( );

require( JModuleHelper::getLayoutPath( 'mod_miniquiz' ) );
?>
